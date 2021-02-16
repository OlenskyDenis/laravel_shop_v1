<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class Card extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $products = Product::all();

        return view('components.card',[
            'products' => $products
        ]);
    }
}
