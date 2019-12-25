<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

  protected $fillable = [
    'doctor_name',
    'department_id',
    'date_of_birth',
    'experience',
    'age',
    'phone',
    'email',
    'gender',
    'doctor_details',
    'address',
    'address',
    'picture',


  ];




    function relationBetweenDepartment(){
        return $this->hasOne('App\Department','id','department_id');
    }

}
