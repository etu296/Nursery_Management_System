<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderList()
    {
        $orders=Order::with('user')->get();
        return view('admin.pages.order.order-list',compact('orders'));
    }
    public function OrderDetails($id)
    {
        $order=Orderdetail::find($id);
        return view('admin.pages.order.order-details',compact('order'));
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
