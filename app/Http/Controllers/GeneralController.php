<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function main()
    {
        $data = [
            'title' => 'Homepage | Urban Adventure'
        ];
        return view('frontpage.main.main', $data);
    }
    public function cart()
    {
        $data = [
            'title' => 'Cart | Urban Adventure'
        ];
        return view('frontpage.cart.cart', $data);
    }
}