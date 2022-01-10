<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminloginController extends Controller
{
public function adminLogin()
{
    return view('admin.admin_login');
}
public function doadminlogin(Request $request)
{
$userinfo=[
    'email'=>$request->email,
    'password'=>$request->password,
];
// dd((Auth::attempt($userinfo)));
if(Auth::attempt($userinfo))
        {
            return redirect()->route('admin');
        }
        else
        return redirect()->route('admin.login')->withErrors('Invalid user Please Login with valid id.');
     
}
public function adminLogout()
{
    Auth::logout();
    return redirect()->route('admin.login');
}
}
