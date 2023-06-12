<?php

namespace App\Http\Controllers\rioWebsite;

use App\Http\Controllers\Controller;
use App\Models\rioAdmin\Category;
use App\Models\rioAdmin\Order;
use App\Models\rioAdmin\Product;
use App\Models\rioWebsite\Cart;
use App\Models\rioWebsite\Customer;
use Illuminate\Http\Request;
use Session;

class PagesController extends Controller
{
    private $order;
    function index(Request $request) {
        return view('rio-website.pages.index', ['categories' => Category::all(), 'products' => Product::all(), 'items' => Cart::where('user_ip', $request->ip())->get(), 'total' => 0]);
    }

    function ourFoods(Request $request) {
        return view('rio-website.pages.our-foods', ['categories' => Category::all(), 'products' => Product::all(), 'items' => Cart::where('user_ip', $request->ip())->get(), 'total' => 0]);
    }

    function checkout(Request $request) {
        return view('rio-website.pages.checkout', ['categories' => Category::all(), 'products' => Product::all(), 'items' => Cart::where('user_ip', $request->ip())->get(), 'total' => 0]);
    }

    function success(Request $request, $id) {

        $this->order = Order::find($id);

        if ($this->order) {
            $customer = Customer::where('email', $this->order->email)->first();

            if ( !$customer ) {

                $customer = Customer::newCustomer($this->order);

                Session::put('customer_id', $customer->id);
                Session::put('customer_email', $customer->email);

            }
            return view('rio-website.pages.success', ['categories' => Category::all(), 'products' => Product::all(), 'items' => Cart::where('user_ip', $request->ip())->get(), 'total' => 0, 'order_id' => $id]);
        }
        else {
            return redirect()->back();
        }

    }

}
