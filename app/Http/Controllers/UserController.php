<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function allUser()
    {
        $data = [
            'title' => 'Users | Urban Adventure'
        ];

        return view('dashboard.admin.users.all-user', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Urban Adventure'
        ];
        return view('dashboard.login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register | Urban Adventure'
        ];
        return view('dashboard.register', $data);
    }
    public function attemptLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'There Is Something Wrong! Please Try Again');
        }
        $validated = $validator->validate();
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            return redirect()->route('dashboard')->with('success', 'Login Success1! <br> Welcome' . auth()->user()->name);
        }
        return redirect()->back()->with('error', 'Login Failed! <br> Try Again');
    }
    public function attemptRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:8|max:50',
            'email' => 'required|email:dns',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'password' => 'required|string',
            'password_confirm' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'OPPS! <br> Terjadi Kesalahan Pada Saat Regristrasi!');
        }
        $validated = $validator->validate();
        $user_is_created = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'password' => Hash::make($validated['password']),
        ]);
        if ($user_is_created) {
            if ($request->redirect_login) {
                if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
                    return redirect()->route('dashboard')->with('success', 'Login Success! <br> Welcome ' . auth()->user()->name);
                }
                return redirect()->route('login')->with('error', 'Otomatic Login Failed! <br> Try Login using Manual Method!');
            }
            return redirect()->route('login')->with('success', 'New Account Created! <br> Please Login Using Your New Account');
        }
        redirect()->route('login')->with('error', 'Register Failed! <br> Please Try Again Later!');
    }
    public function logout()
    {
        Session::flush();
        session()->invalidate();
        Auth::logout();
        return redirect()->route('login')->with('success', 'You Has Been Logged Out!')->withCookie(Cookie::forget('eksklusif_specials_token'));
    }
}