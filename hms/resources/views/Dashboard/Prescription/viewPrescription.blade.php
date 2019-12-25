@extends('Dashboard.Home.app')

@section('title')
View Prescription
@endsection

@section('content')

<!-- /Menu -->
        <!-- Breadcrumb -->
        <!-- Page Title -->
      		<div class="container-fluid">
          <div class="row breadcrumb-bar">
            <div class="col-md-6">
              <h3 class="block-title">ALL Prescription</h3>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">
                    <span class="ti-home"></span>
                  </a>
                </li>
                <li class="breadcrumb-item">ALL Prescription</li>
                <li class="breadcrumb-item active">All Prescription/li>
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
              <h3 class="widget-title">Prescription List</h3>
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
                                <th scope="col">Patient Id</th>
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
                                <th scope="col">Patient Type</th>
                                <th scope="col">First Medicine Name</th>
                                <th scope="col">First Medicine Time</th>
                                <th scope="col">First Medicine Dose</th>
                                <th scope="col">First Medicine Instruction</th>
                                <!-- <th scope="col">Second  Medicine Name</th>
                                <th scope="col">Second  Medicine Time</th>
                              <th scope="col">Second Medicine Dose</th>
                                <th scope="col">Second Medicine Instruction</th>
                                <th scope="col">Third  Medicine Name</th>
                                 <th scope="col">Third  Medicine Time</th>
                                <th scope="col">Third Medicine Dose</th>
                                <th scope="col">Third Medicine Instruction</th> -->
                                <th scope="col">Diagnosis</th>
                                <th scope="col">Visiting Fees</th>

                                <th scope="col">Patient Notes</th>

                                <th scope="col">action</th>

                              </tr>
                            </thead>
                            <tbody>

                              @foreach($prescriptions as $prescription)

                              <tr>
                                <th scope="row">{{ $prescription->id }}</th>
                                <td>{{ $prescription->token_number }}</td>
                                 <td>{{ $prescription->Patient_Name }}</td>
                                <td>{{ $prescription->Date_Of_Birth }}</td>
                                <td>{{ $prescription->Age}}</td>
                                <td>{{ $prescription->Phone}}</td>
                                <td>{{ $prescription->Email }}</td>
                                <td>{{ $prescription->gender }}</td>
                                <td>{{ $prescription->Address }}</td>
                                <td>{{ $prescription->relationBetweenDoctor->doctor_name }}</td>
                                <td>{{ $prescription->appointment_date }}</td>
                                <td>{{ $prescription->Problem}}</td>
                                <td>{{ $prescription->patienttype}}</td>
                            <td>{{ $prescription->relationBetweenMedicine->medicine_name }}</td>
                              <td>{{ $prescription->fmedicine_times }}</td>
                                <td>{{ $prescription->fmedicine_dose }}</td>
                                <td>{{ $prescription->fmedicine_instruction }}</td>
                          <!-- <td>{{ $prescription->relationBetweenMedicine->medicine_name }}</td>
                                <td>{{ $prescription->smedicine_times }}</td>
                                <td>{{ $prescription->smedicine_dose }}</td>
                                <td>{{ $prescription->smedicine_instruction}}</td>
                          <td>{{ $prescription->relationBetweenMedicine->medicine_name }}</td>
                                <td>{{ $prescription->tmedicine_times}}</td>
                                <td>{{ $prescription->tmedicine_dose }}</td>
                                <td>{{ $prescription->tmedicine_instruction }}</td> -->
                                <td>{{ $prescription->diagnosis }}</td>
                                <td>{{ $prescription->visitingfee}}</td>
                                <td>{{ $prescription->patientsnote}}</td>
                                <td>

	<a href="{{ url('allprescription') }}/{{ $prescription->id}}" class="btn btn-primary">Update</a>
	<a href="{{ url('createprescription/pdf') }}/{{ $prescription->id}}" class="btn btn-primary">create PDF</a>
  <a href="{{ url('/deleteprescription') }}/{{ $prescription->id }}" class="btn btn-primary">Delete</a>
                               </td>
                              </tr>
                          @endforeach
                            </tbody>
                            </table>
               {{$prescriptions->links()}}
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
