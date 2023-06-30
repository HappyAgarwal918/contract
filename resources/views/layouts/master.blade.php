<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css" />
	<!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <style>
    @media screen and (max-width: 768px) {
        .table-responsive-stack tr {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-orient: horizontal;
          -webkit-box-direction: normal;
              -ms-flex-direction: row;
                  flex-direction: row;
        }
        .table-responsive-stack td,
        .table-responsive-stack th {
           display:block;
        /* flex-grow | flex-shrink | flex-basis   */
           -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .table-responsive-stack .table-responsive-stack-thead {
           font-weight: bold;
        }
       .table-responsive-stack tr {
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
              -ms-flex-direction: column;
                  flex-direction: column;
          border-bottom: 3px solid #ccc;
          display:block;
          
       }
       /*  IE9 FIX   */
       .table-responsive-stack td {
          float: left\9;
          width:100%;
       }
    }
    </style>
    <style type="text/css">
.navbar-brand {
  background-image: url('../images/logo.png');
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
  width: 48px;
  height: 48px;
}

.navbar-nav .nav-item:hover {
  background-color: rgba(180, 190, 203, 0.4);
}
</style>
</head>

<body>
	@include('layouts.header')
	<div class="d-flex justify-content-center align-items-center" style="min-height: 82vh;">
	
	  @yield('content')

	</div>

	@include('layouts.footer')
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
@yield('script')