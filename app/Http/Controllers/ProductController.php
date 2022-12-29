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

    public function createProduct()
    {
        $data = [
            'title' => 'Add New Products | Urban Adventure'
        ];
        return view('dashboard.admin.products.add-product', $data);
    }

    public function detailProduct(Product $product)
    {
        $data = [
            'title' => 'Product Detail | Urban Adventure',
            'product' => $product
        ];
        return view('dashboard.admin.product.detail-product');
    }
}
