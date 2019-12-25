<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\prescription;
use App\RoomAllotment;
use Illuminate\Support\Facades\Schema;

class PriceController extends Controller
{
  function priceindex($appointment_id)
  {
$abc=prescription::findOrFail($appointment_id)->visitingfee;

$abcd=prescription::findOrFail($appointment_id)->relationBetweenMedicine->price;
$abcde=RoomAllotment::findOrFail($appointment_id)->relationBetweenRoomtype->room_price;

$total_price = $abc+$abcd+$abcde;
return view('Dashboard.Payment.stripe',compact('total_price'));



  }







  //if ($request->payment_type==1)
  //{
 //echo"Done";

 //else
 //{return view('Dashboard.Payment.stripe',compact('cost_of_treatment'));


 //}












}
