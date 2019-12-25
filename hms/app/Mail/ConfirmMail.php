<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->Patient_Name=$Patient_Name;
      $this->doctor_id=$doctor_id;
      $this->appointment_date=$appointment_date;
      $this->token_number=$token_number;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $Patient_Name="";
        $doctor_id="";
        $appointment_date="";
        $token_number="";




  eturn $this->view('Mail.confirmedmail',compact('Patient_Name','doctor_id','appointment_date','token_number'));

    }
}
