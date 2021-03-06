@extends('Dashboard.Home.app')

@section('title')
Add Payment
@endsection

@section('content')


      <div class="container mt-0"style="padding:0px">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Add Payment</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Payments</li>
              <li class="breadcrumb-item active">Add Payment</li>
            </ol>
          </div>
        </div>
      </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container"style="padding:0px">

      <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
          <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Add Payment</h3>


     <form id="bill_create" action="{{route ('bill_create')}}" method="post" enctype="multipart/form-data">
                  @csrf



        <div class="form-group col-md-6">
      <label for="token_number">Patient Id</label>
<input type="text" name="token_number"  value="{{ $single_bill->token_number }}"  placeholder="token_number" class="form-control" id="phone">
          </div>
          </li>
          <div class="form-group col-md-6">
        <label for="Patient_Name">Patient Name</label>
    <input type="text" name="Patient_Name"   value="{{ $single_bill->Patient_Name }}"  placeholder="Patient_Name" class="form-control" id="phone">
            </div>
            </li>

      <div class="form-group col-md-6">
      <label for="visitingfee">Visiting Fees</label>
<input type="text" name="visitingfee"   placeholder="Visiting Fees" class="form-control" id="phone">
    </div>
    </li>






                   <div class="form-group col-md-6">
                   <label for="medicine_id">First Medicine cost</label>
             <input type="text" name="medicine_id"   placeholder="First Medicine cost" class="form-control" id="medicine_id">
                 </div>
                 </li>



                 <div class="form-group col-md-6">
                 <label for="smedicine_name">Second  Medicine cost</label>
           <input type="text" name="smedicine_name"   placeholder="Second  Medicine cost" class="form-control" id="smedicine_name">
               </div>
               </li>


                  <div class="form-group col-md-6">
              <label for="tmedicine_name">Third  Medicine cost</label>
      <input type="text" name="tmedicine_name"   placeholder="Third  Medicine cost" class="form-control" id="tmedicine_name">
                </div>
                </li>



                  <div class="form-group col-md-6">
                <label for="roomtype_id">Room  cost</label>
          <input type="text" name="roomtype_id"   placeholder="Room  cost" class="form-control" id="roomtype_id">
                                </div>
                                </li>






            <div class="form-group col-md-12">
                  <h4>Payment</h4>
                      </div>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="statusstatus">Payment Type</label>
                  <select class="form-control select2" name="payment_type" id="payment_type" >
                  		<option value="Cash">Cash</option>
                  		<option value="Card">Card</option>
                      <option value="Due">Due</option>

                  </select>
                  </div>

                <div class="form-check col-md-12 mb-2">
                  <div class="text-left">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="ex-check-2">
                      <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-6 mb-3">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>





@endsection
