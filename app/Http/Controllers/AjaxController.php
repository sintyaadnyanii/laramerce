<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getProductData($product_code)
    {
        return response()->json(Product::with(['images'])->where('product_code', $product_code)->first());
    }

    public function addToCart(Request $request)
    {
        $user_exists = User::where('id', $request->user_id)->exists();
        $product_exists = Product::where('id', $request->product_id)->exists();
        if ($user_exists && $product_exists) {
            Cart::where('user_id', $request->user_id)->where('product_id', $request->product_id)->delete();
            $cart_added = Cart::create([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'amount' => $request->amount
            ]);
            $view = view('partials.cart-item', ['item' => $cart_added])->render();

            if ($cart_added) {
                return response()->json(['product' => $cart_added->product, 'cart' => $cart_added, 'code' => 200, 'view' => $view]);
            }
            return response()->json(['product' => "no product found", 'cart' => "no cart added", 'code' => 201]);
        }
        return response()->json(['product' => "no product found", 'cart' => "no cart added", 'code' => 500]);
    }

    public function removeProductCart(Request $request)
    {
        $user_exists = User::where('id', $request->user_id)->exists();
        $product_exists = Product::where('id', $request->product_id)->exists();
        if ($user_exists && $product_exists) {
            $cart_deleted = Cart::where('user_id', $request->user_id)->where('product_id', $request->product_id)->delete();

            if ($cart_deleted) {
                return response()->json(['code' => 200]);
            }
            return response()->json(['product' => "no product found", 'cart' => "no cart deleted", 'code' => 201]);
        }
        return response()->json(['product' => "no product found", 'cart' => "no cart deleted", 'code' => 500]);
    }
}
