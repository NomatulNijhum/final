


@extends('Dashboard.Home.app')


@section('title')
ALL Role
@endsection

@section('content')

<div class="ccontainer-fluid mt-0">
  <div class="row breadcrumb-bar">
    <div class="col-md-6">
      <h3 class="block-title">ALL Role</h3>
    </div>
    <div class="col-md-6">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">
            <span class="ti-home"></span>
          </a>
        </li>
        <li class="breadcrumb-item">ALL Role</li>
        <li class="breadcrumb-item active">ALL Role</li>
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
      <h3 class="widget-title">ALL Role</h3>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>


        </tr>
      </thead>
      <tbody>

        @foreach($roles  as $role)
        <tr>
          <th scope="row">{{ $role->id }}</th>
          <td>{{ $role->role_name }}</td>




        <td>

<a href= "{{route('allrole')}}/{{ $role->id  }}"class="btn btn-primary">Update </a>
<a href="url('/deleteappointment') }}>/{{ $role->id }}" class="btn btn-danger">Delete</a>
</td>
  </tr>
        @endforeach




      </tbody>
      </table>

    </div>

  </div>

</div>
@endsection
