<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Medicine;
use Alert;
class MedicineController extends Controller
{

                function index()
                {
                    return view ('Dashboard.Activities.add_medicine');
                }


                function create(Request $request)
                {
                  Medicine::insert([
                    'medicine_name'=>$request->medicine_name,
                    'category_name'=>$request->category_name,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'manufactured_by'=>$request->manufactured_by,

                    'created_at' => Carbon::now(),


                  ]);

                  Alert::success('addeded Successfully', 'Done');
                    return back();
                }



                function update(Request $request)
                {

                  Medicine::findOrFail($request->medic_id)->update([
                    'medicine_name'=>$request->medicine_name,
                    'category_name'=>$request->category_name,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'manufactured_by'=>$request->manufactured_by,

                    'created_at' => Carbon::now(),

                  ]);


        Alert::success('Updated Successfully', 'Done');
                 return back();

                }








                function allmedicine()
                {

                   $medicines =  Medicine::all();
                   // echo $users;
                 return view('Dashboard.Activities.all_medicine',compact('medicines'));
                }



                  function single_Medicine($single_Medicine)
                  {

                    $single_Medicine=Medicine::find($single_Medicine);
                      return view ('Dashboard.Activities.edit_Medicine_report',compact('single_Medicine'));
                  }



                  function deleteMedicine($single_Medicine)
                  {
                Medicine::findOrFail($single_Medicine)->delete();
                  return back();
                  }


}
