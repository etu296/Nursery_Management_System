<?php

namespace App\Http\Controllers;

use App\Models\Homecontact;
use Illuminate\Http\Request;

class CotactController extends Controller
{
   public function contactlist()
   {
       $homecontacts=Homecontact::all();
       return view('admin.pages.contact-list',compact('homecontacts'));
   }
}
