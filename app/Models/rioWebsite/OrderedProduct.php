<?php

namespace App\Models\rioWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\rioWebsite\Cart;

class OrderedProduct extends Model
{
    use HasFactory;

    private static $product, $cart;

    public static function orderedProduct($order, $req) {

        self::$cart = Cart::where('user_ip', $req->ip())->get();

        foreach (self::$cart as $item) {

            self::$product = new OrderedProduct();
            self::$product->order_id = $order->id;
            self::$product->product_id = $item->product_id;
            self::$product->category_id = $item->category_id;
            self::$product->product_qty = $item->product_qty;
            self::$product->user_ip = $item->user_ip;
            self::$product->sale_price = 20;
            self::$product->total_price = 20;
            //self::$product->cus_email = $order->email;
            self::$product->save();

            Cart::where('id', $item->id)->delete();
        }
    }
}
