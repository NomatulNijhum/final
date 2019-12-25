@extends('Dashboard.Home.app')

@section('title')
all Operation Report
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Operation Report/h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Operation Report</li>
								<li class="breadcrumb-item active">All Operation Report/li>
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
							<h3 class="widget-title">Operation ReportList</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6 offset-md-3">
                            <table class="table">
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

                              @foreach($operationreports as $operationreport)
                              <tr>
                                <th scope="row">{{ $operationreport->id }}</th>
                          				<td>{{ $operationreport->relationBetweenAppointment->token_number}}</td>
                                <td>{{ $operationreport->date}}</td>
                                <td>{{ $operationreport->title }}</td>
                                <td>{{ $operationreport->description}}</td>
                	 <td>{{ $operationreport->relationBetweenDoctor->doctor_name }}</td>


																<td>


						<a href="{{ url('/alloperationreport') }}/{{ $operationreport->id }}" class="btn btn-primary">Edit</a>
						<a href="{{ url('/deleteoperationreport') }}/{{ $operationreport->id }}" class="btn btn-danger">Delete</a>
             <a href="{{ url('createopration_pdf/pdf') }}/{{ $operationreport->id }}" class="btn btn-primary">create PDF</a>

															 </td>

															</tr>
                              </tr>


                          @endforeach
                            </tbody>
                            </table>

                          </div>

                        </div>

                      </div>
								<!--Export links-->

										</li>
									</ul>
								</nav>

							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
