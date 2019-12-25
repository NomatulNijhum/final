<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Prescription;
use App\Medicine;
use App\Doctor;
use Carbon\Carbon;
use Alert;

class PatientController extends Controller
{
//
//         function index()
//         {
//             return view ('Dashboard.Patient.index');
//         }
//
//
//       function create(Request $request)
//       {
//         if ($request->Picture) {
//       $file=$request->File('Picture');
//       $ext=$file->getClientOriginalExtension();
//       $filename=$request->email . '.' . $ext;
//       $file->move('images/',$filename);
//     }
//
//
//
//
//         Patient::insert([
//           'Patient_Name'=>$request->Patient_Name,
//           'Date_Of_Birth'=>$request->Date_Of_Birth,
//           'Age'=>$request->Age ,
//           'Phone'=>$request->Phone,
//           'Email'=>$request->Email,
//           'Gender'=>$request->Gender,
//           'Address'=>$request->Address,
//           'Picture' => $filename,
//           'created_at' => Carbon::now(),
//
//         ]);
//
//         return back();
//
//       }
//
//
//       function allpatient()
//       {
//
//          $patients = Patient::all();
//          // echo $users;
//        return view('Dashboard.Patient.allpatient',compact('patients'));
//       }
//
//               function patientdetails()
//               {
//                   return view ('Dashboard.Patient.patientdetails');
//               }
//
//
//
// //edit patients
//
// function single_patient($patient_id)
// {
//   $single_patient=Patient::find($patient_id);
//     return view ('Dashboard.Patient.edit_patient',compact('single_patient'));
// }
//
//
//
// function deletepatient($patient_id)
// {
// Patient::findOrFail($patient_id)->delete();
// return back();
// }
//
function next_prescription($prescrip_id)
  {
    $doctors = Doctor::all();
    $medicines=Medicine::all();
    $appointments = Appointment::all();
      $next_prescription=Prescription::find($prescrip_id);
  return view ('Dashboard.Prescription.edit_prescription',compact('next_prescription','appointments','doctors','medicines'));

}

                    function update(Request $request)
                    {

                      Prescription::findOrFail($request->prescrip_id)->update([

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
                        'patienttype'=>$request->patienttype,
                        'medicine_id'=>$request->medicine_id,
                        'fmedicine_times'=>$request->fmedicine_times,
                        'fmedicine_dose'=>$request->fmedicine_dose,
                        'fmedicine_instruction'=>$request->fmedicine_instruction,
                        // 'smedicine_name'=>$request->smedicine_name,
                        // 'smedicine_times'=>$request->smedicine_times,
                        // 'smedicine_dose'=>$request->smedicine_dose,
                        // 'smedicine_instruction'=>$request->smedicine_instruction,
                        // 'tmedicine_name'=>$request->tmedicine_name,
                        // 'tmedicine_times'=>$request->tmedicine_times,
                        // 'tmedicine_dose'=>$request->tmedicine_dose,
                        // 'tmedicine_instruction'=>$request->tmedicine_instruction,
                        'diagnosis'=>$request->diagnosis,
                        'visitingfee'=>$request->visitingfee,
                        'patientsnote'=>$request->patientsnote,
                         'created_at' => Carbon::now(),
                      ]);



        Alert::success('Updated Successfully', 'Done');
                     return back();

                    }







}
