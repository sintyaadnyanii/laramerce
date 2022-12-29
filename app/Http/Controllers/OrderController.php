<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function allOrder()
    {
        $data = [
            'title' => 'Orders | Urban Adventure'
        ];
        return view('dashboard.admin.orders.all-order', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'orders.*.product' => 'required|string',
            'orders.*.amount' => 'required|numeric',
            'orders.*.price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Something Error With Your Input!')->withInput()->withErrors($validator);
        }
    }
}
