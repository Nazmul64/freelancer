<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
   public function profile(){
     return view('profile');
   }
    public function profilesetting(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'profile_photo' => 'required',
        ]);

        if ($request->hasFile('profile_photo')) {
            if (Auth::user()->profile_photo != 'avator.jpeg') {
                unlink('uploads/profile_photos/' . Auth::user()->profile_photo);
            }

            $file = $request->file('profile_photo');
            $profile_photo = time() . '.' . $file->getClientOriginalExtension();
            $path = "uploads/profile_photos";
            $file->move($path, $profile_photo);

            User::find(Auth::id())->update([
                'profile_photo' => $profile_photo,
            ]);
        }

        User::find(Auth::id())->update([
            'name' => $request->name,
        ]);

        return back()->with('photoname','Name And Photo Updated Successfully');
    }
    public function chagepassword(Request $request){
       $request->validate([
        'old_password' => 'required',
        'password' => 'required',
        'confirm_password' => 'required',
       ]);
    if(Hash::check($request->old_password,Auth::user()->password)){
         if($request->password==$request->confirm_password){
            User::find(Auth::id())->update([
               'password'=>Hash::make($request->password),
            ]);
           return back()->with('password', 'Password Changes Successfully');
         }else{
           return back()->withErrors ('New Password and confirm password does not match');
         }
    }else{
            return back()->withErrors("Old password password does not match in our records");
    }
    }

}
