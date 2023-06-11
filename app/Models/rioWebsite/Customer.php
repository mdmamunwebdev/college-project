<?php

namespace App\Models\rioWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private static $customer;

    public static function newCustomer($req) {
        self::$customer = new Customer();
        self::$customer->firstname = $req->cus_firstName;
        self::$customer->lastname = $req->cus_lastname;
        self::$customer->username = $req->cus_userName;
        self::$customer->country = $req->cus_country;
        self::$customer->state = $req->cus_state;
        self::$customer->zip = $req->cus_zip;
        self::$customer->email = $req->email;
        self::$customer->phone = $req->phone;
        self::$customer->address = $req->address;
        self::$customer->address2 = $req->address2;
        self::$customer->password = bcrypt($req->phone);
        self::$customer->save();
        return self::$customer;
    }
}
