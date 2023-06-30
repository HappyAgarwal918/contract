@extends('layouts.master')

@section('content')

<div class="container py-5">
	<div class="row">
		<div class="col-md-12 text-center font-weight-bold">
			<h1>Clients</h1>
		</div>
	</div>
	<div class="row">
	    <div class="col-sm-12">
	        <div class="card-box">
	            <div class="card-body row">
	                <div class="table-responsive">
	                    <table class="table table-bordered table-striped table-responsive-stack" id="restu_table1">
	                        <thead class="thead">
	                            <tr>
	                        <th class="" scope="col"></th>
	                        <th class="" scope="col">ID</th>
	                        <th class="" scope="col">Name</th>
	                        <th class="" scope="col">Email</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        @foreach ($data as $user)
	                            <tr>
	                                <td><a href="#" onclick="return confirm('Are you sure you want to delete this contract?');"><i class="fa fa-trash"></i></a></td>
	                                <td>{{ $user->id }}</td>
	                                <td>{{ $user->name }}</td>
	                                <td>{{ $user->email }}</td>
	                            </tr>
	                        @endforeach
	                        </tbody>
	                    </table>
	                </div>
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