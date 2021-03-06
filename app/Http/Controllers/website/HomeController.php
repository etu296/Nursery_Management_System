<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pcetagory;
use App\Models\Plant;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $products=Product::all();
        return view('website.pages.home',compact('products','productCetagory','categories'));
    }
    public function plants()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $plants=Plant::all();
        return view('website.pages.plant.plant',compact('plants','productCetagory','categories'));
    }
  
    public function about()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        // $plants=Plant::all();
        return view('website.pages.about',compact('productCetagory','categories'));
    }

    public function plantdetails()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $plants=Plant::all();
        return view('website.pages.plant.plants-detail',compact('plants','productCetagory','categories')); 
    }

    public function product_view($id)
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $product=Product::find($id);
         return view('website.pages.product.productview',compact('product','productCetagory','categories'));
    }

    public function plantcare()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        return view('website.pages.plant.plant-care',compact('productCetagory','categories'));
    }
    public function product()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $products=Product::all();
        return view('website.pages.product.products-list',compact('products','productCetagory','categories'));
    }
    public function website_Search()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $key= request()->search;
        $products=Product::where('product_name','LIKE',"%{$key}%")->get();
        return view('website.pages.website-search',compact('products','productCetagory','categories'));
    }
    public function plantview($id)
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $plants=Plant::find($id);
        return view('website.pages.plant.plantview',compact('plants','productCetagory','categories'));
    }
    public function ProductCetagory($id)
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $productCetagory=Product::where('product_cetagory',$id)->get();
        return view('website.pages.product.Cetagory-list',compact('productCetagory','categories'));
   
    }
    public function PlantCetagory($id)
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $categories = Plant::where('category_id',$id)->get();
        return view('website.pages.plant.plant-Cetagory-list',compact('productCetagory','categories'));
   
    }
}
