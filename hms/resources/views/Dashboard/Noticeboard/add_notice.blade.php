@extends('Dashboard.Home.app')

@section('title')
Add Notice
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">  Notice</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Notice</li>
              <li class="breadcrumb-item active">Add Notice</li>
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
                    <h3 class="widget-title">Add Notice</h3>

              <form id="Notice_create" action="{{route ('Notice_create')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group col-md-6">
                  <label for="title">Title</label>
                  <input type="text" name="title" placeholder="title" class="form-control" id="title">
                </div>
                <div class="form-group col-md-6">
                  <label for="description">Description</label>
                  <input type="text" name="description" placeholder="description" class="form-control" id="description">
                </div>
                <div class="form-group col-md-6">
                  <label for="start_date">Start Date</label>
                  <input type="date" name="start_date" placeholder="start_date" class="form-control" id="start_date">
                </div>
                <div class="form-group col-md-6">
                  <label for="end_date">End Date</label>
                  <input type="date" name="end_date" placeholder="end_date" class="form-control" id="end_date">
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
