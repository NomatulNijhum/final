<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Department;
use App\Schedule;
use App\Doctor;
use Image;
Use Alert;

class ScheduleController extends Controller
{

  function index()
  {

      $doctors = Doctor::all();
      $departments = Department::all();
      return view ('Dashboard.Schedule.addschedule',compact('doctors','departments'));

  }



  function create(Request $request)
   {

     $last_inserted_id = Schedule::insertGetId([

    'doctor_id'   =>   $request->doctor_id,
    'department_id'=>$request->department_id,
    'available_days' => $request->available_days,
    'available_times'  =>  $request->available_times,
    'available_time'   =>   $request->available_time,
    'picture' => $request->picture,
    'created_at' => Carbon::now(),
    ]);

    if ($request->hasFile('picture')) {
$photo_upload     =  $request ->picture;
$photo_extension  =  $photo_upload -> getClientOriginalExtension();
$photo_name       =  $last_inserted_id . "." . $photo_extension;
Image::make($photo_upload)->resize(360,360)->save(base_path('public/uploads/picture/'.$photo_name),100);
Schedule::find($last_inserted_id)->update([
'picture'=> $photo_name,

]);
}


Alert::success('Schedule added Successfully', 'Done');
    return back();


}

//update schedule

      function update(Request $request)
    {

                      Schedule::findOrFail($request->schedul_id)->update([

                        'doctor_id'   =>   $request->doctor_id,

                        'available_days' => $request->available_days,
                        'available_times'  =>  $request->available_times,
                        'available_time'   =>   $request->available_time,
                          'created_at' => Carbon::now(),

                      ]);


        Alert::success('Updated Successfully', 'Done');
                     return back();

                    }














//allschedule



function allschedule()
{

   $schedules = Schedule::paginate(5);
   // echo $users;
 return view('Dashboard.Schedule.allschedule',compact('schedules'));
}



        //edit schedule

        function single_schedule($schedule_id)
        {


              $doctors = Doctor::all();

          $single_schedule=  Schedule::find($schedule_id);
            return view ('Dashboard.Schedule.edit_schedule',compact('single_schedule','doctors'));
        }








        function deleteschedule($schedule_id)
        {
      Schedule::findOrFail($schedule_id)->delete();
        return back();
        }









}
