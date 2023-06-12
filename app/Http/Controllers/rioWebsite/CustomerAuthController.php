<?php

namespace App\Http\Controllers\rioWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\rioWebsite\Customer;

class CustomerAuthController extends Controller
{
    public $customer;

    public function index() {
        return view('rio-customer.dashboard.index');
    }

    public function login() {
        return view('rio-customer.auth.index');
    }

    public function loginValid(Request $request) {

        $this->customer = Customer::where('email', $request->email)->first();

        if ($this->customer) {
            if ( password_verify($request->password, $this->customer->password) ) {

                Session::put('customer_id', $this->customer->id);
                Session::put('customer_email', $this->customer->email);

                return redirect('customer/dashboard')->with('welcome_msg', 'Welcome to '.$this->customer->username.' !');
            }
            else {
                return redirect()->back()->with('login_msg', 'Your Password does not matched. Please Input your correct password or recover your forgotten password.');
            }
        }
        else {
            return redirect()->back()->with('login_msg', 'Your Email address is invalid. Please Input your valid email or register your new account with a new email.');
        }

    }

    public function register() {
        return view('rio-customer.auth.register');
    }

    public function registration(Request $request) {

        $customer = Customer::newCustomer($request);

        Session::put('customer_id', $customer->id);
        Session::put('customer_email', $customer->email);

        return redirect('customer/dashboard');
    }

    public function logout() {

        Session::forget('customer_id');
        Session::forget('customer_email');

        return redirect('/our-foods');
    }
}
