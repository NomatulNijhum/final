@extends('Dashboard.Home.app')

@section('title')
Add RoomAllocation
@endsection

@section('content')



<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0"style="padding:0px">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Add Room Allotment</h3>
          </div>

          @if (session('success'))
                       <div class="alert alert-success">
                           {{ session('success') }}
                       </div>
                       @endif

                       @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div><br />
                       @endif

          <form id="roomcreate" action="{{route ('room_create')}}" method="post" enctype="multipart/form-data">
            @csrf

          <div class="col-md-6"style="padding:0px">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Room Allotments</li>
              <li class="breadcrumb-item active">Add Room Allotment</li>
            </ol>
          </div>
        </div>
      </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container"style="padding:0px">

      <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
          <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Add Room Allotment</h3>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="room_number">Room Number</label>
                  <input type="text" name="room_number"class="form-control" placeholder="room_number" id="room_number">
                </div>


              <div class="form-group col-md-6">
              <label>Room Type </label>
        <select name="roomtype_id" class="form-control">
       @foreach($roomtypes as $roomtype)
    <option value="{{ $roomtype->id }}">{{ $roomtype->room_name}}</option>
       @endforeach
        </select>
          </div>



                <div class="form-group col-md-6">
                <label>Patient Id</label>
                  <select name="appointment_id" class="form-control">
                 @foreach($appointments as $appointment)
          <option value="{{ $appointment->id }}">{{ $appointment->token_number}}</option>
                 @endforeach
                      </select>
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
         <label for="allot_date">Allotment Date</label>
    <input type="date" name="allot_date"placeholder="allot_date" class="form-control" id="allot_date">
          </div>
        <div class="form-group col-md-6">
       <label for="discharge_date">Discharge Date</label>
  <input type="date" name="discharge_date"placeholder="Discharge Date" class="form-control" id="discharge-date">
     </div>


                <div class="form-check col-md-12 mb-2">
                  <div class="text-left">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="ex-check-2">
                      <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6 mb-3">
                  <button type="submit" class="btn btn-primary btn-lg">Allot Room</button>
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
    <!-- /Main Content -->





@endsection
