<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{






	protected $fillable = ['available_days','doctor_id','department_id','available_time','available_times','picture',];

  function relationBetweenDoctor(){
      return $this->hasOne('App\Doctor','id','doctor_id');
  }


	    function relationBetweenDepartment(){
	        return $this->hasOne('App\Department','id','department_id');
	    }



}
