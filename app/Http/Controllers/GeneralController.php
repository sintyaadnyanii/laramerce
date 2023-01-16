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
    public function product_detail()
    {
        $data = [
            'title' => 'Detail Product | Urban Adventure'
        ];
        return view('frontpage.product.product-detail', $data);
    }
    public function checkout()
    {
        $data = [
            'title' => 'Check Out | Urban Adventure'
        ];
        return view('frontpage.cart.checkout', $data);
    }
    public function blog_detail()
    {
        $data = [
            'title' => 'Detail Blog | Urban Adventure'
        ];
        return view('frontpage.blog.blog-detail', $data);
    }
    public function blog()
    {
        $data = [
            'title' => 'Blog | Urban Adventure'
        ];
        return view('frontpage.blog.blog-page', $data);
    }
    public function order_detail()
    {
        $data = [
            'title' => 'Detail Order | Urban Adventure'
        ];
        return view('frontpage.order.order-detail', $data);
    }
    public function order_history()
    {
        $data = [
            'title' => 'Detail Order | Urban Adventure'
        ];
        return view('frontpage.order.order-detail', $data);
    }
    public function my_account()
    {
        $data = [
            'title' => 'Profile | Urban Adventure'
        ];
        return view('frontpage.profile.my-account', $data);
    }
    public function wishlist()
    {
        $data = [
            'title' => 'Whislist | Urban Adventure'
        ];
        return view('frontpage.wishlist.wishlist', $data);
    }
}