@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Contracts</div>
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
                        <th class="" scope="col"></th>
                        <th class="" scope="col">ID</th>
                        <th class="" scope="col">Name</th>
                        <th class="" scope="col">Email</th>
                        <th class="" scope="col">ID Card</th>
                        <th class="" scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td><a href="{{ route('contract',$user->unique_id)}}"><i class="fa fa-eye"></i></a></td>
                                <td><a href="{{ route('destroycontract',$user->bookingid)}}" onclick="return confirm('Are you sure you want to delete this contract?');"><i class="fa fa-trash"></i></a></td>
                                <td><a href="{{ route('edit_contract',$user->unique_id)}}"><i class="fa fa-edit"></i></a></td>
                                <td>{{ $user->unique_id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->id_card }}</td>
                                <td>{{ $user->created }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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