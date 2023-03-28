<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() 
    {
        $data = Product::latest()->paginate(5);
        return view('products.index', 
        ['products' => $data
    ]);
    }

    public function detail($id)
    {
        $data = Product::find($id);
        return view('products.detail', [
        'product' => $data
        ]);
    }

    public function fillUp($id) 
    {
        $data = Product::find($id);
        return view('products.fill', [
            'product' => $data
        ]
    );
    }
}