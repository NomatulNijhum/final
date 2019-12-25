@extends('Dashboard.Home.app')

@section('title')
alldepartment
@endsection


@section('content')


<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container-fluid mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">departments</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">departments</li>
								<li class="breadcrumb-item active">All departments</li>
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
							<h3 class="widget-title">department List</h3>
							<div class="table-responsive mb-3">

                      <div class="container">
                        <div class="row">
                            <table class="table" id="search">
                            <thead>
                              <tr>


                                <th scope="col">Id </th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Description</th>
																<th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                              @foreach($departments as $department)
                              <tr>
                                <th scope="row">{{ $department->id }}</th>
                                <td>{{ $department->department_name }}</td>
                                <td>{{ $department->description}}</td>
																		<td>

				<a href="{{route('alldepartment')}}/{{ $department->id }}" class="btn btn-primary">Update</a>
				<a href="{{ url('/deletedepartment') }}/{{ $department->id }}" class="btn btn-danger">Delete</a>
											 </td>

                              </tr>
                          @endforeach
                            </tbody>
                            </table>
                  {{$departments->links()}}
                          </div>

                        </div>

                      </div>

								<!--Export links-->

															<!-- /Export links-->
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
