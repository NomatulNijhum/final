<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Deathreport;
use App\Appointment;
use Alert;
use App\Doctor;
Use PDF;

class DeathreportController extends Controller
{
  function index()
  {
         $appointments = Appointment::all();
            $doctors = Doctor::all();
      return view ('Dashboard.Activities.add_death_report',compact('appointments','doctors'));
  }

  function create(Request $request)
  {
  Deathreport::insert([
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

  Deathreport::findOrFail($request->deat_id)->update([
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




  function alldeathreport()
  {

     $deathreports = Deathreport::all();
     // echo $users;
   return view('Dashboard.Activities.all_death_report',compact('deathreports'));
  }


  //edit deathreport

  function single_deathreport($single_deathreport)
  {
 $appointments = Appointment::all();
    $doctors = Doctor::all();
    $single_deathreport=Deathreport::find($single_deathreport);
      return view ('Dashboard.Activities.edit_death_report',compact('single_deathreport','appointments','doctors'));
  }



  function deletedeathreport($single_deathreport)
  {
Deathreport::findOrFail($single_deathreport)->delete();
  return back();
  }



  function createdeath_pdf($deathreport_id)
  {

$createdeath_pdf=Deathreport::find($deathreport_id);
  $pdf = PDF::loadView('Dashboard.Activities.createdeath_pdf',compact('createdeath_pdf'));
 return $pdf->download('DeathReport.pdf');
  }



}
