<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}