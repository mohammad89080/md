<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
class HomeController extends Controller
{
  
    //
    public function index()
    {
         $items = Slide::orderBy('order', 'asc')->get();
        $products = Product::take(6)->get();

$gridClasses = [
    ['wrapper' => 'lg:col-span-3 lg:row-span-3', 'image_height' => 'lg:h-64'],
    ['wrapper' => 'lg:col-span-3 lg:row-span-3 lg:col-start-1 lg:row-start-4', 'image_height' => 'lg:h-64'],
    ['wrapper' => 'lg:col-span-3 lg:row-span-6 lg:col-start-4 lg:row-start-1', 'image_height' => 'lg:h-[540px]'],
    ['wrapper' => 'lg:col-span-6 lg:row-span-3 lg:col-start-7 lg:row-start-1', 'image_height' => 'lg:h-64'],
    ['wrapper' => 'lg:col-span-3 lg:row-span-3 lg:col-start-7 lg:row-start-4', 'image_height' => 'lg:h-64'],
    ['wrapper' => 'lg:col-span-3 lg:row-span-3 lg:col-start-10 lg:row-start-4', 'image_height' => 'lg:h-64'],
];
        return view('Home.index', compact('items','products','gridClasses'));
    }
}
