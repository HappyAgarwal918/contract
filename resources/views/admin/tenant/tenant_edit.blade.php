@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Car Edit</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form action="{{ route('customer_edited',$data->id)}}" method="post">
                    @csrf
                  <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label">Customer Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Customer Name" value="{{ $data->name }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Customer Email" value="{{ $data->email }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sex" class="col-md-2 col-form-label">Sex</label>
                    <div class="col-md-4">
                        <select class="form-control" name="sex" id="sex">
                            <option value="">Please select</option>
                            <option @if(isset($data->sex) && $data->sex == 'Male') selected @endif value="Male">Male</option>
                            <option @if(isset($data->sex) && $data->sex == 'Female') selected @endif value="Female">Female</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="age" class="col-md-2 col-form-label">Age</label>
                    <div class="col-md-4">
                        <input type="number" min="1" max="99" class="form-control" name="age" id="age" placeholder="Enter Customer Age" value="{{ $data->age }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="number" class="col-md-2 col-form-label">Tel No.</label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" name="number" id="number" placeholder="Enter Customer Tel number" value="{{ $data->number }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="licence_no" class="col-md-2 col-form-label">Car License Number</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="licence_no" id="licence_no" placeholder="Enter Car License Number" value="{{ $data->licence_no }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_card" class="col-md-2 col-form-label">Customer ID Number</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="id_card" id="id_card" placeholder="Enter Customer ID Number" value="{{ $data->id_card }}">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection