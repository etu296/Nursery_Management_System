<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Plant;
use App\Models\User;
use App\Models\Order;
use App\Models\Delivery;
use App\Models\Homecontact;
use App\Models\Payment;
use App\Models\ShippingDetail;




use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function deshbord()
    {
        $count['product']=Product::all()->count();
        $count['plant']=Plant::all()->count();
        $count['order']=Order::all()->count();
        $count['payment']=Payment::all()->count();
        $count['user']=User::all()->count();
        $count['message']=Homecontact::all()->count();
        $count['delivery']=Delivery::all()->count();
        $count['shipping']=ShippingDetail::all()->count();

        return view('admin.pages.deshbord',compact('count'));
    }
}
