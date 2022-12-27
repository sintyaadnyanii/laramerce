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
}