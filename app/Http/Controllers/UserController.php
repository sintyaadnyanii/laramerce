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
            'title' => 'Users | Urban Adventure',
            'users' => User::where('level', 'user')->latest()->filter(request(['search']))->paginate(10),
        ];
        return view('dashboard.admin.users.user-all', $data);
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
            if (User::where('email', $validated['email'])->first()->level == 'user') {
                return redirect()->route('main');
            }
            return redirect()->route('dashboard')->with('success', 'Login Success! <br> Welcome ' . auth()->user()->name);
        }
        return redirect()->back()->with('error', 'Login Failed! <br> Please Try Again');
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
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'OOPS! <br> An Error Occurred During Registration!');
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
    public function detailProfile(User $user)
    {
        $data = [
            'title' => 'Update Profile | Urban Adventure',
            'user' => $user->where('id', auth()->user()->id)->first()
        ];
        return view('dashboard.profile-detail', $data);
    }
    public function updateProfile(User $user)
    {
        $data = [
            'title' => 'Update Profile | Urban Adventure',
            'user' => $user->where('id', auth()->user()->id)->first()
        ];
        return view('dashboard.profile-update', $data);
    }

    public function patchProfile(Request $request, User $user)
    {
        if ($request->email != $user->email) {
            if (User::where('email', $user->email)->whereNot('id', $user->id)->count()) {
                return redirect()->back()->withInput()->with('error', 'This Email Has Been Used, Please Input Another Email');
            } else {
                $email_validator = Validator::make($request->all(), [
                    'email' => 'required|unique:users,email|email:dns',
                ]);

                if ($email_validator->fails()) {
                    return redirect()->back()->withErrors($email_validator)->withInput()->with('error', 'OPPS! <br> An Error Occurred During Updating!');
                }

                $validated_email = $email_validator->validate();
                $user->update(['email' => $validated_email['email']]);
            }
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:8|max:50',
            'phone' => 'required|numeric',
            'address' => 'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'OPPS! <br> An Error Occurred During Updating!');
        }
        $validated = $validator->validate();
        $updated_profile = $user->update([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'address' => $validated['address']
        ]);
        if ($updated_profile) {
            return redirect()->route('profile.update', ['user' => auth()->user()])->with('success', 'Your Account Successfully Updated');
        }
        redirect()->route('login')->with('error', 'Update Proccess Failed! <br> Please Try Again Later!');
    }
    public function deleteUser(User $user)
    {
        if ($user->delete()) {
            return redirect()->route('manage_user.all')->with('success', 'User @' . $user->name . ' Successfully Deleted');
        }
        return redirect()->back()->with('error', 'Error Occured, Please Try Again!');
    }
}