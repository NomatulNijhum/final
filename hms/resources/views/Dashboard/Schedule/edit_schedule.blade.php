@extends('Dashboard.Home.app')

@section('title')
Update  Schedule
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container-fluid">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Update Schedule</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Schedules</li>
              <li class="breadcrumb-item active">Update Schedule</li>
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
            <h3 class="widget-title">Update Schedule</h3>

<form id="schedule_update" action="{{route ('schedule_update')}}" method="post" enctype="multipart/form-data">
              @csrf

  <input type="hidden" name="schedul_id" value="{{ $single_schedule->id }}">



      <div class="form-group col-md-6">
        <label>Doctor Name</label>
        <select name="doctor_id" class="form-control">
                      @foreach($doctors as $doctor)
                          <option value="{{$doctor->id }}">{{ $doctor->doctor_name}}</option>
                      @endforeach
            </select>
              </div>


                
          <!-- <div class="form-group col-md-6">
          <label for="available_days">Available Days</label>
    <select class="form-control select2" name="available_days" id="available_days" multiple="multiple">

            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>

             </select>
              </div> -->

          <div class="form-group col-md-6">
    <label for="available_days">Available Days</label>
  <select class="form-control select2" name="available_days" id="available_days" >
    <option value="Saturday,Sunday">Saturday,Sunday</option>
  <option value="Monday,Tuesday">Monday,Tuesday</option>
 <option value="Wednesday,Thursday">Wednesday,Thursday</option>
 <option value="Friday,Saturday">Friday,Saturday</option>
 </select>
  </div>


      <div class="form-group col-md-6">
      <label for="available_times">Start Time</label>
  <input type="time" name="available_times" value="{{ $single_schedule->available_times}}"placeholder="available_times" class="form-control" id="available_times">
    </div>
  <div class="form-group col-md-6">
  <label for="available_time">End Time</label>
  <input type="time" name="available_time"value="{{ $single_schedule->available_time}}" placeholder="available_time" class="form-control" id="available_time">
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
