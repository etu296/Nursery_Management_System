<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ShippingDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function checkouttlist()
    {
        return view('website.pages.cart.checkout-list');
    }
    public function shipping_address(Request $request)
    {
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
        $carts=session()->get('cart');
        return view('website.pages.cart.cart-list',compact('carts'));
    }
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('msg','Cart cleared successfully.');
    }

}
