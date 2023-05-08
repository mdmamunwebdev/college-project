<?php

namespace App\Models\rioWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    private static $cart;

    public static function addToCart($req) {
        self::$cart = new Cart();
        self::$cart->product_id = $req->product_id;
        self::$cart->category_id = $req->category_id;
        self::$cart->product_qty = $req->product_qty;
        self::$cart->user_ip = $req->ip();
        self::$cart->save();
    }
}
