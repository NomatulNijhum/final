<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RoomAllotment extends Model
{




    protected $fillable = [
      'room_number',
      'room_type',
      'appointment_id',
      'doctor_id',
      'allot_date',
      'discharge_date',


    ];


        public function relationBetweenAppointment(){
            return $this->hasOne('App\Appointment','id','appointment_id');
        }



            public function relationBetweenDoctor(){
                return $this->hasOne('App\Doctor','id','doctor_id');
            }

            public function relationBetweenRoomtype(){
                return $this->hasOne('App\Roomtype','id','roomtype_id');
            }

}
