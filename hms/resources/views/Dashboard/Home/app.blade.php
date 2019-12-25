<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
    @yield('title')
  </title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/green.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
	<!-- morris charts -->
	<link rel="stylesheet" href="{{asset('frontend/assets/charts/css/morris.css')}}">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-jvectormap.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/select2/dist/css/select2.min.css')}}">
	<script src="{{asset('frontend/assets/js/modernizr.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('frontend/assets/datatable/dataTables.bootstrap4.min.css')}}">
</head>
<body>
	<!-- Pre Loader -->

	<div class="theme-settings" id="switcher">
		<!-- <span class="theme-click">
			<span class="ti-settings"></span>
		</span> -->
		<span class="theme-color theme-default theme-active" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div>
	<!-- /Color Changer -->
	<div class="wrapper"style="padding:0px">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<div class="sidebar-header"> <a href="index.html"></a>
				</div>
			</div>
		<!-- Page Content -->
		<div id="content"style="padding:0px">
			<!-- Top Navigation -->

			<div class="container-fluid"style="padding:0px">

					<ul class="nav justify-content-end">
						<li class="nav-item">
							<a class="nav-link">
								<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
							</a>
						</li>

							<div class="modal fade mentalcare" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<!-- <div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div> -->
									</div>
								</div>
				</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
							 aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>

@forelse (App\Appointment::latest()->paginate(5) as $appointment)
<a class="dropdown-item" href="{{ route('allappointment') }}">
	<span class="ti-wheelchair"></span> {{ $appointment->Patient_Name }} Just Appointed</a>
@empty
@endforelse

@forelse (App\Prescription::latest()->paginate(5) as $prescription)
<a class="dropdown-item" href="{{ route('allappointment') }}">
	<span class="ti-wheelchair"></span> {{ $prescription->Patient_Name }} Just Prescribeded</a>
@empty
@endforelse
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
							 aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>Hello!</h5>
								<a class="dropdown-item" href="{{ route('profiles') }}">
									<span class="ti-settings"></span> Profile</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
									<a class="dropdown-item" href="#">
										<span class="ti-help-alt"></span>Login</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									 onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
						<span></span> Logout</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
						</form>

							</div>
						</li>
					</ul>

				</nav>
			</div>

			<!-- /Top Navigation -->
			<!-- Menu -->
			<div class="containercontainer-fluid  menu-nav">

				<nav class="navbar navbar-expand-lg proclinic-bg text-white">
					<button class="navbar-toggler" ype="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="ti-menu text-white"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown active">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-home"></span> Dashboard</a>
								<div class="dropdown-menu">
								   <a class="dropdown-item" href="{{route('index')}}">  Index</a>
			@if(Auth::user() && Auth::user()->role_id == 1 )
		<a class="dropdown-item" href="{{route('onedayperformance')}}"> Oneday Performance</a>
				@endif
				</div>
				</li>

		@if(Auth::user() && Auth::user()->role_id == 1 )
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-user"></span> Role</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{route('role_index')}}">Add Role </a>
									<a class="dropdown-item" href="{{route('allrole')}}">All Role</a>
								</div>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-user"></span> Department</a>
								<div class="dropdown-menu">

									<a class="dropdown-item" href="{{route('Department')}}">Add Department</a>
									<a class="dropdown-item" href="{{route('alldepartment')}}">All Department</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-key"></span> Schedule</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{route('schedule')}}">Add Schedule</a>
									<a class="dropdown-item" href="{{route('allschedule')}}">All Schedules  </a>
								</div>
							</li>
		@endif
									@if(Auth::user() && Auth::user()->role_id == 1||Auth::user()->role_id == 2)
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-user"></span> Doctors</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{route('doctor')}}">Add Doctor Info </a>
									<a class="dropdown-item" href="{{route('alldoctor')}}">All Doctors</a>

								</div>
							</li>

		@endif


			<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
			aria-expanded="false"><span class="ti-pencil-alt"></span> Appointments</a>
			<div class="dropdown-menu">
			<a class="dropdown-item" href="appointment">Add Appointment</a>

			<a class="dropdown-item" href="allappointment">All Appointments</a>
			</div>
			</li>

	@if(Auth::user() && Auth::user()->role_id == 2||Auth::user()->role_id == 3 )
						<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
						aria-expanded="false"><span class="ti-pencil-alt"></span> Prescription</a>
						<div class="dropdown-menu">
						<a class="dropdown-item" href="allprescription">All Prescription</a>
						</div>
						</li>
		      @endif
			@if(Auth::user() && Auth::user()->role_id == 2||Auth::user()->role_id == 4)

												<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
												aria-expanded="false"><span class="ti-pencil-alt"></span> Case Study </a>
												<div class="dropdown-menu">

						<a class="dropdown-item" href="{{route('allcasestudy')}}">All Case Study </a>
												</div>
												</li>
													@endif
	@if(Auth::user() && Auth::user()->role_id == 1||Auth::user()->role_id == 3)

									<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-key"></span> Room Allotments</a>
											<div class="dropdown-menu">
													@if(Auth::user() && Auth::user()->role_id == 1)
																<a class="dropdown-item" href="{{route('addroomtype')}}">ADDRoom Allotment</a>
																@endif


					<a class="dropdown-item" href="{{route('allroom')}}">ALL Allotment</a>
				 		</div>
					</li>
			@endif

	@if(Auth::user() && Auth::user()->role_id == 3||Auth::user()->role_id == 6)
														<li class="nav-item dropdown">
															<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
															 aria-expanded="false"><span class="ti-key"></span>Bill</a>
															<div class="dropdown-menu">
																	<a class="dropdown-item" href="allbill">ALL Bill</a>
															</div>
														</li>
	@endif

