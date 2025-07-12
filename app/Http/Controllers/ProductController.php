<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
        public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
         $products = Product::take(4)->get();

    $gridClasses = [
        ['wrapper' => 'col-span-3 row-span-3'],
        ['wrapper' => 'col-span-3 row-span-3 col-start-4'],
        ['wrapper' => 'col-span-3 row-span-3 col-start-7 row-start-1'],
        ['wrapper' => 'col-span-3 row-span-3 col-start-10'],
      
    ];
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', compact('product','gridClasses','products'));
    }
}
