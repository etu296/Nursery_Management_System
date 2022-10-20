<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        
        return view('website.pages.login');
    }
    public function dologin(Request $request)
    {
        // dd($request->all());
        $userpost=$request->except('_token');
        // dd($userpost);
        if(Auth::attempt($userpost))
        {
            return redirect()->route('home');
        }
        else
        return redirect()->route('login')->with('error','Incorrect user or password.Please try again!');
     

    }
    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('home');
    }
    public function register()
    {
       
        return view('website.pages.register');
    }
    public function registerstore(Request $request)

    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'number'=>'required|numeric|digits:11',
            // 'address'=>'required',
            
          ]);
         User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'number'=>$request->number,
            // 'address'=>$request->address,

         ]);
         return redirect()->back()->with('msg','Account Created Successfully.....Please Login'); 

    }
    
}
