<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Appointment;
use App\Prescription;
use App\Medicine;
use App\Doctor;
use App\Roomtype ;
use App\RoomAllotment;
use App\Price;
use App\Schedule;
use App\Casestudy;
use Mail;
use App\Mail\AppointmentMail;
use App\Mail\ConfirmMail;
use Image;
use Alert;
Use PDF;

class HmsfrontendController extends Controller
{

    function frontendindex()
   {

                $schedules = Schedule::all();


            return view('Frontend.ourdoctors',compact('schedules'));
            }

            function index()


            {

                $doctors = Doctor::all();

                return view ('Dashboard.Appointment.addappointment',compact('doctors'));

            }

            function create(Request $request)
            {

               $last_inserted_id = Appointment::insertGetId([

                'Patient_Name'=>$request->Patient_Name,
                'Date_Of_Birth'=>$request->Date_Of_Birth,
                'Age'=>Carbon::parse($request->Date_Of_Birth)->age,
                'Phone'=>$request->Phone,
                'Email'=>$request->Email,
                'Gender'=>$request->Gender,
                'Address'=>$request->Address,
                'picture' => $request->picture,
                'doctor_id'=>$request->doctor_id,
                'appointment_date'=>$request->appointment_date,
                'token_number'=>'SHC'.rand(1000,100000),
                'problem'=>$request->problem,
                'status'=>$request->status,
                'created_at' => Carbon::now(),

              ]);

              if ($request->hasFile('picture')) {
   $photo_upload     =  $request->picture;
   $photo_extension  =  $photo_upload-> getClientOriginalExtension();
   $photo_name       =  $last_inserted_id . "." . $photo_extension;
   Image::make($photo_upload)->resize(360,360)->save(base_path('public/uploads/picture/'.$photo_name),100);
   Appointment::find($last_inserted_id)->update([
   'picture'=> $photo_name,
  ]);
  }


              $Patient_Name=$request->Patient_Name;
             Mail::to($request->Email)->send(new AppointmentMail($Patient_Name));


Alert::success('info Added Succesfully', 'Done');
             return back();


            }


            function update(Request $request)
            {

              Appointment::findOrFail($request->appointmen_id)->update([


                  'status'=>$request->status,
                  'created_at' => Carbon::now(),

              ]);



Alert::success('Updated Successfully', 'Done');
             return back();

            }





//allappointment
            function allappointment()
            {


             $appointments = Appointment::paginate(5);

            return view('Dashboard.Appointment.allappointment',compact('appointments'));
            }

///editappointment

            function single_appointment($appointment_id)
            {

                  $doctors = Doctor::all();
               $single_appointment=Appointment::find($appointment_id);
              return view ('Dashboard.Appointment.edit_appointment',compact('single_appointment','doctors'));
            }







//deleteappointment

            function deleteappointment($appointment_id)
            {
            Appointment::findOrFail($appointment_id)->delete();
            return back();
            }





///newappointment


      function newprescriptionindex()
      {
          $appointments = Appointment::all();
        return view('Dashboard.Prescription.newprescription',compact('appointments'));
        }





            function single_prescription($appointment_id)
            {
              $doctors = Doctor::all();
              $medicines=Medicine::all();
              $appointments = Appointment::all();
              $single_prescription=Appointment::find($appointment_id);
              return view('Dashboard.Prescription.newprescription',compact('single_prescription','appointments','doctors','medicines'));
            }
////viewprescription

            //
            //
            //     function viewprescription()
            //           {
            //               $appointments = Appointment::all();
            //               return view('Dashboard.Prescription.viewPrescription',compact('appointments'));
            //             }
            //
            // function single_prescription_view($appointment_id)
            // {
            //   $doctors = Doctor::all();
            //   $medicines=Medicine::all();
            //   $appointments = Appointment::all();
            //   $single_prescription_view=Appointment::find($appointment_id);
            //   return view('Dashboard.Prescription.viewPrescription',compact('single_prescription_view','appointments','doctors','medicines'));
            // }


      function newprescription_create(Request $request)
       {

                                     Prescription::insert([

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
                                     'smedicine_name'=>$request->smedicine_name,
                                     'smedicine_times'=>$request->smedicine_times,
                                     'smedicine_dose'=>$request->smedicine_dose,
                                     'smedicine_instruction'=>$request->smedicine_instruction,
                                     'tmedicine_name'=>$request->tmedicine_name,
                                     'tmedicine_times'=>$request->tmedicine_times,
                                     'tmedicine_dose'=>$request->tmedicine_dose,
                                     'tmedicine_instruction'=>$request->tmedicine_instruction,
                                     'diagnosis'=>$request->diagnosis,
                                     'visitingfee'=>$request->visitingfee,
                                     'patientsnote'=>$request->patientsnote,

                      ]);

            Alert::success('prescription added Successfully', 'Done');

                      return back();

                     }




///////viewPrescription

     function allprescription()
     {

      $prescriptions= Prescription::paginate(5);
                                              // echo $users;
     return view('Dashboard.Prescription.viewPrescription',compact('prescriptions'));
     }


//delete prestription

      function deleteprescription($prescription_id)
     {
                 Prescription::findOrFail($prescription_id)->delete();
                 return back();
                 }


 //
 //   function single_prescription_view($appointment_id)
 // {
 //    $doctors = Doctor::all();
 //   $medicines=Medicine::all();
 //  $appointments = Appointment::all();
 // $single_prescription_view=Appointment::find($appointment_id);
 // return view('Dashboard.Prescription.individualvP_view',compact('single_prescription_view','appointments','doctors','medicines'));
 //
 // }





