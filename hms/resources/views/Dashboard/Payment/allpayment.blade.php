@extends('Dashboard.Home.app')

@section('title')
All Bill
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
					<div class="container-fluid mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">ALL Bill</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">ALL Bill</li>
								<li class="breadcrumb-item active">Bill</li>
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
							<h3 class="widget-title">Bill List</h3>
							<div class="table-responsive mb-3">
								<div class="container">
									<div class="row">
											<table class="table" id="search">
											<thead>
												<tr>



                                <th scope="col">Id</th>
                                <th scope="col">Patient Id</th>
                                <th scope="col">Patient Name</th>
																<th scope="col">Visiting Fee</th>
                                <th scope="col">First Medicine Cost</th>
                                <th scope="col">Second Medicine Cost</th>
                                <th scope="col">Third Medicine Cost</th>
															 <th scope="col">Room Cost</th>
                                <th scope="col">Cost of Treatment</th>
                                <th scope="col">Payment Type</th>
			                    	@if(Auth::user() && Auth::user()->role_id == 3)
															  <th scope="col">Action</th>
																			@endif

                              </tr>
                            </thead>
                            <tbody>

                              @foreach($prices as $price)

                              <tr>
                                <th scope="row">{{ $price->id }}</th>
															<td>{{ $price->token_number}}</td>
                            	<td>{{ $price->Patient_Name}}</td>
                               <td>{{ $price->visitingfee}}</td>
                                <td>{{ $price->medicine_id}}</td>
                                <td>{{ $price->smedicine_name }}</td>
                                <td>{{ $price->tmedicine_name }}</td>
                                <td>{{ $price->roomtype_id }}</td>
															 <td>{{ $price->cost_of_treatment }}</td>
                                <td>{{ $price->payment_type }}</td>
															 <td>
				@if(Auth::user() && Auth::user()->role_id == 3)

	<a href="{{ url('createbill/pdf') }}/{{ $price->id }}" class="btn btn-primary">create PDF</a>
	<a href="{{ url('/deletebill') }}/{{ $price->id }}" class="btn btn-danger">Delete</a>
									@endif

</td>
                              </tr>
                          @endforeach
                            </tbody>
                            </table>

                          </div>

                        </div>

                      </div>
								<!--Export links-->

								<!-- /Export links-->

							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
