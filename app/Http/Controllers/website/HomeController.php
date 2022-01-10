<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products=Product::all();
        return view('website.pages.home',compact('products'));
    }
    public function plants()
    {
        $plants=Plant::all();
        return view('website.pages.plant.plant',compact('plants'));
    }
  
    public function about()
    {
        // $plants=Plant::all();
        return view('website.pages.about');
    }

    public function plantdetails()
    {
        $plants=Plant::all();
        return view('website.pages.plant.plants-detail',compact('plants')); 
    }

    public function product_view($id)
    {
    
        $product=Product::find($id);
         return view('website.pages.productview',compact('product'));
    }

    public function plantcare()
    {
        return view('website.pages.plant.plant-care');
    }
    public function product()
    {
        $products=Product::all();
        return view('website.pages.products-list',compact('products'));
    }
    public function website_Search()
    {
        $key= request()->search;
        $products=Product::where('product_name','LIKE',"%{$key}%")->get();
        return view('website.pages.website-search',compact('products'));
    }
    public function plantview($id)
    {
        $plants=Plant::find($id);
        return view('website.pages.plant.plantview',compact('plants'));
    }
}
