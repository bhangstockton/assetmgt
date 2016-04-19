<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AssetMS | @yield('page-title') </title>
	<link rel="shortcut icon" href={{ url('img/favicon.ico') }} />
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="{{ asset('bower_components/adminlte/bootstrap/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('bower_components/ionicons/css/ionicons.min.css') }}">
	<!-- Material Design Icons -->
	<link rel="stylesheet" href="{{ asset('bower_components/material-design-icons/iconfont/material-icons.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('bower_components/adminlte/dist/css/AdminLTE.min.css') }}">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
				page. However, you can choose any other skin. Make sure you
				apply the skin class to the body tag so the changes take effect.
	-->
	<link rel="stylesheet" href="{{ asset('bower_components/adminlte/dist/css/skins/_all-skins.min.css')}}">
	<!-- Site CSS -->
	<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
	<!-- Additional CSS -->
	@yield('additional_css')
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-black-light sidebar-mini">
	@yield('page-ident')
<div class="wrapper">
		
	<!-- Header -->
	@include('template.header')

	<!-- Sidebar -->
	@include('template.sidebar')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				{{-- Page Header --}}
				@yield('page-icon')
				@yield('page-title')
				<small>@yield('sysmod-title')</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
				@yield('breadcrumbs')
				<li class='active'>@yield('page-title')</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- FLASH MESSAGE -->   
			@include('template/flashmsg')

			<!-- CONTENT -->
			@yield('content')

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Footer -->
	@include('template.footer')

	<!-- Control -->
	@include('template.control')

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/bower_components/adminlte/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('/bower_components/adminlte/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/bower_components/adminlte/dist/js/app.min.js') }}"></script>
<!-- Include when needed JS files -->
@yield('additional_js')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
		 Both of these plugins are recommended to enhance the
		 user experience. Slimscroll is required when using the
		 fixed layout. -->

<script type="text/javascript">
	$(document).ready(function() {
	 
		// Sidebar Item Activation Processing
		$( "ul.sidebar-menu" ).find( "li.active" ).removeClass();

		var page_id = $('#page_id').val();
		var page_group_lev1 = $('#page_group_lev1').val();
		var page_group_lev2 = $('#page_group_lev2').val();

		$('#' + page_id).toggleClass('active');

		if(page_group_lev1 != 'none'){
			$('#' + page_group_lev1).addClass('active');
			$('#sysmods').remove();
		}
		if(page_group_lev2 != 'none'){
			$('#' + page_group_lev2).addClass('active');
		}
		if(page_group_lev1 == 'none'){
			$('#sysmods_list').remove();
		}

		if(page_group_lev1 != 'edms') $('#edms').remove();
		if(page_group_lev1 != 'ememo') $('#ememo').remove();


		//Process DocProfile Active Tabs
		// if (page_id != "doc_profile") {sessionStorage.removeItem("pat");};
		// var page_activetab = $('#page_activetab').val();
		// if(sessionStorage.getItem("pat")){
		//     $('#myTab a[href="#tab_' + sessionStorage.getItem("pat") + '"]').tab('show');
		 
		// }
		// else {
		//     $('#myTab a[href="#tab_' + page_activetab + '"]').tab('show')
		// }

		// Checkbox and Radio Inputs
		// -------------------------

		// Square Red Color Scheme
		$('input[type="checkbox"].square-red, input[type="radio"].square-red').iCheck({
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red'
		});
		// Square Blue Color Scheme
		$('input[type="checkbox"].square-blue, input[type="radio"].square-blue').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue'
		});

		//Process Active Tabs
		var page_activetab = $('#page_activetab').val();
		$('#amstab a[href="#tc_' + page_activetab + '"]').tab('show')
	});
</script>

</body>
</html>
