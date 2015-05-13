@extends('app')

@section('title') Employee Directory @stop

@section('css')
	@parent

			<!--Dropzone [ OPTIONAL ]-->
	<link href="{!! asset('plugins/dropzone/dropzone.css') !!}" rel="stylesheet">

@stop


@section('content')

	<div class="row">
	<div class="col-lg-12">

		<!--Primary Panel-->
		<!--===================================================-->
		<div class="panel panel-bordered panel-dark">
			<div class="panel-heading">
				<div class="panel-control">
					<span class="label label-danger">{{ $users->count() }} Employees</span>
					<button class="btn btn-default" data-target="#demo-panel-collapse" data-toggle="collapse" aria-expanded="true"><i class="fa fa-chevron-down"></i></button>
					<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
				</div>
				<h3 class="panel-title">Employees</h3>
			</div>
			<div id="demo-panel-collapse" class="collapse in panel-body" aria-expanded="true">

				@foreach($users as $user)
					<div class="col-md-4 col-lg-4">

					<!--Profile Widget-->
					<!--===================================================-->
					<div class="panel widget">
						<div class="widget-header bg-mint"></div>
						<div class="widget-body text-center">
							@if($user->profile->profile_picture != null)
								<a href="#" onClick="open_file_upload_window({{ $user->id }})"><img alt="Profile Picture" class="widget-img img-circle img-border-light" src="{!! asset('img/users/'.studly_case($user->profile->last_name[0]).'/'.studly_case($user->profile->last_name).studly_case($user->profile->first_name).'/'.$user->profile->profile_picture) !!}"></a>
							@else
								<a href="#" onClick="open_file_upload_window({{ $user->id }})"><img alt="Profile Picture" class="widget-img img-circle img-border-light" src="{!! asset('img/av'.rand(1,6).'.png') !!}"></a>
							@endif
								<a class="users-list-name" href="/employee/{{ $user->id }}"><h4 class="mar-no">{{ $user->username }}</h4></a>
							<p class="text-muted mar-btm">{{ $user->employeeInfo->title }}</p>
							<span class="users-list-date">{{ $user->date_joined }}</span>
							<div class="pad-ver">
								<button class="btn btn-primary">Edit</button>
								{!! Form::open(['method' => 'DELETE', 'url' => 'employee/'.$user->employeeInfo->id]) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-warning btn-active-error']) !!}
								{!! Form::close() !!}
								<button class="btn btn-success">Message</button>
							</div>
						</div>
					</div>
					<!--===================================================-->

				</div>

				@endforeach

			</div>
		</div>
		<!--===================================================-->
		<!--End Primary Panel-->
	</div>
	</div>




@stop

@section('scripts')

	<!--Dropzone [ OPTIONAL ]-->
	<script src="{!! asset('plugins/dropzone/dropzone.min.js') !!}"></script>
	<script src="{!! asset('js/profile-dropzone.js') !!}"></script>

@stop




