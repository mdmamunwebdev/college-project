<?php

namespace App\Http\Controllers\rioAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rioAdmin\Product;
class ProductController extends Controller
{
    function index() {
        return view('rio-admin.product.index');
    }

    function productCreateForm() {
        return view('rio-admin.product.create');
    }

    function create() {
        //
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
