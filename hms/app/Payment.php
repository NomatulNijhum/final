<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{








          public function relationBetweenAppointment(){
              return $this->hasOne('App\Appointment','id','appointment_id');
          }


            public function relationBetweenDepartment(){
                return $this->hasOne('App\Department','id','department_id');
            }



            public function relationBetweenDoctor(){
                return $this->hasOne('App\Doctor','id','doctor_id');
            }





}
