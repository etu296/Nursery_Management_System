<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use App\Models\ShippingDetail;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function deliverylist()
    {
        $deliveries=Delivery::all();
        //dd($deliveries);
        return view('admin.pages.delivery.delivery-list',compact('deliveries'));
    }

    public function createdeliverylist()
    {
        return view('admin.pages.delivery.create-delivery-list');  
    }
    public function store(Request $request)
    {
        //dd($request->all());
        Delivery::create([
            'Customer_name'=>$request->customer_name,
            'Total_price'=>$request->total_price,
            'Delivery_date'=>$request->delivery_date,
        ]);
        return redirect()->route('admin.delivery');

    }
    public function shipping_list()
    {
        $shippingdetails=ShippingDetail::all();
        return view('admin.pages.delivery.shipping-address',compact('shippingdetails'));
    }
}
