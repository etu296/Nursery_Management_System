<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Pcetagory;
use App\Models\Category;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\ShippingDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function checkouttlist()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $carts=session()->get('cart');
        return view('website.pages.cart.checkout-list',compact('carts','productCetagory','categories'));   
    }
    public function shipping_address(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'city'=>'required',
            'area'=>'required',
            'address'=>'required',
            'mobile'=>'required|numeric|digits:11',
        ]);
        ShippingDetail::create
        ([
            'name'=>$request->name,
            'city'=>$request->city,
            'area'=>$request->area,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
        ]);
        return redirect()->back()->with('msg','Shiping Address Saved Successfully.....!');

    }
    public function AddCart($id)
    {
        
        $product=Product::find($id);
        if(!$product)
        {
            return redirect()->back()->with('error','Product not found....!');
        }
        $cartExist=session()->get('cart');
       
        if(!$cartExist)
        {
           
            $cartdata=[
                $id=>[
                    'product_id' => $id,
                    'product_name' => $product->product_name,
                    'product_price' => $product->product_price,
                    'product_qty' => 1,
                    'product_img' => $product->product_image
                ]
            ];
         
            
            session()->put('cart',$cartdata);
            return redirect()->back()->with('msg', 'Product Added to Cart.');
        }
        
        
     
        if(!isset($cartExist[$id]))
        {
            $cartExist[$id] = [
                'product_id' => $id,
                'product_name' => $product->product_name,
                'product_price' => $product->product_price,
                'product_qty' => 1,
                'product_img' => $product->product_image
            ];

            session()->put('cart', $cartExist);

            return redirect()->back()->with('msg', 'Product Added to Cart.');
            
        }
      
            $cartExist[$id]['product_qty']++;
            session()->put('cart', $cartExist);

            return redirect()->back()->with('msg', 'Product Added to Cart.');
        
        
       
    }
    public function GetCart()
    {
        $productCetagory=Pcetagory::all();
        $categories = Category::all();
        $carts=session()->get('cart');
        return view('website.pages.cart.cart-list',compact('carts','productCetagory','categories'));
    }
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('msg','Cart cleared successfully.');
    }
    public function PlaceOrder(Request $request)
    {
       
    
        $carts=session()->get('cart');
        if($carts)
        {
            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'total_price'=>array_sum(array_column($carts,'product_price')),
            ]);
        
      
        foreach ($carts as $cart)
            {
                Orderdetail::create([
                    'order_id'=> $order->id,
                    'product_id'=>$cart['product_id'],
                    'unit_price'=>$cart['product_price'],
                    'quantity'=>$cart['product_qty'],
                    'sub_total'=>$cart['product_qty'] * $cart['product_price'] ,
                ]);
               
            }
            session()->forget('cart');
            return redirect()->back()->with('msg','Order Placed Successfully.');
        }
        return redirect()->back()->with('error','No Data found in cart.');
    }

    

}
