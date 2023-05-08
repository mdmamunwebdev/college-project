<?php

namespace App\Http\Controllers\rioWebsite;

use App\Http\Controllers\Controller;
use App\Models\rioWebsite\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $cart;
    function index() {
        //
    }

    function addCart(Request $request) {

        Cart::addToCart($request);
        return response()->json( 'success');
    }
}
