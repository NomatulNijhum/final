


<!DOCTYPE html>
<html>
<head>
	<title>ourdoctors</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css"  href="{{asset('Frontend/assets/css/design.css')}}">

</head>
<body>
	<section>
		<div class="container">
			<div class="row justify-content-center">





@foreach ($schedules as $schedule)

<div class="col-md-4">
	<div class="card shadow" style="width: 18rem;">
		<div class="inner">
			<img src="{{ asset('uploads/picture') }}/{{ $schedule->picture }}" class="card-img-top img-fluid" alt="...">
		</div>
		<div class="card-body text-center">
			<h5 class="card-title">{{ $schedule->relationBetweenDoctor->doctor_name }}</h5>
			<h6 class="card-title">{{ $schedule->relationBetweenDepartment->department_name }}</h6>
			<h5 class="card-title">{{ $schedule->available_days }}</h5>
			<h6 class="card-title">{{ $schedule->available_times }}</h6>
			<h6 class="card-title">{{ $schedule->available_time }}</h6>
			<!-- <a href="#" class="btn btn-success">Go somewhere</a> -->
		</div>
	</div>
</div>

@endforeach

			</div>
		</div>
	</section>

</body>
</html>
