<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function allOrder()
    {
        $data = [
            'title' => 'Orders | Urban Adventure'
        ];
        return view('dashboard.admin.orders.all-order', $data);
    }
}