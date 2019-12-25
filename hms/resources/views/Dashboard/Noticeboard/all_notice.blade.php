

    @extends('Dashboard.Home.app')

    @section('title')
     All Notice
    @endsection

    @section('content')


    <!-- /Menu -->
    				<!-- Breadcrumb -->
    				<!-- Page Title -->
    				<div class="container-fluid mt-0">
    					<div class="row breadcrumb-bar">
    						<div class="col-md-6">
    							<h3 class="block-title">Notice</h3>
    						</div>
    						<div class="col-md-6">
    							<ol class="breadcrumb">
    								<li class="breadcrumb-item">
    									<a href="index.html">
    										<span class="ti-home"></span>
    									</a>
    								</li>
    								<li class="breadcrumb-item">Notice</li>
    								<li class="breadcrumb-item active">All Notice</li>
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
    							<h3 class="widget-title">Notice List</h3>
    							<div class="table-responsive mb-3">

                          <div class="container">
                            <div class="row">
                                <table class="table" id="search">
                                <thead>
                                  <tr>


                                    <th scope="col">Id</th>
                                    <th scope="col">Title </th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                     @if(Auth::user()->role_id==1)
                                    <th scope="col">Action</th>
                                      		 @endif

                                  </tr>
                                </thead>
                                <tbody>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($notices as $notice)
                                <tr>
                                  <tr>
                                    <th scope="row">{{ $notice->id }}</th>
                                    <td>{{ $notice->title}}</td>
                                    <td>{{ $notice->description}}</td>
                                    <td>{{ $notice->start_date }}</td>
                                    <td>{{ $notice->end_date}}</td>

                                    <td>
   @if(Auth::user()->role_id==1)
                  <a href="{{ url('/allnotice') }}/{{ $notice->id }}" class="btn btn-primary">Edit</a>
            <a href="{{ url('/deletenotice') }}/{{ $notice->id }}" class="btn btn-danger">Delete</a>
            		 @endif
                                      </td>


                                  </tr>
                              @endforeach
                                </tbody>
                                </table>
                      {{$notices->links()}}
                              </div>

                            </div>

                          </div>

    								<!--Export links-->

    					<nav aria-label="Page navigation example">
    				<ul class="pagination justify-content-center export-pagination">
    							<li class="page-item">
    				<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
    					</li>
    					<li class="page-item">
    					<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
    						</li>
    						<li class="page-item">
    						<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
    					</li>
    					<li class="page-item">
    				<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
    																	</li>
    																</ul>
    															</nav>
    															<!-- /Export links-->
    					<!-- /Widget Item -->
    				</div>
    			</div>
    @endsection
