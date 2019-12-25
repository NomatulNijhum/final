@extends('Dashboard.Home.app')

@section('title')
all Investigation Report
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Investigation Report Report/h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Investigation Report</li>
								<li class="breadcrumb-item active">All Investigation Report/li>
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
							<h3 class="widget-title">Investigation ReportList</h3>
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


                                <th scope="col">#</th>
                                <th scope="col">Patient ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">File</th>
																<th scope="col">Action</th>


                              </tr>
                            </thead>
                            <tbody>

                              @foreach($investigations as $investigation)
                              <tr>
                                <th scope="row">{{ $investigation->id }}</th>
              				<td>{{ $investigation->relationBetweenAppointment->token_number}}</td>
                                <td>{{ $investigation->date}}</td>
                                <td>{{ $investigation->title }}</td>
                                <td>{{ $investigation->description}}</td>
                                	 <td>{{ $investigation->relationBetweenDoctor->doctor_name }}</td>
                                <td>{{ $investigation->file}}</td>


																 <td>


		<a href="{{ url('/allinvestigation') }}/{{ $investigation->id }}" class="btn btn-primary">Edit</a>
		<a href="{{ url('/deleteinvestigation') }}/{{ $investigation->id }}" class="btn btn-danger">Delete</a>
<a href="{{ url('createopration_pdf/pdf') }}/{{ $investigation->id }}" class="btn btn-primary">create PDF</a>
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

							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
