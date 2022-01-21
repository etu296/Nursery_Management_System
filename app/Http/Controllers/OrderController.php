<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderList()
    {
        $orders=Order::with('user')->get();
        return view('admin.pages.order.order-list',compact('orders'));
    }
    
    public function createorder()
    {
        return view('admin.pages.order.createorder-list');
    }

    
    public function CancelOrder($id)
    {
        $order=Order::find($id);
        $order->update([
            'status'=>'cancel'
        ]);
 
        return redirect()->back();
    }
}
