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

	<!--Open Sans Font [ OPTIONAL ]
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
    -->

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
<div id="container">
	<div id="page-content">
		<div class="row">


			@section('content')


			@show

		</div>
	</div>
</div>
<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="{!! asset('plugins/fast-click/fastclick.min.js') !!}"></script>


<script src="{!! asset('plugins/bootbox/bootbox.min.js') !!}"></script>


<!--Nifty Admin [ RECOMMENDED ]-->
<script src="{!! asset('js/nifty.min.js') !!}"></script>


<!--Skycons [ OPTIONAL ]-->
<script src="{!! asset('plugins/skycons/skycons.min.js') !!}"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="{!! asset('plugins/switchery/switchery.min.js') !!}"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{!! asset('plugins/bootstrap-select/bootstrap-select.min.js') !!}"></script>


<!--Demo script [ DEMONSTRATION ]-->
<script src="{!! asset('js/demo/nifty-demo.min.js') !!}"></script>





@section('scripts')

    @show




</body>
</html>
