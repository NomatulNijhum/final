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
							<h3 class="block-title">Add Doctor</h3>


						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Doctors</li>
								<li class="breadcrumb-item active">Add Doctor</li>
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
							<h3 class="widget-title">Add Doctor</h3>

                <form id="doctorcreate" action="{{route ('doctor_create')}}" method="post" enctype="multipart/form-data">
                  @csrf


								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Doctor-name">Doctor Name</label>
										<input type="text" class="form-control" name="doctor_name" placeholder="Doctor name" id="Doctor-name">
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
	<label for="date_of_birth">Date Of Birth</label>
  <input type="date" name="date_of_birth" placeholder="Date of Birth"  class="form-control" id="date_of_birth">
                                    </div>



									<div class="form-group col-md-6">
										<label for="experience">Experience</label>
										<input type="text" name="experience"placeholder="Experience" class="form-control" id="experience">
									</div>
									<!-- <div class="form-group col-md-6">
										<label for="age">Age</label>
										<input type="text" name="age" placeholder="Age" class="form-control" id="age">
									</div> -->
									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text"  name="phone" placeholder="Phone" class="form-control" id="phone">
									</div>
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" name="email" placeholder="email" class="form-control" id="Email">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" name="gender" id="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="about-doctor">Doctor Details</label>
										<textarea placeholder="Doctor Details"name="doctor_details"  class="form-control" id="about-doctor" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="address">Address</label>
										<textarea placeholder="Address" name="address"class="form-control" id="address" rows="3"></textarea>
									</div>
									<div class="form-group col-md-12">
										<label for="picture">Picture</label>
										<input type="file" name="picture"class="form-control" id="picture">
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
