<?php

namespace App\Models\rioAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category, $imgName, $imgExtension, $imgDir, $img, $imgFileDir;

    public static function catImgUrl($req) {
        self::$img = $req->file('image');
        self::$imgExtension = self::$img->getClientOriginalExtension();
        self::$imgDir = 'rio-admin/assets/img/product/category/';
        self::$imgName =  str_replace(' ', '-', $req->title).'-'.uniqid().'-'.time().'.'.self::$imgExtension;
        self::$img->move(self::$imgDir, self::$imgName);
        return self::$imgFileDir = self::$imgDir.self::$imgName;
    }

    public static function categoryNew($req) {
        self::$category = new Category();
        self::$category->title = $req->title;
        self::$category->description = $req->description;
        self::$category->image = self::catImgUrl($req);
        self::$category->save();
        return self::$category;
    }

}
