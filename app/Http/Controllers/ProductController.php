<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function allProduct()
    {
        $data = [
            'title' => 'Products | Urban Adventure',
            'products' => Product::latest()->get()
        ];
        return view('dashboard.admin.products.product-all', $data);
    }

    public function createProduct()
    {
        $data = [
            'title' => 'Add New Products | Urban Adventure',
            'categories' => Category::latest()->get()
        ];
        return view('dashboard.admin.products.product-add', $data);
    }

    public function detailProduct(Product $product)
    {
        $data = [
            'title' => 'Product Detail | Urban Adventure',
            'product' => $product
        ];
        return view('dashboard.admin.product.product-detail');
    }
    public function updateProduct(Product $product)
    {
        $data = [
            'title' => 'Add New Products | Urban Adventure',
            'product' => $product,
            'categories' => Category::latest()->get()
        ];
        return view('dashboard.admin.products.product-update', $data);
    }
    public function storeProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'code' => 'required|numeric',
            'category_id' => 'required|integer',
            'condition' => ['required', Rule::in('new', 'second')],
            'weight' => 'required|decimal:2',
            'price' => 'required|integer',
            'stock' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Input Failed!<br>Please Try Again With Correct Input');
        }
        $validated = $validator->validated();
        $created_product = Product::create([
            'name' => $validated['name'],
            'code' => $validated['code'],
            'category_id' => $validated['category_id'] == 0 ? NULL : $validated['category_id'],
            'condition' => $validated['condition'],
            'weight' => $validated['weight'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
        ]);
        if ($created_product) {
            return redirect()->route('manage_product.all')->with('success', 'New Category Successfully Added');
        }
        return redirect()->back()->with('error', 'Error Occured, Please Try Again');
    }
    public function patchProduct(Product $product, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'code' => 'required|numeric',
            'category_id' => 'required|integer',
            'condition' => ['required', Rule::in('new', 'second')],
            'weight' => 'required|decimal:2',
            'price' => 'required|integer',
            'stock' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Input Failed!<br>Please Try Again With Correct Input');
        }
        $validated = $validator->validated();
        $updated_product = $product->update([
            'name' => $validated['name'],
            'code' => $validated['code'],
            'category_id' => $validated['category_id'] == 0 ? NULL : $validated['category_id'],
            'condition' => $validated['condition'],
            'weight' => $validated['weight'],
            'price' => $validated['price'],
            'stock' => $validated['stock'],
        ]);
        if ($updated_product) {
            return redirect()->route('manage_product.all')->with('success', 'New Category Successfully Added');
        }
        return redirect()->back()->with('error', 'Error Occured, Please Try Again');
    }
    public function deleteProduct(Product $product)
    {
        if ($product->delete()) {
            return redirect()->route('manage_product.all')->with('success', 'This Product Successfully Deleted');
        }
        return redirect()->back()->with('error', 'Error Occured, Please Try Again!');
    }
}