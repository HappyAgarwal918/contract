@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Locations</div>
        </div>
    </div>
</div>
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body row">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-responsive-stack" id="restu_table1">
                        <thead class="thead">
                            <tr>
                                <th class="" scope="col"></th>
                                <th class="" scope="col"></th>
                                <th class="" scope="col">ID</th>
                                <th class="" scope="col">Location Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td><a href="{{ route('destroylocation',$user->id)}}" onclick="return confirm('Are you sure you want to delete this contract?');"><i class="fa fa-trash"></i></a></td>
                                <td><a href="{{ route('location_edit',$user->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td  id="Uid">{{ $user->id }}</td>
                                <td id="Uname">{{ $user->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add New
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('addnew_location')}}" method="post">
            @csrf
          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Location">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#restu_table1').DataTable();
    });
</script>
@endsection