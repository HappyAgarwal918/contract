@extends('admin.layout')

@section('admincontent')

@php
    $fdate = $data->startdate;
    $tdate = $data->enddate;
    $datetime1 = new DateTime($fdate);
    $datetime2 = new DateTime($tdate);
    $interval = $datetime1->diff($datetime2);
    $days = $interval->format('%a');//now do whatever you like with $days

    $remaining = $data->rental-$data->downpayment;
@endphp

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">{{ $data->name }} Contract Detail</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body row">
                <div class="col-md-2">ID</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->unique_id }}</p></div>
                <div class="col-md-2">Name</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->name }}</p></div>
                <div class="col-md-2">Email</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->email }}</p></div> 
                <div class="col-md-2">Number</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->number }}</p></div>
                <div class="col-md-2">Car</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->car }}</p></div>
                <div class="col-md-2">Start Date</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->startdate }}</p></div>
                <div class="col-md-2">End Date</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->enddate }}</p></div>
                <div class="col-md-2">Time Period</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $days }} days</p></div>
                <div class="col-md-2">Licence No.</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->licence_no }}</p></div>
                <div class="col-md-2">Id Card</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->id_card }}</p></div> 
                <div class="col-md-2">Pickup Location</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->pickup }}</p></div>
                <div class="col-md-2">Dropoff Location</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>{{ $data->dropoff }}</p></div>
                <div class="col-md-2">Rental</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>${{ $data->rental }}</p></div>
                <div class="col-md-2">Downpayment</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>${{ $data->downpayment }}</p></div>
                <div class="col-md-2">Pending Fees</div>
                <div class="col-md-1 d-none d-md-block"style="max-width: 3%;">:</div>
                <div class="col-md-9"><p>${{ $remaining }}</p></div>
            </div>
        </div>
    </div>
</div>
<a type="button" class="btn btn-secondary" href="{{ route('contracts')}}">Back</a>
@endsection