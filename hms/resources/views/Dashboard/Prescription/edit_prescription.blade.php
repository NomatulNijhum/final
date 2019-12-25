@extends('Dashboard.Home.app')

@section('title')
Update Prescription
@endsection

@section('content')


				<!-- Page Title -->
			<div class="ccontainer-fluid mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Update Prescription</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Update Prescription</li>
								<li class="breadcrumb-item active">Update Prescription</li>
							</ol>
						</div>
					</div>
				</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Update Prescription</h3>
							<form id="newprescription_update" action="{{route ('newprescription_update')}}" method="post" enctype="multipart/form-data">
							@csrf
              <input type="hidden" name="prescrip_id" value="{{ $next_prescription->id }}">




				<div class="form-row">
		<div class="form-group col-md-6">
			<label for="token_number">Patient Id</label>
			<input type="text" name="token_number" value="{{ $next_prescription->token_number }}" class="form-control" placeholder="Patient name" id="patient-name">
				</div>


			<div class="form-group col-md-6">
			<label for="patient-name">Patient Name</label>
		<input type="text" name="Patient_Name" value="{{ $next_prescription->Patient_Name }}" class="form-control" placeholder="Patient name" id="patient-name">
		</div>
		<div class="form-group col-md-6">
			<label for="dob">Date Of Birth</label>
			<input type="date" name="Date_Of_Birth" value="{{ $next_prescription->Date_Of_Birth }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
			</div>
		<div class="form-group col-md-6">
			<label for="age">Age</label>
			<input type="text" name="Age" value="{{ $next_prescription->Age }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
			</div>
		<div class="form-group col-md-6">
			<label for="phone">Phone</label>
			<input type="text" name="Phone" value="{{ $next_prescription->Phone }}" class="form-control" placeholder="Phone" id="Phone">
			</div>
		<div class="form-group col-md-6">
			<label for="email">Email</label>
			<input type="text" name="Email" value="{{ $next_prescription->Email }}" class="form-control" placeholder="Email" id="Email">
			</div>
			<!-- <div class="form-group col-md-6">
				<label for="gender">Gender</label>
				<select class="form-control" name="Gender" id="gender">
					<option class="bg-dark text-white"></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			</div> -->
			<div class="form-group col-md-6">
				<label for="Gender">Gender</label>
				<input type="text" name="Gender" value="{{ $next_prescription->Gender }}" class="form-control" placeholder="Email" id="Email">
				</div>
		<div class="form-group col-md-17">
			<label for="exampleFormControlTextarea1">Address</label>
			<input type="text" name="Address" value="{{ $next_prescription->Address }}" class="form-control" placeholder="Address" id="Address">
			</div>


			<div class="form-group col-md-6">
					<label>Doctor Name</label>
					 <select name="doctor_id" class="form-control">
							@foreach($doctors as $doctor)
						 <option value="{{ $doctor->id }}">{{ $doctor->doctor_name}}</option>
								@endforeach
									 		</select>
									 		 </div>

			<div class="form-group col-md-6">
			<label for="appointment_date">Appointment Date</label>
			<input type="date" name="appointment_date" value="{{ $next_prescription->appointment_date }}" placeholder="appointment_date" class="form-control" id="appointment_date">
			</div>



						<div class="form-group col-md-12">
						<label for="problem">Problem</label>
						<input type="text" name="Problem" value="{{ $next_prescription->problem }}" placeholder="problem" class="form-control" id="problem">
						</div>


        <div class="form-group col-md-12">
      <label for="gender">Patient Type</label>
      <select class="form-control" name="patienttype" id="gender">
        <option>Old</option>
        <option>New</option>

            </select>
            </div>


						<div class="form-group col-md-6">
						    <label>First Medicine Name</label>
						    <select name="medicine_id" class="form-control">
						      @foreach($medicines as $medicine)
				  <option value="{{ $medicine->id }}">{{ $medicine->medicine_name}}({{$medicine->price}})</option>
						        @endforeach
						         </select>
						          </div>


						<div class="form-group col-md-6">
						<label for="fmedicine_times">First Medicine Time</label>
						<input type="text" name="fmedicine_times"value="{{ $next_prescription->fmedicine_times }}"  class="form-control" placeholder="fmedicine_times" id="medicine_name">
						</div>



        <div class="form-group col-md-6">
      <label for="fmedicine_dose">First Medicine Dose</label>
      <input type="text" name="fmedicine_dose"value="{{ $next_prescription->fmedicine_dose }}" class="form-control" placeholder="First Medicine dose" id="medicine_name">
      </div>



          <div class="form-group col-md-6">
    <label for="text">First Medicine Instruction</label>
      <input type="text" name="fmedicine_instruction"value="{{ $next_prescription->fmedicine_instruction }}"  placeholder="First Medicine Instruction" class="form-control" id="phone">
                </div>





	<!-- <div class="form-group col-md-6">
