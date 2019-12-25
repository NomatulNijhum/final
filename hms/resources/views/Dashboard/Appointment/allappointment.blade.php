@extends('Dashboard.Home.app')

@section('title')
all appointment
@endsection

@section('content')





													<!-- Breadcrumb -->
													<!-- Page Title -->
													<div class="container-fluid">
														<div class="row breadcrumb-bar">
															<div class="col-md-6">
																<h3 class="block-title">All Appointment</h3>
															</div>
															<div class="col-md-6">
																<ol class="breadcrumb">
																	<li class="breadcrumb-item">
																		<a href="index.html">
																			<span class="ti-home"></span>
																		</a>
																	</li>
																	<li class="breadcrumb-item">All  Appointment</li>
																	<li class="breadcrumb-item active">Appointment </li>
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
																<h3 class="widget-title">Appointment List</h3>
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
															<th scope="col">Patient Name</th>
														 <th scope="col">Date Of Birth</th>
															<th scope="col">Age</th>
															<th scope="col">Phone</th>
														 <th scope="col">Email</th>
														 <th scope="col">Gender</th>
														 <th scope="col">Address</th>
														 <th scope="col">Picture</th>
														 <th scope="col">Doctor Name</th>
                              <th scope="col">Appointment Date</th>
                              <th scope="col">Token Number </th>
                              <th scope="col">Problem</th>
															 <th scope="col">Status</th>

														  <th scope="col">Action</th>
														</tr>
                            </thead>
                            <tbody>

                                @foreach($appointments as $appointment)
                              <tr>
														<th scope="row">{{ $appointment->id }}</th>
														 <td>{{ $appointment->Patient_Name }}</td>
														 <td>{{ $appointment->Date_Of_Birth }}</td>
														 <td>{{ $appointment->Age }}</td>
														 <td>{{ $appointment->Phone}}</td>
														 <td>{{ $appointment->Email }}</td>
														 <td>{{ $appointment->Gender }}</td>
														 <td>{{ $appointment->Address }}</td>

						<td><img width="50px" height="25px" src="{{ asset('uploads/picture') }}/{{ $appointment->picture }}"></td>
											<td>{{ $appointment->relationBetweenDoctor->doctor_name }}</td>
															<td>{{ $appointment->appointment_date }}</td>
															<td>{{ $appointment->token_number}}</td>
														  <td>{{ $appointment->problem }}</td>
															<td>{{ $appointment->status }}</td>
																<td>

									 @if(Auth::user()->role_id==3|| Auth::user()->role_id == 1)
			<a href="{{route('allappointment')}}/{{ $appointment->id }}" class="btn btn-primary">Edit</a>
	<a href="{{ url('/deleteappointment') }}/{{ $appointment->id }}" class="btn btn-primary">Delete</a>
								@endif


				@if(Auth::user()->role_id==2|| Auth::user()->role_id == 1)

	<a href="{{ url('/SendPrescription') }}/{{ $appointment->id }}" class="btn btn-primary">SendPrescription</a>
														<!-- <a href="{{ url('/viewPrescription') }}/{{ $appointment->id }}" class="btn btn-primary">viewPrescription</a> -->
		@endif

	@if(Auth::user() &&  Auth::user()->role_id == 3|| Auth::user()->role_id == 1)
	<a href="{{ url('/addroomservice') }}/{{ $appointment->id }}" class="btn btn-primary">Addroomservice</a>
    @endif

	@if(Auth::user()&& Auth::user()->role_id==4|| Auth::user()->role_id == 1)
	<a href="{{ url('/add_case_study') }}/{{ $appointment->id }}" class="btn btn-primary">AddCaseStudy</a>
	@endif

	@if(Auth::user() &&  Auth::user()->role_id == 6|| Auth::user()->role_id == 1 )
<a href="{{ url('/price') }}/{{ $appointment->id }}" class="btn btn-primary">Payment</a>
 @endif
 		@if(Auth::user() && Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
	 <a href="{{ url('/bill') }}/{{ $appointment->id }}" class="btn btn-primary">Bill</a>
     @endif


					 										 </td>
                              </tr>
                          @endforeach
                            </tbody>
                            </table>
                {{$appointments->links()}}
                          </div>

                        </div>

                      </div>
								<!--Export links-->

								<!-- /Export links-->

							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
