<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use Carbon\Carbon;
use App\Appointment;
use App\Medicine;
use App\Roomtype ;
use App\RoomAllotment;
use App\Price;
use App\Schedule;
use App\Casestudy;
use App\Notice;
use App\TblPost;
use App\Birthreport;
use App\Prescription;
use App\Department;
use App\Role;


class DashboardhomeController extends Controller
{
    function index()
    {
         $totals=Price::sum('cost_of_treatment');
        $appointments = Appointment::all();
        $doctors = Doctor::all();
        $prescriptions = Prescription::all();
        $casestudies = Casestudy::all();
        $notices = Notice::all();
        $tbl_posts = TblPost::all();
        $birthreports = Birthreport::all();
        $prices = price::all();
        $room_allotments = RoomAllotment::all();
        $medicines=Medicine::all();
        $departments=Department::all();
        $roles=Role::all();

    return view('Dashboard.Home.index',compact('appointments','doctors','prescriptions','casestudies','notices','tbl_posts','birthreports','prices','room_allotments','totals','medicines','departments','roles'));
    }
    //
    // function index()
    // {
    //   $datevariable=Carbon::now()->subWeek(1);
    //
    //     $appointments = Appointment::whereDate('created_at',$datevariable)->get();
    //     $doctors = Doctor::whereDate('created_at',$datevariable)->get();
    //     dd($doctors);
    //
    //
    // return view('Dashboard.Home.index',compact('appointments','doctors'));
    // }


    function onedayperformance ()
    {

       $appointments = Appointment::whereDate('created_at',Carbon::today())->get();
       $doctors = Doctor::whereDate('created_at',Carbon::today())->get();
       $prescriptions = Prescription::whereDate('created_at',Carbon::today())->get();
       $casestudies = Casestudy::whereDate('created_at',Carbon::today())->get();
       $notices = Notice::whereDate('created_at',Carbon::today())->get();
       $tbl_posts = TblPost::whereDate('created_at',Carbon::today())->get();
       $birthreports = Birthreport::whereDate('created_at',Carbon::today())->get();
       $prices = price::whereDate('created_at',Carbon::today())->get();
       $room_allotments = RoomAllotment::whereDate('created_at',Carbon::today())->get();
       $departments=Department::whereDate('created_at',Carbon::today())->get();
       $roles=Role::whereDate('created_at',Carbon::today())->get();

    return view('Dashboard.Home.onedayperformance',compact('appointments','doctors','prescriptions','casestudies','notices','tbl_posts','birthreports','prices','room_allotments','departments','roles'));
    }






  }
