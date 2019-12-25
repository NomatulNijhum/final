<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $Patient_Name="";
    public function __construct($Patient_Name)
    {
      $this->Patient_Name=$Patient_Name;



    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $Patient_Name="";
        return $this->view('Mail.mail',compact('Patient_Name'));

    }
}
