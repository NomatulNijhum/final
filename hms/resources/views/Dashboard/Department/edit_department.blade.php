@extends('Dashboard.Home.app')

@section('title')
update Department
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container-fluid mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">update Department </h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Department </li>
              <li class="breadcrumb-item active">update Department </li>
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
            <h3 class="widget-title">update  Department </h3>


<form id="Department_update" action="{{route ('Department_update')}}" method="post" enctype="multipart/form-data">
                                        @csrf
  <input type="hidden" name="departmen_id" value="{{ $single_department->id }}">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="department_name">Department Name</label>
                  <input type="text" name="department_name"value="{{ $single_department->department_name}}" class="form-control" placeholder="department_name" id="department_name">



                </div>
                <div class="form-group col-md-6">
                  <label for="description">Description</label>
                  <input type="text" name="description" value="{{ $single_department->description}}"placeholder="description" class="form-control" id="description">
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
