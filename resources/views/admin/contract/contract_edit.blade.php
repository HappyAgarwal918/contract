@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">{{ $data->name }} Contract Edit</div>
        </div>
    </div>
</div>
@php $locations = DB::table('location')->get();
     $cars = DB::table('cars')->get();
@endphp
<div class="row">
  <div class="col-sm-12">
    <div class="card-box">
      <div class="card-body row">
        <form action="{{route('contract_edited',$data->unique_id)}}" method="POST">
        	@csrf
          <div class="row border p-3 d-flex align-items-center">
            <div class="col-md-12">
              <div class="form-group" style="display: none;">
                <label for="unique_id">Unique</label>
                <input type="text" class="form-control" id="unique_id" name="unique_id" required="required" value="{{ $data->unique_id }}">
              </div>
            </div> 
            <div class="col-md-12">
              <div class="form-group" style="display: none;">
                <label for="created_at">Date</label>
                <input type="text" class="form-control" id="created" name="created" required="required" value="{{ $data->created }}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group" style="display: none;">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" required="required" value="{{ $data->user_id }}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $data->email }}" readonly required="required">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="car">Car</label>
                <select class="form-control" name="car" id="car" required="required">
                  @foreach($cars as $car)
                    <option @if($data->car == $car->name) selected @endif value="{{ $car->name }}">{{ $car->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="startdate">Start Date</label>
                <input type="text" name="startdate" class="form-control" id="start" value="{{ $data->startdate }}" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="enddate">End Date</label>
                <input type="text" name="enddate" class="form-control" id="end" value="{{ $data->enddate }}" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pickup">Pickup Location</label>
                <select class="form-control" name="pickup" id="pickup" required="required">
                  @foreach($locations as $location)
                    <option @if($data->pickup == $location->name) selected @endif value="{{ $location->name }}">{{ $location->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="dropoff">Dropoff Location</label>
                <select class="form-control" name="dropoff" id="dropoff" required="required">
                  @foreach($locations as $location)
                    <option @if($data->dropoff == $location->name) selected @endif value="{{ $location->name }}">{{ $location->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="rental">Rental fees</label>
                <input type="number" min="1" class="form-control" name="rental" id="rental" value="{{ $data->rental }}" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="downpayment">Downpayment</label>
                <input type="number" min="1" class="form-control" name="downpayment" id="downpayment" value="{{ $data->downpayment }}" required="required" value="">
              </div>
            </div>
            <div class="col-md-1">
            <button type="submit" class="btn btn-primary">Submit</button></div>
            <div><a type="button" href="{{ route('contracts')}}">Back</a></div>
          </div>
        </form>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  var elX = document.getElementById("rental");
var elY = document.getElementById("downpayment");

function limit() {
  elY.value=Math.min(Math.round(elX.value*1),elY.value);
}

elX.onchange=limit;
elY.onchange=limit;
</script>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){
$("#start").datepicker({
     minDate: '0',
    onSelect: function(selected) {
      $("#end").datepicker("option","minDate", selected)
    }
});
$("#end").datepicker({
     minDate: '0',
    onSelect: function(selected) {
       $("#start").datepicker("option","maxDate", selected)
    }
});  
});

</script>
@endsection