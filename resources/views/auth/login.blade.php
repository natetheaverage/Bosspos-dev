@extends('welcome')
	@section('title') @parent Login page @stop

@section('content')
    @parent
	<!-- LOGIN FORM -->
	<!--===================================================-->
	<div class="cls-content">
		<div class="cls-content-sm panel">
			<div class="panel-body">
				<p class="pad-btm">Sign In to your account</p>
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif



				<form class="form-horizontal" role="form" method="POST" action="{!! url('/auth/login') !!}">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-user"></i></div>
							<input type="text" class="form-control" name="email" value="{!! old('name') !!}" placeholder="Username" >
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-8 text-left checkbox">
							<label class="form-checkbox form-icon">
								<input type="checkbox"> Remember me
							</label>
						</div>
						<div class="col-xs-4">
							<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit">Sign In</button>
							</div>
						</div>
					</div>
					{{--}}
					<div class="mar-btm"><em>- or -</em></div>
					<button class="btn btn-primary btn-lg btn-block" type="button">
						<i class="fa fa-facebook fa-fw"></i> Login with Facebook
					</button>
					{{--}}
				</form>

			</div>
		</div>
		<div class="pad-ver">
			<a href=" {{ asset('pages-password-reminder.html') }}" class="btn-link mar-rgt">Forgot password ?</a>
			<a href=" {{ asset('pages-register.html') }}" class="btn-link mar-lft">Create a new account</a>
		</div>
	</div>
	<!--===================================================-->

@stop

