<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{




    protected $fillable = [

                'token_number',
                'Patient_Name'.
                'Date_Of_Birth',
                'Age',
                'Phone',
                'Email',
                'gender',
                'Address',
                'doctor_id',
                'appointment_date',
                'Problem',
                'patienttype',
                'medicine_id',
                'fmedicine_times',
                'fmedicine_dose',
                'fmedicine_instruction',
                'smedicine_name',
                'smedicine_times',
                'smedicine_dose',
                'smedicine_instruction',
                'tmedicine_name',
                'tmedicine_times',
                'tmedicine_dose',
                'tmedicine_instruction',


                'diagnosis',
                'visitingfee',
        'patientsnote',


    ];








            public function relationBetweenAppointment(){
                return $this->hasOne('App\Appointment ','id','appointment_id');
            }

            public function relationBetweenDoctor(){
                return $this->hasOne('App\Doctor','id','doctor_id');
        }

        public function relationBetweenMedicine(){
            return $this->hasOne('App\Medicine','id','medicine_id');
             }



}
