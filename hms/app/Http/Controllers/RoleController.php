<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Carbon\Carbon;
use Alert;
class RoleController extends Controller

{

  public function __construct()
  {

      $this->middleware('auth');
      $this->middleware('verified');
  }

  function index(){




    return view('role.index');
  }







  function create(Request $request){
    Role::insert([
      'role_name' =>$request->role_Name,
        'created_at' => Carbon::now(),
    ]);
    Alert::success('Role Added Succesfully', 'Done');
    return back();
  }









  function update(Request $request)
  {
    Role::findOrFail($request->rol_id)->update([

        'role_name' =>$request->role_Name,
        'created_at' => Carbon::now(),

    ]);
    Alert::success('Role updated Succesfully', 'Done');
        return back();

}












  function allrole()
  {



     $roles = role::all();
     // echo $users;
   return view('role.allrole',compact('roles'));
  }





    //edit role

    function single_role($role_id)
    {
      $single_role=Role::find($role_id);
        return view ('role.editrole',compact('single_role'));
    }



//deleterole

    function deleterole($role_id)
    {
    Role::findOrFail($role_id)->delete();
    return back();
    }


}
