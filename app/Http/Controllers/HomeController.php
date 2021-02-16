<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('home.index',[
            'categories' => $categories,
        ]);
    }
    public function orderByMark(Request $request){
        $orderByMark = $request->orderBy;
        $products = Product::where('mark', $orderByMark)->orderBy('mark')->get();

        if($products->count() <= 0){
            $products = Product::all();
        }

        return view('components.card',[
            'products' => $products
        ])->render();
    }
}
