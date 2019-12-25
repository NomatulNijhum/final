@extends('Dashboard.Home.app')

@section('title')
ALL ROOM
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container-fluid mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">ALL ROOM</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">ALL RoomAllotment</li>
								<li class="breadcrumb-item active">ALL RoomAllotment</li>
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
							<h3 class="widget-title">ALL RoomAllotment List</h3>
							<div class="table-responsive mb-3">

              <div class="container">
                <div class="row">
                <table class="table" id="search">
                  <thead>
                    <tr>

              <th scope="col">Id</th>
              <th scope="col">Token Number </th>
              <th scope="col">Patient Name</th>
              <th scope="col">Date Of Birth</th>
              <th scope="col">Age</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
              <th scope="col">Gender</th>
              <th scope="col">Address</th>
              <th scope="col">Doctor Name</th>
                              <th scope="col">Appointment Date</th>

                                                <th scope="col">Problem</th>
                                                      <th scope="col">Room Number</th>
                                                      <th scope="col">Room Type</th>
                                                      <th scope="col">Room Price</th>
                                                      <th scope="col">Allotment Date</th>
                                                      <th scope="col">Discharge Date </th>
                                                      <th scope="col">Action</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>

                          @foreach($room_allotments as $room_allotment)
                          <tr>
                          <th scope="row">{{$room_allotment->id }}</th>
                       <td>{{ $room_allotment->token_number }}</td>
                          <td>{{ $room_allotment->Patient_Name }}</td>
                          <td>{{ $room_allotment->Date_Of_Birth }}</td>
                          <td>{{ $room_allotment->Age }}</td>
                          <td>{{ $room_allotment->Phone}}</td>
                          <td>{{ $room_allotment->Email }}</td>
                          <td>{{ $room_allotment->gender }}</td>
                          <td>{{ $room_allotment->Address }}</td>
                          <td>{{ $room_allotment->relationBetweenDoctor->doctor_name }}</td>
                          <td>{{ $room_allotment->appointment_date }}</td>
                            <td>{{ $room_allotment->problem }}</td>
                            <td>{{ $room_allotment->room_number }}</td>
                            <td>{{ $room_allotment->roomtype_id}}</td>
                            <td>{{ $room_allotment->allot_date }}</td>
                              <td>{{ $room_allotment->discharge_date }}</td>

                            <td>

                    <a href="{{ url('/roomallocation') }}/{{ $room_allotment->id }}" class="btn btn-primary">Update</a>
                    <a href="{{ url('/deleteroomallocation') }}/{{ $room_allotment->id }}" class="btn btn-danger">Delete</a>
                              </td>

                          </tr>
                      @endforeach
                            </tbody>
                            </table>
  {{$room_allotments->links()}}
                          </div>

                        </div>

                      </div>

								<!--Export links-->

															<!-- /Export links-->
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
