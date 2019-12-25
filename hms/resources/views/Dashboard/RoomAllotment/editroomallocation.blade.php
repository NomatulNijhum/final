@extends('Dashboard.Home.app')

@section('title')
Edit  RoomAllocation
@endsection

@section('content')

<!-- /Page Title -->

<!-- /Breadcrumb -->

<!-- /Menu -->.
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Add Room Allotment</h3>
          </div>

  <form id="roomallocation_update" action="{{route ('roomallocation_update')}}" method="post" enctype="multipart/form-data">
      @csrf
  <input type="hidden" name="room_allot_id" value="{{ $single_roomallocation->id }}">

      				<div class="form-row">
      			<div class="form-group col-md-6">
      <label for="token_number">Patient Id</label>
  	<input type="text" name="token_number" value="{{ $single_roomallocation->token_number }}" class="form-control" placeholder="Patient name" id="patient-name">
  	</div>
      			<div class="form-row">
      			<div class="form-group col-md-6">
      			<label for="patient-name">Patient Name</label>
      		<input type="text" name="Patient_Name" value="{{ $single_roomallocation->Patient_Name }}" class="form-control" placeholder="Patient name" id="patient-name">
      		</div>
      		<div class="form-group col-md-6">
      			<label for="dob">Date Of Birth</label>
      			<input type="date" name="Date_Of_Birth" value="{{ $single_roomallocation->Date_Of_Birth }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
      			</div>
      		<div class="form-group col-md-6">
      			<label for="age">Age</label>
      			<input type="text" name="Age" value="{{ $single_roomallocation->Age }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
      			</div>
      		<div class="form-group col-md-6">
      			<label for="phone">Phone</label>
      			<input type="text" name="Phone" value="{{ $single_roomallocation->Phone }}" class="form-control" placeholder="Phone" id="Phone">
      			</div>
      		<div class="form-group col-md-6">
      			<label for="email">Email</label>
      			<input type="text" name="Email" value="{{ $single_roomallocation->Email }}" class="form-control" placeholder="Email" id="Email">
      			</div>


              <div class="form-group col-md-6">
        				<label for="gender">Gender</label>
        				<select class="form-control" name="gender" id="gender">
        					<option class="bg-dark text-white"> {{ $single_roomallocation->gender }}</option>
        					<option >Male</option>
        					<option>Female</option>
        					<option>Other</option>
        				</select>
        			</div>

      		<div class="form-group col-md-12">
      			<label for="exampleFormControlTextarea1">Address</label>
      			<input type="text" name="Address" value="{{ $single_roomallocation->Address }}" class="form-control" placeholder="Address" id="Address">
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
      			<input type="date" name="appointment_date" value="{{ $single_roomallocation->appointment_date }}" placeholder="appointment_date" class="form-control" id="appointment_date">
      			</div>

            <div class="form-group col-md-6">
            <label for="problem">Problem</label>
            <input type="text" name="Problem" value="{{ $single_roomallocation->Problem }}" placeholder="problem" class="form-control" id="problem">
            </div>


            <div class="form-row">
            <div class="form-group col-md-6">
            <label for="room_number">Room Number</label>
            <input type="Integer" name="room_number" value="{{ $single_roomallocation->room_number }}"class="form-control" placeholder="room_number" id="room_number">
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
             <input type="date" name="allot_date" value="{{ $single_roomallocation->allot_date }}"placeholder="allot_date" class="form-control" id="allot_date">
                   </div>
                 <div class="form-group col-md-6">
                <label for="discharge_date">Discharge Date</label>
           <input type="date" name="discharge_date" value="{{ $single_roomallocation->discharge_date }}"placeholder="Discharge Date" class="form-control" id="discharge-date">
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
