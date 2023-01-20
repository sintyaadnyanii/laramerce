<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class GeneralController extends Controller
{
    public function main()
    {
        $data = [
            'title' => 'Homepage | Urban Adventure',
            'products' => Product::get(),
            'categories' => Category::first()->get(),
            'brands' => Brand::with(['products'])->latest()->get()
        ];
        return view('frontpage.main.main', $data);
    }
    public function cart()
    {
        $data = [
            'isUser' => auth()->user(),
            'cart' => auth()->user()->cart ?? [],
            'weight' => 0,
            'title' => 'Cart | Urban Adventure',
            'categories' => Category::first()->get(),
        ];
        foreach ($data['cart'] as $item) {
            $data['weight'] += ($item->product->weight * 1000);
        }
        return view('frontpage.cart.cart', $data);
    }
    public function product_detail(Product $product)
    {
        $data = [
            'title' => 'Detail Product | Urban Adventure',
            'product' => $product,
            'products' => Product::latest()->get()->random(Product::all()->count() > 6 ? 6 : Product::all()->count()),
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.product.product-detail', $data);
    }
    public function checkout()
    {
        $data = [
            'title' => 'Check Out | Urban Adventure',
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.cart.checkout', $data);
    }
    public function blog_detail()
    {
        $data = [
            'title' => 'Detail Blog | Urban Adventure',
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.blog.blog-detail', $data);
    }
    public function blog()
    {
        $data = [
            'title' => 'Blog | Urban Adventure',
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.blog.blog-page', $data);
    }
    public function order_detail()
    {
        $data = [
            'title' => 'Detail Order | Urban Adventure',
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.order.order-detail', $data);
    }
    public function order_history()
    {
        $data = [
            'title' => 'Detail Order | Urban Adventure',
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.order.order-history', $data);
    }
    public function my_account()
    {
        $data = [
            'title' => 'Profile | Urban Adventure',
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.profile.my-account', $data);
    }
    public function wishlist()
    {
        $data = [
            'title' => 'Whislist | Urban Adventure',
            'wishlist' => auth()->user()->wishlists ?? [],
            'categories' => Category::first()->get(),
        ];
        return view('frontpage.wishlist.wishlist', $data);
    }
}
