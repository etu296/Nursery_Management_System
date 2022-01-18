<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pcetagory;
use App\Models\Homecontact;
use Illuminate\Http\Request;

class HomepageContactController extends Controller
{
   public function homecontactlist()
   {
      $productCetagory=Pcetagory::all();
        $categories = Category::all();
       return view('website.pages.home-contactlist',compact('productCetagory','categories'));
   }
   public function contactstore(Request $request)
   {
    
     Homecontact::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
     ]);
     return redirect()->back()->with('msg','Thanks for your Feedback.');
   }
}
