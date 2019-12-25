<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\RoomAllotment;
use App\Appointment;
use App\Doctor;
use App\Roomtype ;

use Alert;




class RoomAllotmentController extends Controller
{
          //
          //
          //   function index()
          //   {
          //           $appointments = Appointment::all();
          //           $doctors = Doctor::all();
          //           $roomtypes= Roomtype::all();
          // return view ('Dashboard.RoomAllotment.addroom',compact('appointments','doctors','roomtypes'));
          //
          //
          //   }



            //
            // function create(Request $request)
            // {
            //   RoomAllotment::insert([
            //
            // 'room_number'=>$request->room_number,
            // 'roomtype_id'=>$request->roomtype_id,
            // 'appointment_id'=>$request->appointment_id,
            // 'doctor_id'=>$request->doctor_id,
            // 'allot_date'=>$request->allot_date,
            // 'discharge_date'=>$request->discharge_date,
            //
            // 'created_at' => Carbon::now(),
            //
            //
            //
  //           //   ]);
  // Alert::allart('info Added Succesfully','success');
  //           return back();
  //
  //         }
  //
  //         //
          // function allroom()
          // {
          //    $room_allotments = RoomAllotment::all();
          //    // echo $users;
          //  return view('Dashboard.RoomAllotment.allroom',compact('room_allotments'));
          // }

      //RoomType

            function addroomtype()
            {

                  return view ('Dashboard.RoomAllotment.roomtype');
            }


        function RoomType_create(Request $request)
              {
                      Roomtype::insert([
                        'room_name'=>$request->room_name,
                        'room_price'=>$request->room_price,
                        'created_at' => Carbon::now(),
                      ]);

                    return back();
                    }


    function single_roomallocation($room_allotment_id)

            {
                  $appointments = Appointment::all();
              $doctors = Doctor::all();
              $roomtypes  = Roomtype::all();
              $single_roomallocation=RoomAllotment::find($room_allotment_id);
           return view ('Dashboard.RoomAllotment.editroomallocation',compact('single_roomallocation','roomtypes','doctors','appointments'));

        }





            function deleteroomallocation($room_allotment_id)
          {
            RoomAllotment::findOrFail($room_allotment_id)->delete();
              return back();
          }




          function update(Request $request)
          {

            RoomAllotment::findOrFail($request->room_allot_id)->update([


              'token_number'=>$request->token_number,
             'Patient_Name'=>$request->Patient_Name,
             'Date_Of_Birth'=>$request->Date_Of_Birth,
             'Age'=>$request->Age,
             'Phone'=>$request->Phone,
             'Email'=>$request->Email,
             'gender'=>$request->gender,
             'Address'=>$request->Address,
             'doctor_id'=>$request->doctor_id,
             'appointment_date'=>$request->appointment_date,
             'Problem'=>$request->Problem,
             'room_number'=>$request->room_number,
             'roomtype_id'=>$request->roomtype_id,
            'allot_date'=>$request->allot_date,
            'discharge_date'=>$request->discharge_date,
             'created_at' => Carbon::now(),

            ]);



Alert::success('Updated Successfully', 'Done');
           return back();

          }






}
