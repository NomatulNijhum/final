<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Casestudy;
use App\Appointment;
use Alert;

class CasestudyController extends Controller
{
//   function index()
// {
//
//   $appointments = Appointment::all();
//     return view ('Dashboard.Prescription.add_case_study',compact('appointments'));
// }
//
//
//
//
// function create(Request $request)
// {
//   Casestudy::insert([
//
//     'appointment_id'=>$request->appointment_id,
// 'food_allergies'=>$request->food_allergies,
// 'tendency_bleed'=>$request->tendency_bleed,
// 'heart_disease'=>$request->heart_disease,
// 'blood_pressure'=>$request->blood_pressure,
// 'diabetic'=>$request->diabetic,
//   'surgery'=>$request->surgery,
//     'accident'=>$request->accident,
//      'family_medical_history'=>$request->family_medical_history,
//     'current_medication'=>$request->current_medication,
//       'female_pregnancy'=>$request->female_pregnancy,
//       'breast_feeding'=>$request->breast_feeding,
//       'others'=>$request->others,
//       'health_insurance'=>$request->health_insurance,
//       'low_income'=>$request->low_income,
//       'reference'=>$request->reference,
//     'created_at' => Carbon::now(),
//
//
//
//   ]);
//
//       return back();
// }


                    // function allcasestudy()
                    // {
                    //
                    //    $casestudies =   Casestudy::all();
                    //    // echo $users;
                    //  return view('Dashboard.Prescription.all_case_study',compact('casestudies'));
                    // }
                    //



        //edit prescription

        function next_casestudy($casestudie_id)
          {

              $next_casestudy=Casestudy::find($casestudie_id);
          return view ('Dashboard.Prescription.edit_casestudy',compact('next_casestudy'));
        }







      function deletecasestudy($next_casestudy)
        {
      Casestudy::findOrFail($next_casestudy)->delete();
        return back();  }



                    function update(Request $request)
                    {

                      Casestudy::findOrFail($request->casest_id)->update([

                                             'token_number'=>$request->token_number,
                                       'food_allergies'=>$request->food_allergies,
                                       'tendency_bleed'=>$request->tendency_bleed,
                                       'heart_disease'=>$request->heart_disease,
                                          'blood_pressure'=>$request->blood_pressure,
                                          'diabetic'=>$request->diabetic,
                                         'surgery'=>$request->surgery,
                                           'accident'=>$request->accident,
                                            'family_medical_history'=>$request->family_medical_history,
                                           'current_medication'=>$request->current_medication,
                                             'female_pregnancy'=>$request->female_pregnancy,
                                             'breast_feeding'=>$request->breast_feeding,
                                             'others'=>$request->others,
                                             'health_insurance'=>$request->health_insurance,
                                             'low_income'=>$request->low_income,
                                             'reference'=>$request->reference,
                                           'created_at' => Carbon::now(),


                      ]);



        Alert::success('Updated Successfully', 'Done');
                     return back();

                    }


///prescriptionindex


// function prescriptionindex()
// {
//
//
//   return view ('Dashboard.Prescription.add_prescription');
// }
//







}
