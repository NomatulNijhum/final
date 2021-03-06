@extends('Dashboard.Home.app')

@section('title')
Edit Operation Report
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title"> Edit Operation Report</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Operation Report</li>
              <li class="breadcrumb-item active">Edit Operation Report</li>
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
            <h3 class="widget-title">Edit Operation  Report</h3>
            <form id="Operationreport_update" action="{{route ('Operationreport_update')}}" method="post" enctype="multipart/form-data">
              @csrf
        <input type="hidden" name="opa_id" value="{{ $single_operationreport->id }}">

              <div class="form-group col-md-6">
              <label>Patient Id</label>
                <select name="appointment_id" class="form-control">
               @foreach($appointments as $appointment)
          <option value="{{ $appointment->id }}">{{ $appointment->token_number}}</option>
               @endforeach
                    </select>
                    </div>
                <div class="form-group col-md-6">
                  <label for="dob">Date </label>
                  <input type="date" name="date" value="{{ $single_operationreport->date }}" placeholder="date" class="form-control" id="dob">
                </div>
                <div class="form-group col-md-6">
                  <label for="age">Title</label>
                  <input type="text" name="title"value="{{ $single_operationreport->title }}"  placeholder="title" class="form-control" id="title">
                </div>
                <div class="form-group col-md-6">
                  <label for="description">Description</label>
                  <input type="text" name="description" value="{{ $single_operationreport->description }}" placeholder="description" class="form-control" id="description">
                </div>
                <div class="form-group col-md-6">
                 <label>Doctor Name</label>
                  <select name="doctor_id" class="form-control">
                       @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->doctor_name}}</option>
                             @endforeach
                     </select>
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
