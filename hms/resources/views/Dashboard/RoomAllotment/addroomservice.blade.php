@extends('Dashboard.Home.app')

@section('title')
RoomAllocation
@endsection

@section('content')



				<!-- Breadcrumb -->
				<!-- Page Title -->
		      <div class="container-fluid">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">RoomAllocation</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">RoomAllocation</li>
								<li class="breadcrumb-item active">Add New RoomAllocation</li>
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
							<h3 class="widget-title">New RoomAllocation</h3>
							<form id="newroomservice_create" action="{{route ('newroomservice_create')}}" method="post" enctype="multipart/form-data">
							@csrf

<!--
              <div class="form-group col-md-6">
              <label>Patient Id</label>
              <select name="appointment_id" class="form-control">
               @foreach($appointments as $appointment)
              <option value="{{ $appointment->id }}">{{$appointment->token_number}}</option>
                   @endforeach
                    </select>
                    </div> -->

										<div class="form-row">
									<div class="form-group col-md-6">
									<label for="token_number">Patient Id</label>
									<input type="text" name="token_number" value="{{ $single_roomservice->token_number }}" class="form-control" placeholder="Patient name" id="patient-name">
										</div>
			<div class="form-row">
			<div class="form-group col-md-6">
			<label for="patient-name">Patient Name</label>
		<input type="text" name="Patient_Name" value="{{ $single_roomservice->Patient_Name }}" class="form-control" placeholder="Patient name" id="patient-name">
		</div>
		<div class="form-group col-md-6">
			<label for="dob">Date Of Birth</label>
			<input type="date" name="Date_Of_Birth" value="{{ $single_roomservice->Date_Of_Birth }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
			</div>
		<div class="form-group col-md-6">
			<label for="age">Age</label>
			<input type="text" name="Age" value="{{ $single_roomservice->Age }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
			</div>
		<div class="form-group col-md-6">
			<label for="phone">Phone</label>
			<input type="text" name="Phone" value="{{ $single_roomservice->Phone }}" class="form-control" placeholder="Phone" id="Phone">
			</div>
		<div class="form-group col-md-6">
			<label for="email">Email</label>
			<input type="text" name="Email" value="{{ $single_roomservice->Email }}" class="form-control" placeholder="Email" id="Email">
			</div>
			<div class="form-group col-md-6">
				<label for="gender">Gender</label>
				<select class="form-control" name="gender" id="gender">
					<option class="bg-dark text-white"> {{ $single_roomservice->Gender }}</option>
					<option >Male</option>
					<option>Female</option>
					<option>Other</option>
				</select>
			</div>

		<div class="form-group col-md-12">
			<label for="exampleFormControlTextarea1">Address</label>
			<input type="text" name="Address" value="{{ $single_roomservice->Address }}" class="form-control" placeholder="Address" id="Address">
			</div>


			<div class="form-group col-md-6">
					<label>Doctor Name</label>
					 <select name="doctor_id" class="form-control">
							@foreach($doctors as $doctor)
						 <option value="{{ $doctor->id }}">{{ $doctor->doctor_name}}</option>
								@endforeach
							</select>
					 </div>



			<div class="form-group col-md-6">
			<label for="appointment_date">Appointment Date</label>
			<input type="date" name="appointment_date" value="{{ $single_roomservice->appointment_date }}" placeholder="appointment_date" class="form-control" id="appointment_date">
			</div>

      <div class="form-group col-md-6">
      <label for="problem">Problem</label>
      <input type="text" name="Problem" value="{{ $single_roomservice->problem }}" placeholder="problem" class="form-control" id="problem">
      </div>


      <div class="form-row">
      <div class="form-group col-md-6">
      <label for="room_number">Room Number</label>
      <input type="Integer" name="room_number"class="form-control" placeholder="room_number" id="room_number">
      </div>

      <div class="form-group col-md-6">
      <label>Room Type </label>
      <select name="roomtype_id" class="form-control">
      @foreach($roomtypes as $roomtype)
    <option value="{{ $roomtype->id }}">{{ $roomtype->room_name}}({{ $roomtype->room_price}})</option>
     @endforeach
  </select>
    </div>

           <div class="form-group col-md-6">
            <label for="allot_date">Allotment Date</label>
       <input type="date" name="allot_date"placeholder="allot_date" class="form-control" id="allot_date">
             </div>
           <div class="form-group col-md-6">
          <label for="discharge_date">Discharge Date</label>
     <input type="date" name="discharge_date"placeholder="Discharge Date" class="form-control" id="discharge-date">
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
