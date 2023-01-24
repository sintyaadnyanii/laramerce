<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

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
    public function checkout(Request $request)
    {

        if ($request->isMethod('GET')) {
            $cart = Cart::where('user_id', auth()->user()->id)->get();
            $data = [
                'title' => 'Check Out | Urban Adventure',
                'isUser' => auth()->user(),
                'weight' => 0,
                'categories' => Category::first()->get(),
                'cart' => Product::whereIn('product_code', $cart->map(function ($item) {
                    return $item->product_id;
                }))->get()->each(function ($item, $index) use ($cart) {
                    $item->amount = $cart->where('product_id', $item->product_code)->where('user_id', auth()->user()->id)->first()->amount;
                })
            ];

            foreach ($data['cart'] as $item) {
                $data['weight'] += ($item->weight * 1000);
            }
            return view('frontpage.cart.checkout', $data);
        }

        if ($request->isMethod('POST')) {
            $data = [
                'title' => 'Check Out | Urban Adventure',
                'isUser' => auth()->user(),
                'weight' => 0,
                'categories' => Category::first()->get(),
                'cart' => Product::whereIn('product_code', request()->product_code)->get()->each(function ($item, $index) {
                    $item->amount = request()->cart[$index]["quantity"];
                })
            ];

            foreach ($data['cart'] as $item) {
                $data['weight'] += ($item->weight * 1000);
            }
            return view('frontpage.cart.checkout', $data);
        }
    }

    public function execute_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'weight' => 'required|numeric|min:1',
            'user.name' => 'required|string',
            'user.id' => 'required|numeric',
            'user.fullname' => 'required|string',
            'user.email' => 'required|email:dns',
            'user.telephone' => 'required|numeric',
            'user.address' => 'required|string',
            'destination.province_id' => 'required|numeric',
            'destination.city_id' => 'required|numeric',
            'cart.*.name' => 'required|string',
            'cart.*.product_code' => 'required|string',
            'cart.*.quantity' => 'required|numeric|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', "Order Can't Execute, Try Again!");
        }

        return $validator->validated();
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
