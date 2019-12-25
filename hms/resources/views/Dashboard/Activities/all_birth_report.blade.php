@extends('Dashboard.Home.app')

@section('title')
allbirthreport
@endsection

@section('content')
<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container-fluid mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Birthreport</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Birthreport</li>
								<li class="breadcrumb-item active">All Birthreport</li>
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
							<h3 class="widget-title">Birthreport List</h3>
							<div class="table-responsive mb-3">

                      <div class="container">
                        <div class="row">
                            <table class="table" id="search">
                            <thead>
                              <tr>


																<th scope="col">Id</th>
																<th scope="col">Patient ID</th>
																<th scope="col">Date</th>
																<th scope="col">Title</th>
																<th scope="col">Description</th>
																<th scope="col">Doctor Name</th>
																<th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

															@foreach($birthreports as $birthreport)
                              <tr>
                                <th scope="row">{{ $birthreport->id }}</th>
														<td>{{ $birthreport->relationBetweenAppointment->token_number}}</td>

																<td>{{ $birthreport->date}}</td>

                                <td>{{ $birthreport->title }}</td>
                                <td>{{ $birthreport->description}}</td>
                          	 <td>{{ $birthreport->relationBetweenDoctor->doctor_name }}</td>
																<td>


										<a href="{{ url('/allBirthreport') }}/{{ $birthreport->id }}" class="btn btn-primary">Update</a>
									<a href="{{ url('/deletebirthreport') }}/{{ $birthreport->id }}" class="btn btn-danger">Delete</a>
	<a href="{{ url('createbirth_pdf/pdf') }}/{{ $birthreport->id }}" class="btn btn-primary">create PDF</a>

															 </td>

                              </tr>


                          @endforeach
                            </tbody>
                            </table>

                          </div>

                        </div>

                      </div>

								<!--Export links-->

															<!-- /Export links-->
					<!-- /Widget Item -->
				</div>
			</div>

@endsection
