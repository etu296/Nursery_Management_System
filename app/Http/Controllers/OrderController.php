<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderList()
    {
        $orders=Order::with('orderdetails','user')->get();
        return view('admin.pages.order.order-list',compact('orders'));
    }
    public function OrderDetails($id)
    {
        
        $orders=Orderdetail::with('order','product')->where('order_id',$id)->get();
        return view('admin.pages.order.order-details',compact('orders'));
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
