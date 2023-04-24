<?php

namespace App\Http\Controllers\rioAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        return view('rio-admin.category.index');
    }

    function create() {
        //
    }

    function categoryUpdate() {
        return view('rio-admin.category.update');
    }

    function update() {
        //
    }

    function detail() {
        return view('rio-admin.category.detail');
    }

    function status() {
        //
    }

    function delete() {
        //
    }
}
