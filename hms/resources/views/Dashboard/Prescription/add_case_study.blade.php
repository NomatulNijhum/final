@extends('Dashboard.Home.app')

@section('title')
Add Case Study
@endsection

@section('content')


<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
			<div class="ccontainer-fluid mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Add Case Study</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Add Case Study</li>
              <li class="breadcrumb-item active"> Case Study</li>
            </ol>
          </div>
        </div>
      </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
  			<div class="ccontainer-fluid mt-0">

      <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
          <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Add  Case Study</h3>
            <form id="add_case_study_create" action="{{route ('add_case_study_create')}}" method="post" enctype="multipart/form-data">
              @csrf

                <!-- <div class="form-group col-md-6">
                <label>Patient Id</label>
                  <select name="appointment_id" class="form-control">
                 @foreach($appointments as $appointment)
            <option value="{{ $appointment->id }}">{{ $appointment->token_number}}</option>
                 @endforeach
                      </select>
                      </div> -->
                      <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="token_number">Patient Id</label>
                    <input type="text" name="token_number" value="{{ $single_casestudy->token_number }}" class="form-control" placeholder="Patient name" id="patient-name">
                      </div>

                <div class="form-group col-md-6">
                  <label for="dob">Food Allergies</label>
                  <input type="text" name="food_allergies" placeholder="food_allergies" class="form-control" id="food_allergies">
                </div>
                <div class="form-group col-md-6">
                  <label for="tendency_bleed">Tendency Bleed</label>
                  <input type="text" name="tendency_bleed" placeholder="tendency_bleed" class="form-control" id="tendency_bleed">
                </div>
                <div class="form-group col-md-6">
                  <label for="heart_disease">Heart Disease</label>
                  <input type="text" name="heart_disease" placeholder="heart_disease" class="form-control" id="heart_disease">
                </div>
                <div class="form-group col-md-6">
                  <label for="blood_pressure">Blood Pressure</label>
                  <input type="blood_pressure" name="blood_pressure" placeholder="blood_pressure" class="form-control" id="blood_pressure">
                </div>
                <div class="form-group col-md-6">
                  <label for="diabetic">Diabetic</label>
                  <input type="text" name="diabetic" placeholder="diabetic" class="form-control" id="diabetic">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Surgery</label>
                  <input type="text" name="surgery" placeholder="surgery" class="form-control" id="surgery">
                </div>
                <div class="form-group col-md-12">
                  <label for="fitext">Accident</label>
                  <input type="text" name="accident" class="form-control" id="accident">
                </div>


                <div class="form-group col-md-12">
                  <label for="family_medical_history">Family Medical History</label>
                  <input type="text" name="family_medical_history" class="form-control" id="family_medical_history">
                </div>

                <div class="form-group col-md-12">
                  <label for="current_medication">Current Medication</label>
                  <input type="text" name="current_medication" class="form-control" id="current_medication">
                </div>

                <div class="form-group col-md-12">
                  <label for="female_pregnancy">Female Pregnancy</label>
                  <input type="text" name="female_pregnancy" class="form-control" id="female_pregnancy">
                </div>





            <div class="form-group col-md-12">
            <label for="text">Breast Feeding</label>
            <input type="text" name="breast_feeding" class="form-control" id="text">
              </div>



              <div class="form-group col-md-12">
                <label for="text">Others</label>
                <input type="text" name="others" class="form-control" id="others">
              </div>


          <div class="form-group col-md-12">
          <label for="text">Health Insurance</label>
      <input type="text" name="health_insurance" class="form-control" id="text">
          </div>


        <div class="form-group col-md-12">
        <label for="text">Low Income</label>
        <input type="text" name="low_income" class="form-control" id="text">
        </div>

                <div class="form-group col-md-12">
                <label for="text">Reference</label>
                <input type="text" name="reference" class="form-control" id="text">
                </div>


                <div class="form-group col-md-6 mb-3">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>
            <!-- Alerts-->

          </div>
        </div>
        <!-- /Widget Item -->
      </div>
    </div>

@endsection
