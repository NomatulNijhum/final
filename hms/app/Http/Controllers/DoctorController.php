<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Doctor;
use App\Department;
Use Alert;
use Image;
Use PDF;

class DoctorController extends Controller
{


          function index()
          {
              $departments = Department::all();

              return view ('Dashboard.Doctor.index',compact('departments'));
          }



           function create(Request $request)
            {

                $last_inserted_id = Doctor::insertGetId([
                'doctor_name'=>$request->doctor_name,
                'department_id'=>$request->department_id,
                'date_of_birth'=>$request->date_of_birth,
                'experience'=>$request->experience,
                'age'=>Carbon::parse($request->date_of_birth)->age,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'doctor_details'=>$request->doctor_details,
                'address'=>$request->address,
                'picture' => $request->picture,
                'created_at' => Carbon::now(),


              ]);


            if ($request->hasFile('picture')) {
 $photo_upload     =  $request ->picture;
 $photo_extension  =  $photo_upload -> getClientOriginalExtension();
 $photo_name       =  $last_inserted_id . "." . $photo_extension;
 Image::make($photo_upload)->resize(360,360)->save(base_path('public/uploads/picture/'.$photo_name),100);
 Doctor::find($last_inserted_id)->update([
 'picture'=> $photo_name,

]);
}

Alert::success('Doctor added  Successfully', 'Done');
              return back();
            }



            function update(Request $request)
            {

              Doctor::findOrFail($request->docto_id)->update([

                'doctor_name'=>$request->doctor_name,
                'department_id'=>$request->department_id,
                'date_of_birth'=>$request->date_of_birth,
                'experience'=>$request->experience,
                'age'=>Carbon::parse($request->date_of_birth)->age,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'doctor_details'=>$request->doctor_details,
                'address'=>$request->address,
                  'created_at' => Carbon::now(),

              ]);


    Alert::success('Updated Successfully', 'Done');
             return back();

            }











            function alldoctor()
            {

               $doctors = doctor::paginate(5);

            
             return view('Dashboard.Doctor.alldoctor',compact('doctors'));
            }






        //edit doctor

      function single_doctor($doctor_id)

      {
          $departments = Department::all();
        $single_doctor=Doctor::find($doctor_id);
       return view ('Dashboard.Doctor.edit_doctor',compact('single_doctor','departments'));
      return back();

      }





      function deletedoctor($doctor_id)
      {
    Doctor::findOrFail($doctor_id)->delete();
          return back();
      }







            function createpdf($doctor_id)
            {
              // $data=$doctor_id;
              // $drname=$doctor_name;

    $createpdf=Doctor::find($doctor_id);
              $pdf = PDF::loadView('Dashboard.Doctor.pdf_doctor',compact('createpdf'));
           return $pdf->download('doctor.pdf');
            }










}
