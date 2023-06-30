@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Customers</div>
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
                                <th class="" scope="col">Tenant Name</th>
                                <th class="" scope="col">Agent Name</th>
                                <th class="" scope="col">Effect on D-M-Y</th>
                                <th class="" scope="col">Expire on D-M-Y</th>
                                <th class="" scope="col">Tenant Tel No.</th>
                                <th class="" scope="col">Agent Tel No.</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td><a href="{{ route('destroytenant',$user->id)}}" onclick="return confirm('Are you sure you want to delete this tenant?');"><i class="fa fa-trash"></i></a></td>
                                <td><a href="{{ route('tenant_edit',$user->id)}}"><i class="fa fa-edit"></i></a></td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->Tenant_name }}</td>
                                <td>{{ $user->Agent_name }}</td>
                                <td>{{ $user->effect_on_DMY }}</td>
                                <td>{{ $user->expire_on_DMY }}</td>
                                <td>{{ $user->Tenant_phNO }}</td>
                                <td>{{ $user->Agent_PhNO }}</td>                            
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
        <h5 class="modal-title" id="exampleModalLabel">Add New Tenant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('addnew_tenant')}}" method="post">
            @csrf
          <div class="form-group">
            <label for="name">Customer Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Customer Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Customer Email">
          </div>
          <div class="form-group">
            <label for="sex">Sex</label>
            <select class="form-control" name="sex" id="sex">
                <option value="">Please select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" min="1" max="99" class="form-control" name="age" id="age" placeholder="Enter Customer Age">
          </div>
          <div class="form-group">
            <label for="number">Tel No.</label>
            <input type="text" class="form-control" name="number" id="number" placeholder="Enter Customer Tel number">
          </div>
          <div class="form-group">
            <label for="licence_no">Car License Number</label>
            <input type="text" class="form-control" name="licence_no" id="licence_no" placeholder="Enter Car License Number">
          </div>
          <div class="form-group">
            <label for="id_card">Customer ID Number</label>
            <input type="text" class="form-control" name="id_card" id="id_card" placeholder="Enter Customer ID Number">
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