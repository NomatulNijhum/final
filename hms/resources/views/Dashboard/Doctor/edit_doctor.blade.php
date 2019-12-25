@extends('Dashboard.Home.app')

@section('title')
doctor
@endsection

@section('content')
<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
					<div class="ccontainer-fluid mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Edit  Doctor</h3>


						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Doctors</li>
								<li class="breadcrumb-item active">Edit Doctor</li>
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
							<h3 class="widget-title">Edit Doctor</h3>


									<form id="doctor_update" action="{{route ('doctor_update')}}" method="post" enctype="multipart/form-data">
									                                        @csrf
								 <input type="hidden" name="docto_id" value="{{ $single_doctor->id }}">

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Doctor-name">Doctor Name</label>
										<input type="text" class="form-control" name="doctor_name"value="{{ $single_doctor->doctor_name}}"  placeholder="Doctor name" id="Doctor-name">
									</div>


									<div class="form-group col-md-6">
											<label>Department</label>
											<select name="department_id" class="form-control">
													@foreach($departments as $department)
															<option value="{{ $department->id }}">{{ $department->department_name}}</option>
													@endforeach


											</select>
									</div>
	                <div class="form-group col-md-6">
                  <label for="dob">Date Of Birth</label>
                  <input type="date" name="date_of_birth" value="{{ $single_doctor->date_of_birth }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
                  </div>



									<div class="form-group col-md-6">
										<label for="experience">Experience</label>
										<input type="text" name="experience"value="{{ $single_doctor->experience}}"  placeholder="Experience" class="form-control" id="experience">
									</div>
									<div class="form-group col-md-6">
										<label for="age">Age</label>
										<input type="text" name="age"value="{{ $single_doctor->age}}"   placeholder="Age" class="form-control" id="age">
									</div>
									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text"  name="phone" value="{{ $single_doctor->phone}}"  placeholder="Phone" class="form-control" id="phone">
									</div>
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" name="email" value="{{ $single_doctor->email}}"  placeholder="email" class="form-control" id="Email">
									</div>
									<!-- <div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" value="{{ $single_doctor->gender}}"  name="gender" id="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select>
									</div> -->
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<input type="gender" name="gender" value="{{ $single_doctor->gender}}"  placeholder="gender" class="form-control" id="Email">
									</div>
									<div class="form-group col-md-6">
										<label for="doctor_details">Doctor Details</label>
										<input type="doctor_details" name="doctor_details" value="{{ $single_doctor->doctor_details}}"  placeholder="doctor_details" class="form-control" id="Email">
									</div>
									<div class="form-group col-md-6">
										<label for="address">Address</label>
										<input type="address" name="address" value="{{ $single_doctor->address}}"  placeholder="address" class="form-control" id="Email">
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
