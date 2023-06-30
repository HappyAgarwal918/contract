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
            <div class="card-body row">
                <form action="{{ route('key_edited',$data->id)}}" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="car_key">Car Keys</label>
                    <input type="text" class="form-control" name="car_key" id="car_key" placeholder="Enter Car Keys" value="{{ $data->car_key }}">
                  </div>
                  <div class="form-group">
                    <label for="password">Password Information</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password Information" value="{{ $data->password }}">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection