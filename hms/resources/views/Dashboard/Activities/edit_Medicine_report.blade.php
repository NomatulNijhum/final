
@extends('Dashboard.Home.app')

@section('title')
Update Medicine
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">  Medicine</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item"> Medicine</li>
              <li class="breadcrumb-item active">Update Medicine</li>
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
            <h3 class="widget-title">Update Medicine</h3>
            <form id="medicine_update" action="{{route ('medicine_update')}}" method="post" enctype="multipart/form-data">
              @csrf

      <input type="hidden" name="medic_id" value="{{ $single_Medicine->id }}">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="medicine_name">Medicine Name</label>
                  <input type="text" name="medicine_name" value="{{ $single_Medicine->medicine_name }}"class="form-control" placeholder="medicine_name" id="medicine_name">
                </div>

                <div class="form-group col-md-6">
                  <label for="category_name">Category Name</label>
                  <select class="form-control" value="{{ $single_Medicine->category_name }}"name="category_name" id="category_name">
                    <option>Napa</option>
                    <option>Aspirine</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="description">Description</label>
                  <input type="text" name="description" value="{{ $single_Medicine->description }}"placeholder="description" class="form-control" id="description">
                </div>
                <div class="form-group col-md-6">
                  <label for="price">Price</label>
                  <input type="text" name="price" value="{{ $single_Medicine->price }}"placeholder="price" class="form-control" id="price">
                </div>
                <div class="form-group col-md-6">
                  <label for="manufactured_by">Manufactured By</label>
                  <input type="text" name="manufactured_by"value="{{ $single_Medicine->manufactured_by }}" placeholder="manufactured_by" class="form-control" id="manufactured_by">
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
