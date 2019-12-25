


@extends('Dashboard.Home.app')


@section('title')
Add Role
@endsection

@section('content')




<div class="ccontainer-fluid mt-0">
  <div class="row breadcrumb-bar">
    <div class="col-md-6">
      <h3 class="block-title">Add Role</h3>
    </div>
    <div class="col-md-6">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">
            <span class="ti-home"></span>
          </a>
        </li>
        <li class="breadcrumb-item">Add Role</li>
        <li class="breadcrumb-item active">Add Role</li>
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

<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('role_create')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role Name</label>
                        <input type="text" class="form-control"  placeholder="Role Name" name="role_Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
