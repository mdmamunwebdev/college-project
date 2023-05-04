<?php

namespace App\Http\Controllers\rioAdmin;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index() {
        //
    }

    public function orderCreateForm() {
        return view('rio-admin.order.index');
    }
}
