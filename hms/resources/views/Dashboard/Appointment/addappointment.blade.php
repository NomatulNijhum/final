@extends('Dashboard.Home.app')


@section('title')
Add Appointment
@endsection

@section('content')


				<div class="ccontainer-fluid mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Add Appointment</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Appointments</li>
								<li class="breadcrumb-item active">Add Appointment</li>
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
							<h3 class="widget-title">Add Appointment</h3>
              <form id="appointmentcreate" action="{{route ('appointment_create')}}" method="post" enctype="multipart/form-data">
                @csrf


								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient-name">Patient Name</label>
										<input type="text" name="Patient_Name" class="form-control" placeholder="Patient name" id="patient-name">
									</div>

									<div class="form-group col-md-6">
										<label for="dob">Date Of Birth</label>
										<input type="date" name="Date_Of_Birth" placeholder="Date of Birth" class="form-control" id="dob">
									</div>

									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text" name="Phone" placeholder="Phone" class="form-control" id="phone">
									</div>
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" name="Email" placeholder="email" class="form-control" id="Email">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" name="Gender" id="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group col-md-12">
										<label for="exampleFormControlTextarea1">Address</label>
										<input type="text" name="Address" placeholder="address" class="form-control" id="Email">
									</div>

									<div class="form-group col-md-12">
									<label for="file">Picture</label>
									<input type="file" name="picture" class="form-control" id="file">
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
	     <input type="date" name="appointment_date" placeholder="appointment_date" class="form-control" id="appointment_date">
		   	</div>


			<div class="form-group col-md-12">
				<label for="problem">Problem</label>
			<textarea placeholder="Problem" name="problem" class="form-control" id="problem" rows="3"></textarea>
									</div>

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
