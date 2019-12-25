<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Department;
use Alert;

class DepartmentController extends Controller
{
  function index()
  {
      return view ('Dashboard.Department.adddepartment');
  }


        function create(Request $request)
        {
          Department::insert([
            'department_name'=>$request->department_name,
            'description'=>$request->description,
            'created_at' => Carbon::now(),


          ]);

          Alert::success('Department Added Succesfully', 'Done');
              return back();
        }



                    function update(Request $request)
                    {

                      Department::findOrFail($request->departmen_id)->update([

                        'department_name'=>$request->department_name,
                        'description'=>$request->description,
                          'created_at' => Carbon::now(),

                      ]);


        Alert::success('Updated Successfully', 'Done');
                     return back();

                    }


                function alldepartment()
                {

                   $departments = Department::paginate(5);
                   // echo $users;
                 return view('Dashboard.Department.alldepartment',compact('departments'));
                }







                        //edit department

                        function single_department($department_id)
                        {
                          $single_department=Department::find($department_id);
                            return view ('Dashboard.Department.edit_department',compact('single_department'));
                                  return back();

                        }


                                function deletedepartment($department_id)
                                {
                              Department::findOrFail($department_id)->delete();
                                return back();
                                }





}
