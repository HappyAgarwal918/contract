@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Vendors</div>
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
                                <th class="" scope="col">Vendor</th>
                                <th class="" scope="col">Agent</th>
                                <th class="" scope="col">Property</th>
                                <th class="" scope="col">List Price</th>
                                <th class="" scope="col">ID Card No.</th>
                                <th class="" scope="col">Licence No.</th>
                                <th class="" scope="col">Vendor Tel No.</th>
                                <th class="" scope="col">Agent Tel No.</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td><a href="{{ route('destroyvendor',$user->id)}}" onclick="return confirm('Are you sure you want to delete this Vendor?');"><i class="fa fa-trash"></i></a></td>
                                <td><a href="{{ route('vendor_edit',$user->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->Vendor }}</td>
                                <td>{{ $user->Agent }}</td>
                                <td>{{ $user->Property }}</td>
                                <td>{{ $user->List_price1 }}</td>
                                <td>{{ $user->ID_card_NO }}</td>
                                <td>{{ $user->licence_No }}</td>
                                <td>{{ $user->phNo_Vendor }}</td>
                                <td>{{ $user->phNo_Agent }}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Vendor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('addnew_vendor')}}" method="post">
            @csrf
          <div class="form-group">
            <label for="location">Vendor Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Car Name">
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