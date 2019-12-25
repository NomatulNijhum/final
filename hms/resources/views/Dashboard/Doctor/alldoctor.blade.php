
@extends('Dashboard.Home.app')

@section('title')
allDoctor
@endsection

@section('content')
<div class="container-fluid">
	<div class="row breadcrumb-bar">
		<div class="col-md-6">
			<h3 class="block-title">All Doctor</h3>
		</div>
		<div class="col-md-6">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">
						<span class="ti-home"></span>
					</a>
				</li>
				<li class="breadcrumb-item">All  Doctor</li>
				<li class="breadcrumb-item active">All Doctor</li>
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
			<h3 class="widget-title">Doctor List</h3>
			<div class="table-responsive mb-3">
				<table id="tableId" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="no-sort">


									<label class="custom-control-label" for="select-all"></label>
								</div>
							</th>
							<div class="container">
								<div class="row">
									<div class="col-md-6 offset-md-3">
								<table class="table" id="search">
										<thead>
											<tr>


																<th scope="col">Id</th>
                                <th scope="col">Doctor Name</th>
																 <th scope="col">Department Name</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Experience</th>
																<th scope="col">Age</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Doctor Details</th>
                                <th scope="col">Address</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                                  @foreach($doctors as $doctor)
                              <tr>
                                <th scope="row">{{ $doctor->id }}</th>
																<td>{{ $doctor->doctor_name}}</td>

						                      <td>{{ $doctor->relationBetweenDepartment->department_name }}</td>
									               	<td>{{ $doctor->date_of_birth }}</td>
																	<td>{{ $doctor->experience}}</td>
						                     	<td>{{ $doctor->age}}</td>

																	<td>{{ $doctor->phone }}</td>
																	<td>{{ $doctor->email }}</td>
																	<td>{{ $doctor->gender }}</td>
																	<td>{{ $doctor->doctor_details }}</td>
																	<td>{{ $doctor->address }}</td>
				<td><img width="50px" height="25px" src="{{ asset('uploads/picture') }}/{{ $doctor->picture }}"></td>
				<td>

			<a href="{{ url('/alldoctor') }}/{{ $doctor->id }}" class="btn btn-primary">Update</a>

		<a href="{{ url('/deletedoctor') }}/{{ $doctor->id }}" class="btn btn-danger">Delete</a>
					<a href="{{ url('create/pdf') }}/{{ $doctor->id }}" class="btn btn-primary">create PDF</a>
				                  	</td>
											     </tr>
                          @endforeach
                            </tbody>
                            </table>

                    {{$doctors->links()}}
                          </div>

                        </div>

                      </div>

								<!--Export links-->

															<!-- /Export links-->
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
