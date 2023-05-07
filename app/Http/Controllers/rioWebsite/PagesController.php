<?php

namespace App\Http\Controllers\rioWebsite;

use App\Http\Controllers\Controller;
use App\Models\rioAdmin\Category;
use App\Models\rioAdmin\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('rio-website.pages.index');
    }

    function ourFoods() {
        return view('rio-website.pages.our-foods', ['categories' => Category::all(), 'products' => Product::all()]);
    }

    function checkout() {
        return view('rio-website.pages.checkout');
    }

}
