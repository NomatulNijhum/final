@extends('Dashboard.Home.app')

@section('title')
Add Schedule
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container-fluid ">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Add Schedule</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Schedules</li>
              <li class="breadcrumb-item active">Add Schedule</li>
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
            <h3 class="widget-title">Add Schedule</h3>

            <form id="schedulecreate" action="{{url ('schedule/create')}}" method="post" enctype="multipart/form-data">
              @csrf





                <div class="form-group col-md-6">
                    <label>Doctor Name</label>
                    <select name="doctor_id" class="form-control">
                        @foreach($doctors as $doctor)
                            <option value="{{$doctor->id }}">{{ $doctor->doctor_name}}</option>
                        @endforeach


                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label>Department</label>
                    <select name="department_id" class="form-control">
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->department_name}}</option>
                        @endforeach
                    </select>
                </div>



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
          <input type="time" name="available_times" placeholder="available_times" class="form-control" id="available_times">
            </div>

            <div class="form-group col-md-6">
            <label for="available_time">End Time</label>
          <input type="time" name="available_time" placeholder="available_time" class="form-control" id="available_time">
      </div>

        <div class="form-group col-md-12">
      <label for="picture">Picture</label>
      <input type="file" name="picture"class="form-control" id="picture">
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
