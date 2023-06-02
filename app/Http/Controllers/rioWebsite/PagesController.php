<?php

namespace App\Http\Controllers\rioWebsite;

use App\Http\Controllers\Controller;
use App\Models\rioAdmin\Category;
use App\Models\rioAdmin\Product;
use App\Models\rioWebsite\Cart;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('rio-website.pages.index', ['categories' => Category::all(), 'products' => Product::all(), 'items' => Cart::all(), 'total' => 0]);
    }

    function ourFoods() {
        return view('rio-website.pages.our-foods', ['categories' => Category::all(), 'products' => Product::all(), 'items' => Cart::all(), 'total' => 0]);
    }

    function checkout() {
        return view('rio-website.pages.checkout', ['categories' => Category::all(), 'products' => Product::all(), 'items' => Cart::all(), 'total' => 0]);
    }

}