             function createprescription($prescription_id)
             {
      $createprescription=Prescription::find($prescription_id);

 $pdf = PDF::loadView('Dashboard.Prescription.pdf_prescription',compact('createprescription'));
            return $pdf->download('SHCPrescription.pdf');
             }







    function addroomserviceindex()
   {

    $appointments = Appointment::all();

   return view('Dashboard.RoomAllotment.addroomservice',compact('appointments'));
   }





//edit room
   function single_roomservice($appointment_id)
   {
     $doctors = Doctor::all();
     $appointments = Appointment::all();
     $single_roomservice=Appointment::find($appointment_id);
    $roomtypes = Roomtype::all();
     return view('Dashboard.RoomAllotment.addroomservice',compact('single_roomservice','appointments','doctors','roomtypes'));

///ConfirmMailmail


   //   $Patient_Name=$request->Patient_Name;
   //   $doctor_id=$request->doctor_id;
   //   $appointment_date=$request->appointment_date;
   //   $token_number=$request->token_number;
   //
   // Mail::to($request->mail)->send(new ConfirmMail($Patient_Name,$doctor_id,$appointment_date,$token_number));



   }


   function newroomservice_create(Request $request)
                  {

                                        RoomAllotment::insert([
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

Alert::success('Room Added Succesfully', 'Done');
               return back();

                }


                function allroom()
                {
                   $room_allotments = RoomAllotment::paginate(5);

                 return view('Dashboard.RoomAllotment.allroom',compact('room_allotments'));
                }






                function addcasestudyindex()
               {

                $appointments = Appointment::all();


               return view('Dashboard.Prescription.add_case_study',compact('appointments'));
               }



       function single_casestudy($appointment_id)
                 {
                       $appointments = Appointment::all();

                $single_casestudy=Appointment::find($appointment_id);
                 return view ('Dashboard.Prescription.add_case_study',compact('single_casestudy','appointments'));
               }





               function add_case_study_create(Request $request)
               {
                 Casestudy::insert([

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
                 Alert::success('Case Study Added Succesfully', 'Done');

                     return back();
               }
//////////


                    function allcasestudy()
                    {

                       $casestudies =   Casestudy::all();
                       // echo $users;
                     return view('Dashboard.Prescription.all_case_study',compact('casestudies'));
                    }

                    function single_casestudy_edit($single_casestudy)
                      {
                          $single_casestudy=Casestudy::find($single_casestudy);
                      return view ('Dashboard.Prescription.edit_prescription',compact('single_casestudy'));
                    }


 // function bill($appointment_id)
 //
 //    {
 //       $appointments = Appointment::all();
 //       $medicines=Medicine::all();
 //       $roomtypes = Roomtype::all();
 //       $prescriptions = prescription::all();
 //        $single_bill=Appointment::findOrFail($appointment_id);
 //
 //        $abc=prescription::findOrFail($appointment_id)->visitingfee;
 //
 //        $abcd=prescription::findOrFail($appointment_id)->relationBetweenMedicine->price;
 //        $abcde=RoomAllotment::findOrFail($appointment_id)->relationBetweenRoomtype->room_price;
 //
 //        $total_price = $abc+$abcd+$abcde;
 //
 //
 //
 //
 //           return view('Dashboard.Payment.price',compact('appointments','medicines','roomtypes','prescriptions','single_bill','total_price'));
 //     }



   //   function single_bill($appointment_id)
   //
   //             {
   //                   $appointments = Appointment::all();
   //                   $medicines=Medicine::all();
   //                  $roomtypes=Medicine::all();
   //                   $prescriptions=Medicine::all();
   //
   //
   //                   $single_bill=Appointment::findOrFail($appointment_id);
   //                  $single_prescription=prescription::findOrFail($appointment_id);
   //                  $single_roomservice=Roomtype::findOrFail($appointment_id);
   //                 $single_medicine=Medicine::findOrFail($appointment_id);
   //
   // return view ('Dashboard.Payment.price',compact('single_bill','single_prescription','single_roomservice','single_medicine','appointments','medicines','roomtypes','prescriptions'));
   //
   //           }

   function bill()
  {

   $appointments = Appointment::all();

  return view('Dashboard.Payment.price',compact('appointments'));
  }

  function allbill()
 {

  $prices = Price::all();

 return view('Dashboard.Payment.allpayment',compact('prices'));
 }



     function single_bill($appointment_id)
     {

       $appointments = Appointment::all();
      $single_bill=Appointment::find($appointment_id);
       return view('Dashboard.Payment.price',compact('single_bill','appointments'));

     }

     function next_bill($pric_id)
     {
           $next_bill=Price::find($pric_id);
       return view('Dashboard.Payment.update_price',compact('next_bill'));
     }


             function bill_create(Request $request)
             {
               $total = $request->visitingfee + $request->medicine_id +$request->smedicine_name +
               $request->tmedicine_name+$request->roomtype_id;
               Price::insert([
             'token_number'=>$request->token_number,
            'Patient_Name'=>$request->Patient_Name,
             'visitingfee'=>$request->visitingfee,
             'medicine_id'=>$request->medicine_id,
             'smedicine_name'=>$request->smedicine_name,
             'tmedicine_name'=>$request->tmedicine_name,
             'roomtype_id'=>$request->roomtype_id,
            'cost_of_treatment'=>$total,
            'payment_type'=>$request->payment_type,
             'created_at' => Carbon::now(),
              ]);
                   return back();
        Alert::success('info added Succesfully', 'Done');
             }






//end
}
