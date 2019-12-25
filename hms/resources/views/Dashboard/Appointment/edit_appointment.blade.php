@extends('Dashboard.Home.app')

@section('title')
Edit Appointment
@endsection

@section('content')
<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Edit Appointment</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Appointments</li>
								<li class="breadcrumb-item active">Edit Appointment</li>
							</ol>
						</div>
					</div>
				</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Edit Appointment</h3>
    <form id="appointmentcreate" action="{{route ('appointment_update')}}" method="post" enctype="multipart/form-data">
                @csrf


<input type="hidden" name="appointmen_id" value="{{ $single_appointment->id }}">
     	<div class="">
			<div class="form-group col-md-6">
			<label for="patient-name">Patient Name</label>
			<br>
			<p>{{ $single_appointment->Patient_Name }}</p>
		</div>

						<div class="">
						<div class="form-group col-md-6">
						<label for="patient-name">Date Of Birth</label>
						<br>
						<p>{{$single_appointment->Date_Of_Birth}}</p>
					   </div>

					<div class="">
					<div class="form-group col-md-6">
					<label for="patient-name">Age</label>
					<br>
					<p>{{$single_appointment->Age}}</p>
				</div>

				<div class="">
				<div class="form-group col-md-6">
				<label for="patient-name">Phone</label>
				<br>
				<p>{{$single_appointment->Phone}}</p>
				</div>

				<div class="">
				<div class="form-group col-md-6">
				<label for="patient-name">Email</label>
				<br>
				<p>{{$single_appointment->Email}}</p>
				</div>

				<div class="">
				<div class="form-group col-md-6">
				<label for="patient-name">Gender</label>
				<br>
				<p>{{$single_appointment->Gender}}</p>
				</div>


				<div class="">
				<div class="form-group col-md-6">
				<label for="patient-name">Address</label>
				<br>
				<p>{{$single_appointment->Address}}</p>
				</div>

				<div class="">
				<div class="form-group col-md-6">
				<label for="patient-name">Doctor Name</label>
				<br>
				<p>{{$single_appointment->doctor_name}}</p>
				</div>


								 <div class="form-group col-md-6">
									<label>Doctor Name</label>
									 <select name="doctor_id" class="form-control">
									 			@foreach($doctors as $doctor)
									 	 <option value="{{ $doctor->id }}">{{ $doctor->doctor_name}}</option>
									 						@endforeach
									 		</select>


<div class="">
<div class="form-group col-md-6">
<label for="patient-name">Appointment Date</label>
<br>
<p>{{$single_appointment->appointment_date}}</p>
</div>


<div class="">
<div class="form-group col-md-6">
<label for="patient-name">Problem</label>
<br>
<p>{{$single_appointment->problem}}</p>
</div>



<div class="form-group col-md-6">
<label for="statusstatus">Status</label>
<select class="form-control select2" name="status" id="status" >
		<option value="Accepted">Accepted</option>
		<option value="Regected">Regected</option>
</select>
</div>

			<!-- <div class="form-group col-md-6">
				<label for="status">Status</label>
				<select class="form-control" name="status" id="status">

			<option value="Accepted">Accepted</option>
			 <option value="Regected">Regected</option>

				</select>
			</div> -->
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
