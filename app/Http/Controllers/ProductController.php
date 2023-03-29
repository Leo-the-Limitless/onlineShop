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

    public function create()
    {
        return view('products.add');
    }

    public function add()
    {
        $validator = validator(request()->all(), [
            'product_name' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $product = new Product;
        $product->product_name = request()->product_name;
        $product->save();
        return redirect('/products')->with('info', 'Successfully added a product');
    }
}