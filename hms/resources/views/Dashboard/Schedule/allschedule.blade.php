@extends('Dashboard.Home.app')

@section('title')
All Schedule
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container-fluid">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">All Schedule</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">All  Schedule</li>
								<li class="breadcrumb-item active">All Schedule</li>
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
							<h3 class="widget-title">Schedule List</h3>
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
																<th scope="col">Department</th>
                                <th scope="col">Available Days</th>

                                <th scope="col">Start Time</th>

                                <th scope="col">End Time</th>
																<th scope="col">End Time</th>



                              </tr>
                            </thead>
                            <tbody>

                              @foreach($schedules as $schedule)
                              <tr>
                                <th scope="row">{{ $schedule->id }}</th>
                                <td>{{ $schedule->relationBetweenDoctor->doctor_name }}</td>
																<td>{{ $schedule->relationBetweenDepartment->department_name }}</td>
																<td>{{ ($schedule->available_days)}}</td>
														 <td>{{ $schedule->available_times}}</td>
															<td>{{ $schedule->available_time}}</td>

																	<td>
	<a href="{{route('allschedule')}}/{{ $schedule->id }}" class="btn btn-primary">Update</a>
<a href="{{ url('/deleteschedule') }}/{{ $schedule->id }}" class="btn btn-danger">Delete</a>


</td>
   </tr>
                @endforeach
                            </tbody>
                            </table>
        {{$schedules->links()}}
                          </div>

                        </div>

                      </div>
								<!--Export links-->

					<!-- /Widget Item -->
				</div>
			</div>
@endsection