<label>Second  Medicine Name</label>
<select name="smedicine_name" class="form-control">
	@foreach($medicines as $medicine)
<option value="{{ $medicine->id }}">{{ $medicine->medicine_name}}({{$medicine->price}})</option>
@endforeach
</select>
 </div>


		<div class="form-group col-md-6">
		<label for="smedicine_times">Second  Medicine Time</label>
	<input type="text" name="smedicine_times"value="{{ $next_prescription->smedicine_times }}"  class="form-control" placeholder="smedicine_times" id="medicine_name">
	 </div>



        <div class="form-group col-md-6">
    <label for="smedicine_dose">Second Medicine Dose</label>
    <input type="text" name="smedicine_dose" value="{{ $next_prescription->smedicine_dose }}" class="form-control" placeholder="Second Medicine Dose" id="medicine_name">
        </div>



  <div class="form-group col-md-6">
  <label for="text">Second Medicine Instruction</label>
  <input type="text" name="smedicine_instruction" value="{{ $next_prescription->smedicine_instruction }}"placeholder="Second Medicine Instruction" class="form-control" id="smedicine_instruction">
  </div>


	 <div class="form-group col-md-6">
		<label>Third  Medicine Name</label>
		<select name="tmedicine_name" class="form-control">
			@foreach($medicines as $medicine)
		<option value="{{ $medicine->id }}">{{ $medicine->medicine_name}}({{$medicine->price}})</option>
		@endforeach
		</select>
		 </div>



						<div class="form-group col-md-6">
						<label for="tmedicine_times">Third  Medicine Time</label>
						<input type="text" name="tmedicine_times"value="{{ $next_prescription->tmedicine_times }}" class="form-control" placeholder="tmedicine_times" id="medicine_name">
						</div>



            <div class="form-group col-md-6">
           <label for="tmedicine_dose">Third Medicine Dose</label>
      <input type="text" name="tmedicine_dose" value="{{ $next_prescription->tmedicine_dose }}" class="form-control" placeholder="Third Medicine Dose" id="medicine_name">
      </div> -->


<!-- 
      <div class="form-group col-md-6">
      <label for="text">Third Medicine Instruction</label>
      <input type="text" name="tmedicine_instruction" value="{{ $next_prescription->tmedicine_instruction }}"  placeholder="Third Medicine Instruction" class="form-control" id="smedicine_instruction">
      </div> -->


      <div class="form-group col-md-6">
            <label for="diagnosis">Diagnosis</label>
          <input type="text" name="diagnosis" value="{{ $next_prescription->diagnosis }}" placeholder="diagnosis" class="form-control" id="phone">
              </div>


          <div class="form-group col-md-6">
          <label for="visitingfee">Visiting Fees</label>
          <input type="text" name="visitingfee" value="{{ $next_prescription->visitingfee }}"placeholder="Visiting Fees" class="form-control" id="phone">
          </div>
      </li>

    <div class="form-group col-md-6">
      <label for="patientsnote">Patient Notes</label>
      <input type="text" name="patientsnote"value="{{ $next_prescription->patientsnote }}" placeholder="Patient Notes" class="form-control" id="phone">
          </div>
      </li>


									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->

							<!-- /Alerts-->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>


@endsection
