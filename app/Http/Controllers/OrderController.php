<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderList()
    {
     $orders=Order::all();
        //dd($orders);   
        return view('admin.pages.order.order-list',compact('orders'));
    }
    public function createorder()
    {
        return view('admin.pages.order.createorder-list');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Order::create([
            'date'=>$request->date,
            'price'=>$request->price,
            'status'=>$request->status,
            'datetime'=>$request->datetime,
        ]);
      return redirect()->route('admin.orders');
    }
}
