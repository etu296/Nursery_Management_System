<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerlist()
    {
        $users=User::all();
        return view('admin.pages.customer.customer-list',compact('users'));
    }
    
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            