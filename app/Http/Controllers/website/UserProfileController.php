<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function UserProfile()
    {
        $users=User::all();
        return view('website.pages.user-profile',compact('users'));
    }
    public function profile_edit($id)
    {
      $users=User::find($id);
      if($users)
      {    
            return view('website.pages.profile-edit',compact('users'));  
      } 
       
    }
    public function profile_update(Request $request , $id)
    {
      $users=User::find($id);
      if($users)
      {
      $users->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'number'=>$request->number,
        'address'=>$request->address

       ]);
      return redirect()->back()->with('msg', 'Profile Updated Successfully.');
    }
    }
    
}

