<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // $products = Product::all();
        // $categories = Category::all();

        // return view('products.index',[
        //     'products' => $products,
        //     'categories' => $categories,
        // ]);
    }
}
