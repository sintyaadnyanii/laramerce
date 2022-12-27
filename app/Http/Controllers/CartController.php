<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function allCart()
    {
        $data = [
            'title' => 'Carts | Urban Adventure'
        ];
        return view('dashboard.user.cart.all-cart', $data);
    }
}