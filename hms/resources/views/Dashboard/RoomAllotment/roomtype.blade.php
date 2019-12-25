@extends('Dashboard.Home.app')

@section('title')
Add RoomType
@endsection

@section('content')


<!-- Page Title -->
<div class="container-fluid">
  <div class="row breadcrumb-bar">
    <div class="col-md-6">
      <h3 class="block-title"> RoomType </h3>
    </div>
    <div class="col-md-6">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">
            <span class="ti-home"></span>
          </a>
        </li>
        <li class="breadcrumb-item">Add RoomType </li>
        <li class="breadcrumb-item active">Add RoomType </li>
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
      <h3 class="widget-title">RoomType </h3>

            <form id="RoomType_create" action="{{route ('RoomType_create')}}" method="post" enctype="multipart/form-data">
              @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="room_name">Room Type</label>
            <input type="text" name="room_name" class="form-control" placeholder="room_name" id="room_name">
          </div>


          <div class="form-group col-md-6">
            <label for="description">Price</label>
            <input type="text" name="room_price" placeholder="room_price" class="form-control" id="room_price">
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
