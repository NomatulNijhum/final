<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birthreport extends Model
{

  protected $fillable = [

              'appointment_id',
              'date'.
              'title',
              'description',
              'doctor_id',
        

  ];
















  public function relationBetweenAppointment(){
      return $this->hasOne('App\Appointment','id','appointment_id');
  }

  public function relationBetweenDoctor(){
      return $this->hasOne('App\Doctor','id','doctor_id');
  }


}
