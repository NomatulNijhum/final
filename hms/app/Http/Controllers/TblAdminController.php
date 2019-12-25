<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class TblAdminController extends Controller
{
  public function home()
      {
          return view('BloodBank.bloodindex');
      }

      public function login_user()
      {
          return view('BloodBank.Blogin');
      }

      public function donar()
      {
        $donor_info=DB::table('tbl_users')
                     ->where('user_designation',"Donar")
                     ->get();
        $show_donor=view('BloodBank.donar')
                        ->with('donor_info',$donor_info);

       return view('BloodBank.app')
              ->with('BloodBank.donar',$show_donor);
      }

      public function registration()
      {
          return view('BloodBank.userregistration');
      }

      public function about()
      {
          return view('BloodBank.about');
      }

      public function community_page()
      {
          return view('BloodBank.community');
      }

      public function details_page()
      {
          return view('BloodBank.detaiils');
      }
}
