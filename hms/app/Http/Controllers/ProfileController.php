<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
  public function show($id)
 {
     $user=Auth::user();
     return view('Dashboard.profiles.show',compact('user'));
 }
 public function edit()
 {
    $user=Auth::user();
     return view('Dashboard.profiles.edit',compact('user'));
 }

 public function update(Request $request)
 {
     $request->validate([
     'name'=>'required',
     'email'=>'required|unique:users,email,'.Auth::id(),
     'password'=>'required',
 ]);
     $user = Auth::user();
     $user->name = $request->name;

     $user->email = $request->email;
    $user->password = bcrypt($request->password);

     /*if($request->password){
         $password=$request->old;
         if (Hash::check($request->old, $user->password)) {
             $user->password = bcrypt($request->password);
         }
         else
             return redirect()->back()->with("error","your current password does not match with the password you provided. please try again.");
     }*/
     $user->save();
     return redirect('home');
 }
}
