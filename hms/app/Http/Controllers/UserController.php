<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
class UserController extends Controller
{

  function abc()
  {

     $users = User::all();
     // echo $users;
   return view('user.user',compact('users'));
  }





}
