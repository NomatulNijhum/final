<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  protected $fillable = [

              'Patient_Name',
              'Date_Of_Birth'.
              'Age',
              'Phone',
              'Email',
              'Gender',
              'Address',
              'picture',
              'doctor_id',
              'appointment_date',
              'problem',
              'status',

  ];










          public function relationBetweenDepartment(){
              return $this->hasOne('App\Department','id','department_id');
          }



          public function relationBetweenDoctor(){
              return $this->hasOne('App\Doctor','id','doctor_id');
          }


}
