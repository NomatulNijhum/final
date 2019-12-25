<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Doctor;
use App\Department;
use App\Price;
use Carbon\Carbon;
Use PDF;

class PaymentController extends Controller
{
//   function index()
//
//   {
//               $appointments = Appointment::all();
//
//           $doctors = Doctor::all();
//          $departments = Department::all();
//       return view ('Dashboard.Payment.addpayment',compact('appointments','doctors','departments'));
//
//   }
//
//
//
//
//     function addpayment_create(Request $request)
//     {
//         Payment::insert([
//
//
//           'appointment_id'=>$request->token_number,
//         'Patient_Name'=>$request->Patient_Name,
//         'department_id'=>$request->department_id,
//         'doctor_id'=>$request->doctor_id,
//         'adminssion_date'=>$request->adminssion_date,
//         'discharge_date'=>$request->discharge_date,
//         'first_service_name'=>$request->first_service_name,
//          'first_service_cost'=>$request->first_service_cost,
//          'second_service_name'=>$request->second_service_name,
//         'second_service_cost'=>$request->second_service_cost,
//           'third_service_name'=>$request->third_service_name,
//           'third_service_cost'=>$request->third_service_cost,
//           'cost_of_treatment'=>$request->cost_of_treatment,
//           'advance_paid'=>$request->advance_paid,
//           'due_payment'=>$request->due_payment,
//           'payment_type'=>$request->payment_type,
//           'card_no'=>$request->card_no,
//
//
//
// ]);
//
// return back();
//
//
//
// }
//
// function  update(Request $request)
// {
//   $total = $request->visitingfee + $request->medicine_id +$request->smedicine_name +
//   $request->tmedicine_name+$request->roomtype_id;
//
//   Price::findOrFail($request->pric_id)->update([
//
//     'token_number'=>$request->token_number,
//    'Patient_Name'=>$request->Patient_Name,
//     'visitingfee'=>$request->visitingfee,
//     'medicine_id'=>$request->medicine_id,
//     'smedicine_name'=>$request->smedicine_name,
//     'tmedicine_name'=>$request->tmedicine_name,
//     'roomtype_id'=>$request->roomtype_id,
//     'cost_of_treatment'=>$total,
//     'payment_type'=>$request->payment_type,
//      'created_at' => Carbon::now(),
//   ]);
// return back();
// Alert::success('Bill Updated Succesfully', 'Done');
// }



             function createbill($price_id)
             {
      $createbill=Price::find($price_id);
 $pdf = PDF::loadView('Dashboard.Payment.pdf_price',compact('createbill'));
            return $pdf->download('SHCbill.pdf');
             }





// END
}
