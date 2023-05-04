<?php

namespace App\Http\Controllers\rioAdmin;

use App\Http\Controllers\Controller;
use App\Models\rioAdmin\Category;
use App\Models\rioAdmin\Tag;
use App\Models\rioAdmin\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    function index() {
        return view('rio-admin.product.index');
    }

    function productCreateForm() {
        return view('rio-admin.product.create', ['categories' => Category::all(), 'tags' => Tag::all()]);
    }

    function create(Request $request) {

//        return $request;

       $this->product = Product::productAdd($request);

        return redirect('/product/list')->with('productAddMsg', 'A new product is added with successfully !!');
    }

    function productUpdateForm() {
        return view('rio-admin.product.update');
    }

    function update() {
        //
    }

    function detail() {
        return view('rio-admin.product.detail');
    }

    function status() {
        //
    }

    function delete() {
        //
    }
}
