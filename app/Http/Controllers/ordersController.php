<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class ordersController extends Controller
{

    public function index()
    {
        $orders=Cart::all();
        return view('admin.orders.ordersIndex',compact('orders'));
    }
    public function ordersToCommission()
    {
        $ordersToCommission=Cart::where('orderShipped','!=','Commissioned')->get();
        return view('admin.orders.toCommission',compact('ordersToCommission'));
    }
}
