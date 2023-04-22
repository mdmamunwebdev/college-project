<?php

namespace App\Http\Controllers\rioWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('rio-website.pages.index');
    }

    function ourFoods() {
        return view('rio-website.pages.our-foods');
    }
}
