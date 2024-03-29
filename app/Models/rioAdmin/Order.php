<?php

namespace App\Models\rioAdmin;

use App\Models\rioWebsite\OrderedProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    private static $order;

    public static function newOrder($req) {

        self::$order = new Order();

        self::$order->cus_firstName = $req->cus_firstName;
        self::$order->cus_lastName  = $req->cus_lastName;
        self::$order->cus_country   = $req->cus_country;
        self::$order->cus_zip       = $req->cus_zip;
        self::$order->cus_state     = $req->cus_state;
        self::$order->cus_userName  = $req->cus_username;
        self::$order->name          = $req->cus_firstName;
        self::$order->email         = $req->cus_email;
        self::$order->phone         = $req->cus_phone;
        self::$order->address       = $req->cus_address;
        self::$order->address2      = $req->cus_address2;

        if ( $req->same_address === 'sameAddr' ) {
            self::$order->ship_firstName = $req->cus_firstName;
            self::$order->ship_lastName  = $req->cus_lastName;
            self::$order->ship_country   = $req->cus_country;
            self::$order->ship_zip       = $req->cus_zip;
            self::$order->ship_state     = $req->cus_state;
            self::$order->ship_email     = $req->cus_email;
            self::$order->ship_phone     = $req->cus_phone;
            self::$order->ship_address   = $req->cus_address;
            self::$order->ship_address2  = $req->cus_address2;
        }
        else {
            self::$order->ship_firstName = $req->ship_firstName;
            self::$order->ship_lastName  = $req->ship_lastName;
            self::$order->ship_country   = $req->ship_country;
            self::$order->ship_zip       = $req->ship_zip;
            self::$order->ship_state     = $req->ship_state;
            self::$order->ship_email     = $req->ship_email;
            self::$order->ship_phone     = $req->ship_phone;
            self::$order->ship_address   = $req->ship_address;
            self::$order->ship_address2  = $req->ship_address2;
        }

        self::$order->order_create_date  = date('Y-m-d');
//        self::$order->tran_date  = '';
        self::$order->subtotal        = $req->subtotal;
        self::$order->coupon          = $req->coupon;
        self::$order->coupon_discount = $req->coupon_discount;
        self::$order->shipping_fees   = $req->shipping_fees;
        self::$order->amount          = $req->amount;
        self::$order->status          = 'Pending';
        self::$order->pay_method      = $req->paymentMethod;
        self::$order->ship_method     = $req->ship_method;
        self::$order->transaction_id  = uniqid();
        self::$order->currency        = 'BDT';

//      self::$order->same_address  = $req->same_address;
//      self::$order->user_ip  = $req->ip();

        self::$order->save();

        return self::$order;

    }

    public function orderedProduct() {
        return $this->hasMany(OrderedProduct::class);
    }

}
