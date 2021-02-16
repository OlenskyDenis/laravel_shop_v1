<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::all();
        $categories = Category::all();

        return view('shop.index',[
            'products' => $products,
            'categories' => $categories,
        ]);
    }
    public function orderByPrice(Request $request){
        $orderBy = $request->orderBy;

        if($orderBy == 'Price hight-low')
            $sort = 'desc';
        elseif($orderBy == 'Price low-hight')
            $sort = 'asc';

        $products = Product::orderBy('price',$sort)->get();
        return view('components.card',[
            'products' => $products
        ])->render();
    }
}
