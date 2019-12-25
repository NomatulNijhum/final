<h1>
<p>  Prescription</p>

<h1>
<p>  your id is: {{$createprescription->id}}</p>
<p>  your Token Number is: {{$createprescription->token_number}}</p>
<p>  your name is: {{$createprescription->Patient_Name}}</p>
<p>  your Date of Birth is: {{$createprescription->Date_Of_Birth}}</p>
<p>  your Age  is: {{$createprescription->Age}}</p>
<p>  your Phone is: {{$createprescription->Phone}}</p>
<p>  your Email is: {{$createprescription->Email}}</p>
<p>  your Gender is: {{$createprescription->gender}}</p>
<p>  your Doctor Name is: {{$createprescription->relationBetweenDoctor->doctor_name}}</p>
<p>  your Appointment Date is: {{$createprescription->appointment_date}}</p>
<p>  your Problem is: {{$createprescription->Problem}}</p>
<p>  your Patient Type  is: {{$createprescription->patienttype}}</p>
<p>  your First Medicine is: {{$createprescription->relationBetweenMedicine->medicine_name }}</p>
<p>  your First Medicine Time is: {{$createprescription->fmedicine_times}}</p>
<p>  your  First Medicine Dose is: {{$createprescription->fmedicine_dose}}</p>
<p>  your  First Medicine Instruction  is: {{$createprescription->fmedicine_instruction}}</p>
<!-- <p>  your Second Medicine Name is: {{$createprescription->relationBetweenMedicine->medicine_name}}</p>
<p>  your Second Medicine Time  is: {{$createprescription->smedicine_times}}</p>
<p>  your Second Medicine Dose  is: {{$createprescription->smedicine_dose}}</p>
<p>  your Second Medicine Instruction is: {{$createprescription->smedicine_instruction}}</p>
<p>  your Third Medicine Name  is: {{$createprescription->relationBetweenMedicine->medicine_name}}</p>
<p>  your Third Medicine is: {{$createprescription->tmedicine_times}}</p>
<p>  your Third Medicine is: {{$createprescription->tmedicine_dose}}</p>
<p>  your Third Medicine is: {{$createprescription->tmedicine_instruction}}</p> -->
<p>  your Diagonis Necessity is: {{$createprescription->diagnosis}}</p>
<p>  your Visiting Fee is: {{$createprescription->visitingfee}}</p>
<p>  your  Note  is: {{$createprescription->patientsnote}}</p>

</h1>
