

    @extends('Dashboard.Home.app')

    @section('title')
     All Death Report
    @endsection

    @section('content')

    <!-- /Menu -->
    				<!-- Breadcrumb -->
    				<!-- Page Title -->
    				<div class="container mt-0">
    					<div class="row breadcrumb-bar">
    						<div class="col-md-6">
    							<h3 class="block-title"> Death Report</h3>
    						</div>
    						<div class="col-md-6">
    							<ol class="breadcrumb">
    								<li class="breadcrumb-item">
    									<a href="index.html">
    										<span class="ti-home"></span>
    									</a>
    								</li>
    								<li class="breadcrumb-item"> Death Report</li>
    								<li class="breadcrumb-item active">All  Death Report</li>
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
    							<h3 class="widget-title"> Death ReportList</h3>
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

                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($deathreports as $deathreport)
                                  <tr>
                                    <tr>
                                      <th scope="row">{{ $deathreport->id }}</th>
                                <td>{{ $deathreport->relationBetweenAppointment->token_number}}</td>
                                      <td>{{ $deathreport->date}}</td>
                                      <td>{{ $deathreport->title }}</td>
                                      <td>{{ $deathreport->description}}</td>
                          	 <td>{{ $deathreport->relationBetweenDoctor->doctor_name }}</td>

                              <td>


      <a href="{{ url('/allDeathreports') }}/{{ $deathreport->id }}" class="btn btn-primary">Edit</a>
      <a href="{{ url('/deletedeathreport') }}/{{ $deathreport->id }}" class="btn btn-danger">Delete</a>

	<a href="{{ url('createdeath_pdf/pdf') }}/{{ $deathreport->id }}" class="btn btn-primary">create PDF</a>

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


    							</div>
    						</div>
    					</div>
    					<!-- /Widget Item -->
    				</div>
    			</div>
    @endsection
