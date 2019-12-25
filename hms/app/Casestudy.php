<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model
{

  protected $fillable = [

              'token_number',
              'food_allergies'.
              'tendency_bleed',
              'heart_disease',
              'blood_pressure',
              'diabetic',
              'surgery',
              'accident',
              'family_medical_history',
              'current_medication',
              'female_pregnancy',
              'breast_feeding',
              'others',
              'health_insurance',
              'low_income',
              'reference',
        
  ];













  public function relationBetweenAppointment(){
      return $this->hasOne('App\Appointment','id','appointment_id');
  }


}
