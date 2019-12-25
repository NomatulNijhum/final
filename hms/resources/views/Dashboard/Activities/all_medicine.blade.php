@extends('Dashboard.Home.app')

@section('title')
all Medicine
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Medicine</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Medicine</li>
								<li class="breadcrumb-item active">All Medicine</li>
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
							<h3 class="widget-title">Medicine List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6 offset-md-3">
                            <table class="table">
                            <thead>
                              <tr>


                                <th scope="col">#</th>
                                <th scope="col">Medicine Name</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Manufactured By</th>


                              </tr>
                            </thead>
                            <tbody>

                              @foreach($medicines as $medicine)
                              <tr>
                                <th scope="row">{{ $medicine->id }}</th>
                                <td>{{ $medicine->medicine_name}}</td>
                                <td>{{ $medicine->category_name}}</td>
                                <td>{{ $medicine->description}}</td>
                                <td>{{ $medicine->price}}</td>
                                <td>{{ $medicine->manufactured_by}}</td>

																<td>

	@if(Auth::user() && Auth::user()->role_id == 5)
	 <a href="{{ url('/allmedicine') }}/{{ $medicine->id }}" class="btn btn-primary">Update</a>
	 <a href="{{ url('/deleteMedicine') }}/{{ $medicine->id }}" class="btn btn-danger">Delete</a>
	 								</td>
@endif
                              </tr>




                          @endforeach
                            </tbody>
                            </table>

                          </div>

                        </div>

                      </div>



							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
