<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

  protected $fillable = [

              'token_number',
              'Patient_Name'.
              'visitingfee',
              'medicine_id',
              'smedicine_name',
              'tmedicine_name',
              'roomtype_id',
              'payment_type',




  ];










          public function relationBetweenMedicine(){
              return $this->hasOne('App\Medicine','id','medicine_id');
               }




           public function relationBetweenprescription(){
            return $this->hasOne('App\prescription','id','prescription_id');
                            }


          public function relationBetweenRoomtype(){
            return $this->hasOne('App\Roomtype','id','roomtype_id');
                            }


}
