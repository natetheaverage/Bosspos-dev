<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{!! $app['title'] !!} | @yield('title')</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ]-->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href=" {!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">


	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href=" {!! asset('css/nifty.min.css') !!}" rel="stylesheet">


	<!--Font Awesome [ OPTIONAL ]-->
	<link href=" {!! asset('plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">



	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href=" {!! asset('plugins/pace/pace.min.css') !!}" rel="stylesheet">
	<script src=" {!! asset('plugins/pace/pace.min.js') !!}"></script>



</head>
<body>

<div id="container" class="cls-container">

	<!-- BACKGROUND IMAGE -->
	<!--===================================================-->
	<div id="bg-overlay" class="bg-trns"></div>


	<!-- HEADER -->
	<!--===================================================-->
	<div class="cls-header cls-header-lg">
		<div class="cls-brand">
			<a class="box-inline" href="/">
				<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
				<span class="brand-title">Boss <span class="text-thin">POS</span></span>
			</a>
		</div>
	</div>
	<!--===================================================-->

@section('content')

    @show

</div>
<!--===================================================-->
<!-- END OF CONTAINER -->



<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{!! 'js/jquery-2.1.1.min.js' !!}"></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{!! 'js/bootstrap.min.js' !!}"></script>

<!--Nifty Admin [ RECOMMENDED ]-->
<script src="{!! 'js/nifty.min.js' !!}"></script>

</body>
</html>
