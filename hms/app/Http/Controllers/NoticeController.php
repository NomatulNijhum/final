<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Carbon\Carbon;
use Alert;
class NoticeController extends Controller
{
  function index()
  {
      return view ('Dashboard.Noticeboard.add_notice');
  }
  function create(Request $request)
  {
  Notice::insert([
      'title'=>$request->title,
      'description'=>$request->description,
      'start_date'=>$request->start_date,
      'end_date'=>$request->end_date,
      'created_at' => Carbon::now(),


    ]);

Alert::success('info Added Succesfully', 'Done');
    return back();




  }
  function allnotice()
  {

     $notices = Notice::paginate(5);
     // echo $users;
   return view('Dashboard.Noticeboard.all_notice',compact('notices'));
  }



    //edit deathreport

    function single_notice($single_notice)
    {

      $single_notice=Notice::find($single_notice);
        return view ('Dashboard.Noticeboard.edit_notice',compact('single_notice'));
    }



    function deletedeathreport($single_notice)
    {
  Notice::findOrFail($single_notice)->delete();
    return back();
    }






                function update(Request $request)
                {

                  Notice::findOrFail($request->notic_id)->update([

                    'title'=>$request->title,
                    'description'=>$request->description,
                    'start_date'=>$request->start_date,
                    'end_date'=>$request->end_date,
                    'created_at' => Carbon::now(),
                

                  ]);



    Alert::success('Updated Successfully', 'Done');
                 return back();

                }









}
