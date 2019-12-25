<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Investigation;

use App\Appointment;
use App\Doctor;
use Alert;
Use PDF;
class InvestigationController extends Controller
{

              function index()
              {
                $appointments = Appointment::all();
                  $doctors = Doctor::all();
                  return view ('Dashboard.Activities.add_investigation_report',compact('appointments','doctors'));
              }

              function create(Request $request)
              {
              Investigation::insert([
                  'appointment_id'=>$request->appointment_id,
                  'date'=>$request->date,
                  'title'=>$request->title,
                  'description'=>$request->description,
                  'doctor_id'=>$request->doctor_id,
                  'file'=>$request->file,

                  'created_at' => Carbon::now(),


                ]);

                  return back();
              }


              function allinvestigation()
              {

                 $investigations = Investigation::all();
                 // echo $users;
               return view('Dashboard.Activities.all_investigation_report',compact('investigations'));
              }






        function single_investigation($single_investigation)
          {
                  $appointments = Appointment::all();
                    $doctors = Doctor::all();
                  $single_investigation=Investigation::find($single_investigation);
                    return view ('Dashboard.Activities.edit_investigation_report',compact('single_investigation','appointments','doctors'));
                }



                function deleteinvestigation($single_investigation)
                {
            Investigation::findOrFail($single_investigation)->delete();
                return back();
                }



                          function update(Request $request)
                          {

                            Investigation::findOrFail($request->inv_id)->update([
                              'appointment_id'=>$request->appointment_id,
                              'date'=>$request->date,
                              'title'=>$request->title,
                              'description'=>$request->description,
                              'doctor_id'=>$request->doctor_id,
                              'created_at' => Carbon::now(),

                            ]);


                Alert::success('Updated Successfully', 'Done');
                           return back();

                          }

                          

        function createinvestigation_pdf($investigation_id)
            {
              $createinvestigation_pdf=Investigation::find($investigation_id);
              $pdf = PDF::loadView('Dashboard.Activities.createinvestigation_pdf',compact('createinvestigation_pdf'));
              return $pdf->download('Investigation.pdf');
              }





}
