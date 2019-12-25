<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Role;
use Hash;
use Illuminate\Support\Facades\Validator;


class RegistrationController extends Controller
{

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
  }

    function index()
    {
        $roles = Role::all()->except([1,6]);
        return view('auth.register',compact('roles'));
    }

    function create(Request $request){
      if ($request->role_id) {
        $role = $request->role_id;
      }
      else {
        $role = 6;
      }
            User::insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'role_id' =>$role,
            'created_at' => Carbon::now(),

        ]);









        return back();
    //User::insert($request->except('_token'));
    }

//     function register_one()
//     {
//
//         return view('Frontend.register_one');
//     }
//
//
//         function register_one_create(Request $request){
//                 User::insert([
//                 'name' =>$request->name,
//                 'email' =>$request->email,
//                 'password' =>bcrypt($request->password),
//                 'role_id' =>1,
//                 'created_at' => Carbon::now(),
//
//             ]);
//
//
// }
}
