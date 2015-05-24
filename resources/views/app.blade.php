<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{!! $app['title'] !!} | @section('title') @show</title>
	<!DOCTYPE html>

	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">

    <!--Compiled nifty and app [ NEEDS WORK ]-->
    <link href=" {!! elixir('css/final.css') !!} " rel="stylesheet" type="text/css"/>

	<!--Font Awesome [ OPTIONAL ]-->
	<link href="{!! asset('plugins/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">

	<!--Animate.css [ OPTIONAL ]-->
	<link href="{!! asset('plugins/animate-css/animate.min.css') !!}" rel="stylesheet">

	<!--Morris.js [ OPTIONAL ]-->
	<link href="{!! asset('plugins/morris-js/morris.min.css') !!}" rel="stylesheet">

	<!--Switchery [ OPTIONAL ]-->
	<link href="{!! asset('plugins/switchery/switchery.min.css') !!}" rel="stylesheet">

	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="{!! asset('plugins/bootstrap-select/bootstrap-select.min.css') !!}" rel="stylesheet">

	<!--Demo script [ DEMONSTRATION ]-->
	<link href="{!! asset('css/demo/nifty-demo.min.css') !!}" rel="stylesheet">

    @section('css')
    @show

	<!--SCRIPT FOR LOAD BAR-->
	<!--=================================================-->
	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="{!! asset('plugins/pace/pace.min.css') !!}" rel="stylesheet">
	<script src="{!! asset('plugins/pace/pace.min.js') !!}"></script>






</head>
<body>
<div id="container" class="effect mainnav-lg">

@include('includes.navbar')

	<div class="boxed">


		<!--CONTENT CONTAINER-->
		<!--===================================================-->
		<div id="content-container">


			<!--Page Title-->
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div id="page-title">
				<h1 class="page-header text-overflow"> @section('title') @show </h1>

				<!--Searchbox-->
				<div class="searchbox">
					<div class="input-group custom-search-form">
						<input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
					</div>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<!--End page title-->

			<!--Page content-->
			<!--===================================================-->
			<div id="page-content">


                <div class="row">

				@section('content')

				@show

                </div>
			</div>
			<!--===================================================-->
			<!--End page content-->

		</div>
		<!--===================================================-->
		<!--END CONTENT CONTAINER-->

@include('includes.mainnav')

@include('includes.aside')

	<!-- END BOXED DIV -->
	</div>

@include('includes.footer')

	<!-- SCROLL TOP BUTTON -->
	<!--===================================================-->
	<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
	<!--===================================================-->

</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

<!--NIFTY SETTINGS panel-->
<!--=================================================-->
@include('includes.niftySettings')
<!--=================================================-->
<!-- END OF NIFTY SETTINGS -->

@include('flash::message')

@section('scripts')

    @show

</body>
</html>