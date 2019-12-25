@extends('Dashboard.Home.app')

@section('title')
HMS  dashboard
@endsection

@section('content')


<!-- /Menu -->
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="container mt-0">
      <div class="row breadcrumb-bar">
        <div class="col-md-6">
          <h3 class="block-title">Quick Statistics</h3>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="ti-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item active">One Day Performance </li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /Page Title -->
    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container home">
      <div class="row">
        <!-- Widget Item -->
        <div class="col-md-4">
          <div class="widget-area proclinic-box-shadow color-red">
            <div class="widget-left">
              <span class="ti-user"></span>
            </div>
            <div class="widget-right">
              <h4 class="wiget-title">Patients</h4>
              <span class="numeric color-red">{{$appointments->count()}}</span>

              <p class="inc-dec mb-0"><span class="ti-angle-up"></span>

            </p>

            </div>
          </div>
        </div>
        <!-- /Widget Item -->
        <!-- Widget Item -->
        <div class="col-md-4">
          <div class="widget-area proclinic-box-shadow color-green">
            <div class="widget-left">
              <span class="ti-bar-chart"></span>
            </div>
            <div class="widget-right">
              <h4 class="wiget-title">Doctors</h4>
              <span class="numeric color-green">{{$doctors->count()}}</span>
              <p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
            </div>
          </div>
        </div>
        <!-- /Widget Item -->
        <!-- Widget Item -->



        <div class="col-md-4">
          <div class="widget-area proclinic-box-shadow color-green">
            <div class="widget-left">
              <span class="ti-bar-chart"></span>
            </div>
            <div class="widget-right">
              <h4 class="wiget-title">Prescriptions</h4>
              <span class="numeric color-green">{{$prescriptions->count()}}</span>
              <p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
            </div>
          </div>
        </div>

                <div class="col-md-4">
                  <div class="widget-area proclinic-box-shadow color-green">
                    <div class="widget-left">
                      <span class="ti-bar-chart"></span>
                    </div>

        <div class="widget-right">
          <h4 class="wiget-title">Casestudies</h4>
          <span class="numeric color-green">{{$casestudies->count()}}</span>
          <p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
        </div>
      </div>
    </div>



    <div class="col-md-4">
      <div class="widget-area proclinic-box-shadow color-green">
        <div class="widget-left">
          <span class="ti-bar-chart"></span>
        </div>

<div class="widget-right">
<h4 class="wiget-title">Notices</h4>
<span class="numeric color-green">{{$notices->count()}}</span>
<p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
</div>
</div>
</div>

    <div class="col-md-4">
      <div class="widget-area proclinic-box-shadow color-green">
        <div class="widget-left">
          <span class="ti-bar-chart"></span>
        </div>

<div class="widget-right">
<h4 class="wiget-title">Blood Bank Posts</h4>
<span class="numeric color-green">{{$tbl_posts->count()}}</span>
<p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
</div>
</div>
</div>
<div class="col-md-4">
  <div class="widget-area proclinic-box-shadow color-green">
    <div class="widget-left">
      <span class="ti-bar-chart"></span>
    </div>

<div class="widget-right">
<h4 class="wiget-title">Birthreports</h4>
<span class="numeric color-green">{{$birthreports->count()}}</span>
<p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
</div>
</div>
</div>

<div class="col-md-4">
  <div class="widget-area proclinic-box-shadow color-green">
    <div class="widget-left">
      <span class="ti-bar-chart"></span>
    </div>

<div class="widget-right">
<h4 class="wiget-title">Bills</h4>
<span class="numeric color-green">{{$prices->count()}}</span>
<p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
</div>
</div>
</div>

<div class="col-md-4">
  <div class="widget-area proclinic-box-shadow color-green">
    <div class="widget-left">
      <span class="ti-bar-chart"></span>
    </div>
<div class="widget-right">
<h4 class="wiget-title">Departments</h4>
<span class="numeric color-green">{{$departments->count()}}</span>
<p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
</div>
</div>
</div>

<div class="col-md-4">
  <div class="widget-area proclinic-box-shadow color-green">
    <div class="widget-left">
      <span class="ti-bar-chart"></span>
    </div>
<div class="widget-right">
<h4 class="wiget-title">Roles</h4>
<span class="numeric color-green">{{$roles->count()}}</span>
<p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
</div>
</div>
</div>


<div class="col-md-4">
  <div class="widget-area proclinic-box-shadow color-green">
    <div class="widget-left">
      <span class="ti-bar-chart"></span>
    </div>

<div class="widget-right">
<h4 class="wiget-title"> Roomallotment </h4>
<span class="numeric color-green">{{$room_allotments->count()}}</span>
<p class="inc-dec mb-0"><span class="ti-angle-down"></span> </p>
</div>
</div>
</div>



        <!-- Widget Item -->





                </tbody>
              </table>
            </div>

          </div>
        </div>
        <!-- /Widget Item -->

      </div>
      </div>
@endsection
