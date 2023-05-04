<?php

namespace App\Http\Controllers\rioAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rioAdmin\Category;

class CategoryController extends Controller
{
    function index() {
        return view('rio-admin.category.index', ['categories' => Category::all()]);
    }

    function create(Request $request) {
        Category::categoryNew($request);
        return redirect('/category')->with('addCatMsg', 'Category is added with successfully !!');
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
