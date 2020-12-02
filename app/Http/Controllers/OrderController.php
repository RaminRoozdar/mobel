<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function orders()
    {
        $orders = Order::with('product')->where('user_id',Auth::user()->id)->paginate(15);
        return view('frontend.order.index',compact('orders'));
    }
}
