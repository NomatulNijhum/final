<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Birthreport;
use App\Appointment;
use App\Doctor;
use Alert;
Use PDF;
class BirthreportController extends Controller
{
           function index()
          {

             $appointments = Appointment::all();
               $doctors = Doctor::all();
              return view ('Dashboard.Activities.add_birth_report',compact('appointments','doctors'));
          }

          function create(Request $request)
          {
            Birthreport::insert([
              'appointment_id'=>$request->appointment_id,
              'date'=>$request->date,
              'title'=>$request->title,
              'description'=>$request->description,
              'doctor_id'=>$request->doctor_id,
              'created_at' => Carbon::now(),


            ]);

                  return back();
          }

          function update(Request $request)
          {

            Birthreport::findOrFail($request->birth_id)->update([
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
















          function allbirthreport()
          {

             $birthreports = Birthreport::all();
             // echo $users;
           return view('Dashboard.Activities.all_birth_report',compact('birthreports'));
          }

          //edit patients

          function single_birthreport($birthreport_id)
          {
             $appointments = Appointment::all();
               $doctors = Doctor::all();
            $single_birthreport=Birthreport::find($birthreport_id);
              return view ('Dashboard.Activities.edit_birth_report',compact('single_birthreport','appointments','doctors'));
          }



          function deletebirthreport($birthreport_id)
          {
        Birthreport::findOrFail($birthreport_id)->delete();
          return back();
          }

          function createbirth_pdf($birthreport_id)
          {


  $createbirth_pdf=Birthreport::find($birthreport_id);
            $pdf = PDF::loadView('Dashboard.Activities.createbirth_pdf',compact('createbirth_pdf'));
         return $pdf->download('BirthReport.pdf');
          }






}
