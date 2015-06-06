<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! $app['title'] !!} | @section('title') @show</title>

    @include('includes.header')
    @section('css')
    @show
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