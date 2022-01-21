<?php

namespace App\Http\Controllers;

Use App\Models\Category;
use App\Models\Pcetagory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function productlist()
  {
     $products=Product::with('category','pcategory')->get();
      // dd($products);
      return view('admin.pages.product.productlist',compact('products'));
  }
  public function productstore(Request $request)
  {
      //  dd($request->all());
      if($request->hasFile('product_image'))

        {
            $file = $request->file('product_image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            $file -> storeAs ('/uploads', $filename);
        }
      // dd(date('Ymdhms'));
      Product::create([
        'product_name'=>$request->product_name,
        'product_price'=>$request->product_price,
        'products_details'=>$request->products_details,
        'product_cetagory'=>$request->product_cetagory,
        'plant_cetagory'=>$request->plant_cetagory,
        'product_image'=> $filename
       ]);
       return redirect()->route('productlist');
  }
  public function pceragorystore(Request $request)
  {
    
      Pcetagory::create([
        'pcname'=>$request->pcname,
        'pc_description'=>$request->pc_description,
       ]);
       return redirect()->route('productcategories');
  }

  public function categorylist()
  {
    $pcetagories=Pcetagory::all();
      return view('admin.pages.product.productcategories',compact('pcetagories'));
  }
  public function createproduct()
  {
    $pcetagories=Pcetagory::all();
    $categories=Category::all();
    // dd($categories);
    return view('admin.pages.product.productcreate',compact('pcetagories'),compact('categories')); 
  }
  public function productcategory()
  {
    return view('admin.pages.product.createProductcetagory'); 
  }
  public function product_view($id)
  {
    $products=Product::find($id);
    return view('admin.pages.product.product-view',compact('products'));
  }
  public function product_delete($id)
  {
   Product::find($id)->delete();
    return redirect()->back();
  }

  public function product_edit($id)
  {
    // dd($id);
    
     $product=Product::find($id);
     $pcetagories=Pcetagory::all();
     $categories=Category::all();
    //  dd($pcetagories);
    if($product)
    {
     return view('admin.pages.product.product-edit',compact('product','pcetagories','categories'));
    }
  }
  public function product_update(Request $request,$id)
  {
    $product=Product::find($id);
    $productimage=$product;
    if ($request->hasFile('product_image'))
           {
            // step 2: generate file name
            $productimage = date('Ymdhms').'.'.$request->file('product_image')->getClientOriginalExtension();
            //step 3 : store into project directory
            $request->file('product_image')->storeAs('/uploads',$productimage);           
           }
    if($product)
    {
      //dd($product);
      $product->update([
        'product_name'=>$request->product_name,
        'product_price'=>$request->product_price,
        'products_details'=>$request->products_details,
        'product_cetagory_id'=>$request->product_cetagory,
        'plant_cetagory_id'=>$request->plant_cetagory,
        'product_image'=>$productimage
      ]);
      return redirect()->back()->with('msg', 'Product Updated Successfully.');
    }
  }

  public function productSearch()
  {
    $key= request()->search;
    $products=Product::where('product_name','LIKE',"%{$key}%")->get();
    return view('admin.pages.product.product-search',compact('products'));
  }
  
}