@if(Auth::user() && Auth::user()->role_id == 1 || Auth::user()->role_id == 2 ||Auth::user()->role_id == 3 ||Auth::user()->role_id == 4|| Auth::user()->role_id == 5  )

									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
										 aria-expanded="false"><span class="ti-user"></span>Notice Board</a>
										<div class="dropdown-menu">
  		@if(Auth::user() && Auth::user()->role_id == 1 )
											<a class="dropdown-item" href="Notice">Add Notice</a>
											@endif


	<a class="dropdown-item" href="allnotice">All  Notice</a>
										</div>
									</li>
									@endif






	@if(Auth::user() && Auth::user()->role_id == 5||Auth::user()->role_id == 3)

<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
	 aria-expanded="false"><span class="ti-user"></span> Medicene</a>
	<div class="dropdown-menu">
			@if(Auth::user() && Auth::user()->role_id == 5)
		<a class="dropdown-item" href="{{route('addmedicine')}}">Add Medicine </a>
@endif
		<a class="dropdown-item" href="{{route('allmedicine')}}">All Medicines</a>

	</div>
</li>
@endif

	@if(Auth::user() && Auth::user()->role_id == 4)
	<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-pencil-alt"></span> Activities</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="Birthreport">Add Birth Report</a>
																		<a class="dropdown-item" href="allBirthreport">All Birth Reports</a>
																		<a class="dropdown-item" href="Deathreport">Add Dealth Report</a>
																		<a class="dropdown-item" href="allDeathreports">All Dealth Reports </a>
																		<a class="dropdown-item" href="Operation">Add Operation  Reports</a>
																		<a class="dropdown-item" href="alloperationreport">All Operation  Reports </a>
																		<a class="dropdown-item" href="Investigation">Add Investigation Report</a>
																		<a class="dropdown-item" href="allinvestigation">All Investigation Reports</a>
																	</div>


																</li>
																@endif
										</li>
								</div>

						</ul>
					</div>
				</nav>
			</div>








      @yield('content')






				<div class="d-sm-flex justify-content-center">
				  <span class="text-muted text-center d-block d-sm-inline-block">N.J Nijhum,,16103226,Fall 2019 <a href="" target="_blank"></a>. All rights reserved.</span>
				</div>
			</div>
			<!-- /Copy Rights-->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
   <script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
	<!-- Popper Library-->
	<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
	<!-- Bootstrap Library-->
	<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
	<!-- morris charts -->
	<script src="{{asset('frontend/assets/charts/js/raphael-min.js')}}"></script>
	<script src="{{asset('frontend/assets/charts/js/morris.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/custom-morris.js')}}"></script>
	<script src="{{asset('frontend/assets/select2/dist/js/select2.full.min.js')}}"></script>
	<script src="{{asset('frontend/assets/datatable/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('frontend/assets/datatable/dataTables.bootstrap4.min.js')}}"></script>




</script>
	<!-- Custom Script-->
	<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
	<script type="text/javascript">
	$(".select2").select2();
	$('#search').DataTable({
							 language: {
									 searchPlaceholder: "Type Something to Search"
							 }
					 });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js">

</script>
<script>


  @include('sweetalert::alert')

	</script>
</body>



</html>
