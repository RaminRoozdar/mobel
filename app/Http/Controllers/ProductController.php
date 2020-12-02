<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        return view('frontend.product.show',compact('product'));
    }

    public function buy($id)
    {
        $product = Product::find($id);
        return view('frontend.product.buy',compact('product'));
    }

    public function payment($id)
    {
        $user_id= Auth::user()->id;
        $product_id = $id;
        $order = new Order();
        $order->user_id = $user_id;
        $order->product_id = $product_id;
        $order->save();
        return redirect()->back()->with('success','محصول  با موفقیت خریداری گردید.');

    }
}
