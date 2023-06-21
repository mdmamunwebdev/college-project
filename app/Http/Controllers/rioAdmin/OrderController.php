<?php

namespace App\Http\Controllers\rioAdmin;

use App\Http\Controllers\Controller;
use App\Models\rioAdmin\Category;
use App\Models\rioAdmin\Order;
use App\Models\rioAdmin\Product;
use App\Models\rioAdmin\ProductCategory;
use App\Models\rioWebsite\OrderedProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public  $name = [], $id = [];
    public function index() {
        return view('rio-admin.order.index', ['order' => Order::orderBy('id', 'desc')->get()]);
    }

    public function orderCreateForm() {
        //
    }

    public function orderUpdateForm($id) {
        return view('rio-admin.order.update', ['order' => Order::find($id), 'category' => Category::all(), 'product' => 0]);
    }

    public function productSearch($id) {

        $productCategories = ProductCategory::where('category_id', $id)->get();

        foreach ( $productCategories as $productCategory) {
            array_push($this->name, $productCategory->product->name);
            array_push($this->id, $productCategory->product->id);
        }


        // Prepare the response
        $response = [
            'product_name' => $this->name,
            'product_id'   => $this->id
        ];

        return response()->json($response);
    }

    public function productAdd(Request $request) {

        $response =  OrderedProduct::customOrderedProduct($request);

        return response()->json($response);
    }
}
