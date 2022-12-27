<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $data = [
            'title' => 'Categories | Urban Adventure'
        ];
        return view('dashboard.admin.categories.all-category', $data);
    }
}
