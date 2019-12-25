<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Operationreport;
use App\Appointment;
use App\Doctor;
use Alert;
Use PDF;

class OperationreportController extends Controller
{

            function index()
            {
              $appointments = Appointment::all();
                $doctors = Doctor::all();
                return view ('Dashboard.Activities.add_operation_report',compact('appointments','doctors'));
            }

            function create(Request $request)
            {
              Operationreport::insert([
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



                      function update(Request $request)
                      {

                        Operationreport::findOrFail($request->opa_id)->update([
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





            function alloperationreport()
            {

               $operationreports = Operationreport::all();
               // echo $users;
             return view('Dashboard.Activities.all_operation_report',compact('operationreports'));
            }




            //edit deathreport
            function single_operationreport($single_operationreport)
            {
              $appointments = Appointment::all();
                $doctors = Doctor::all();
              $single_operationreport=Operationreport::find($single_operationreport);
        return view ('Dashboard.Activities.edit_operationreport',compact('single_operationreport','appointments','doctors'));


            }



            function deleteoperationreport($single_operationreport)
            {
          Operationreport::findOrFail($single_operationreport)->delete();
            return back();
            }


                      function createopration_pdf($operationreport_id)
                      {


              $createopration_pdf=Operationreport::find($operationreport_id);
            $pdf = PDF::loadView('Dashboard.Activities.createopration_pdf',compact('createopration_pdf'));
                     return $pdf->download('OperationReport.pdf');
                      }



}
