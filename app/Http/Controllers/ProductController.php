<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProduct()
    {
        $data = [
            'title' => 'Products | Urban Adventure'
        ];
        return view('dashboard.admin.products.all-product', $data);
    }
}