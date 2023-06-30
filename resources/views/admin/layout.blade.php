<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/material/material.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/material_style.css') }}">
	<!-- animation -->
	<link href="{{ asset('assets/css/pages/animate_page.css') }}" rel="stylesheet">
	<!-- Template Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/css/theme-color.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset ('vendor/select2/select2.min.css')}}">
	
	<!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <style type="text/css">
    	@media only screen and (max-width: 576px){
    		.top-menu{
    			display: none !important;
    		}
    	}
    </style>
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
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="/">
                    <img alt="" src="{{ asset('images/logo.png')}}" style="width: 40px;">
                    <span class="logo-default" >Contract</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <!-- <img alt="" class="img-circle " src="assets/img/dp.jpg" /> -->
                                <span class="username username-hide-on-mobile">{{ Auth::user()->name }}</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                	<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
				            <li class="nav-item {{ (request()->is('contract*')) ? 'active' : '' }}">
                                <a href="{{ route('contracts')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-file-text-o"></i>
                                    <span class="title">Contracts</span>
                                </a>
                            </li>
                            <li class="nav-item {{ (request()->is('location*')) ? 'active' : '' }}">
                                <a href="{{ route('locations')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="title">Location</span>
                                </a>
                            </li>
                            <li class="nav-item {{ (request()->is('vendor*')) ? 'active' : '' }}">
                                <a href="{{ route('vendors')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="title">Vendor</span>
                                </a>
                            </li>
                            <li class="nav-item {{ (request()->is('tenant*')) ? 'active' : '' }}">
                                <a href="{{ route('tenants')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="title">Tenant</span>
                                </a>
                            </li>
                            <li class="nav-item {{ (request()->is('landlord*')) ? 'active' : '' }}">
                                <a href="{{ route('landlords')}}" class="nav-link nav-toggle">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span class="title">Landlord</span>
                                </a>
                            </li>                      
	                        <li class="nav-item start">
	                            <a class="nav-link nav-toggle" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
	                                <i class="fa fa-sign-out"></i>
	                                <span class="title">Logout</span>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
			 <!-- end sidebar menu -->
			 <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    
                    @yield('admincontent')

                </div>
            </div>
            <!-- end page content -->
		</div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2022 &copy; E-contract CMS By
                <a href="https://thenextbigthinghk.com/" target="_blank" class="makerCss">The Next Big Thing Limited</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}" ></script>
    <script src="{{ asset('assets/plugins/popper/popper.min.js') }}" ></script>
    <script src="{{ asset('assets/plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
	<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
    <!-- Common js-->
	<script src="{{ asset('assets/js/app.js') }}" ></script>
    <script src="{{ asset('assets/js/layout.js') }}" ></script>
	<script src="{{ asset('assets/js/theme-color.js') }}" ></script>
	<!-- Material -->
	<script src="{{ asset('assets/plugins/material/material.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/material_select/getmdl-select.js') }}" ></script>

    @yield('script')
</body>
</html>