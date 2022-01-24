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
        'role'=>$request->role,
        'email'=>$request->email,
        'number'=>$request->number,
       ]);
      return redirect()->back()->with('msg', 'Profile Updated Successfully.');
    }
    }
    public function UserAddress($id)
    {
      $users=User::find($id);

        if($users)
        {    
          return view('website.pages.add-address',compact('users'));  
         } 
    }
    public function UserAddressStore(Request $request , $id)
    {
      $users=User::find($id);
      if($users)
        { 
          User::create([
          'address'=>$request->address,
          ]);
          return redirect()->back()->with('msg','Address added sucessfully...!!');

         }

    }
}

