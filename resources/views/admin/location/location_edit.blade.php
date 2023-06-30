@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Location Edit</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body row">
                <form action="{{ route('location_edited',$data->id)}}" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="location">Car Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Car Name" value="{{ $data->name }}">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection