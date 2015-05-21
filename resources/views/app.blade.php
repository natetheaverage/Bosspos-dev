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



	<!-- react stuff-->
		<script src="https://fb.me/react-0.13.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.1/JSXTransformer.js"></script>

		<!--
		<script type="text/jsx" src="{!! asset('/js/react/avitar.js')  !!}"></script>
		<script type="text/jsx;harmony=true" src="{!! asset('/js/react/counter.js')  !!}"></script>
		<script type="text/jsx;harmony=true" src="{!! asset('/js/react/TaskList.js')  !!}"></script>
		<script type="text/jsx;harmony=true" src="{!! asset('/js/react/TaskApp.js')  !!}"></script>

		<script type="text/jsx;harmony=true" src="{!! asset('/js/react/Gist.js')  !!}"></script>
		<script type="text/jsx;harmony=true" src="{!! asset('/js/react/GistAddForm.js')  !!}"></script>
		<script type="text/jsx;harmony=true" src="{!! asset('/js/react/GistBox.js')  !!}"></script>
		-->



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

<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script>




<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="{!! asset('plugins/fast-click/fastclick.min.js') !!}"></script>


<!--BootBox Modual [ OPTIONAL ]-->
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
<script src="{!! asset('js/demo/nifty-demo.js') !!}"></script>


<!--Bosspos  [ Local editing scripts ]-->
<script src="{!! asset('js/bossposEditing.js') !!}"></script>


<!--Bosspos  [ Local editing scripts ]-->
<script src="{!! asset('js/bosspos.js') !!}"></script>


<!--JAVASCRIPT-->
<!--=================================================-->



<script src="http://192.168.10.10:3000/socket.io/socket.io.js"></script>
<script>var socket = io.connect('http://192.168.10.10:3000');</script>
<script type="text/jsx;harmony=true" src="{!! asset('/js/ReceiveEvent.js')  !!}"></script>


<script>


	/*
	 * A Double check modal when destroying an object
	 */
	function open_destroy_window(object)
	{
		var interfaceObject = object['id'];
		bootbox.dialog({
					title: "Delete object number: "+interfaceObject,
					message: '<div class="row">  ' +
					'<div class="col-md-12"> ' +
					'<form method="POST" action="http://bosspos1.5/interfaceObjects/'+interfaceObject+'" accept-charset="UTF-8">' +
					'<input type="hidden" name="_token" value="{!! csrf_token() !!}">' +
					'<input name="_method" type="hidden" value="DELETE">' +
					'<input type="submit" value="Delete this object forever?">' +
					'</form>' +
					'</div>  </div>'

				}
		);
	}
</script>

@include('flash::message')

@section('scripts')

    @show

</body>
</html>