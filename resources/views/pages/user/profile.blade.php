@extends('app')

@section('title') Profile @stop

@section('css')
	@parent

@stop


@section('content')
	<div class="row">
		<div class="col-lg-12">

			<!--Profile Heading-->
			<!--===================================================-->
			<div class="panel">
				<div class="panel-bg-cover">
					<img class="img-responsive" src="{!! asset('img/thumbs/img1.jpg') !!}" alt="Image">
				</div>
				<div class="panel-media">

					@if($user->profile->profile_picture != null)
						<a href="#" onClick="open_file_upload_window({{ $user->id }})"><img alt="Profile Picture" class="panel-media-img img-circle img-border-light" src="{!! asset('img/users/'.studly_case($user->profile->last_name[0]).'/'.studly_case($user->profile->last_name).studly_case($user->profile->first_name).'/'.$user->profile->profile_picture) !!}"></a>
					@else
						<a href="#" onClick="open_file_upload_window({{ $user->id }})"><img alt="Profile Picture" class="panel-media-img img-circle img-border-light" src="{!! asset('img/av'.rand(1,6).'.png') !!}"></a>
					@endif
					<div class="row">
						<div class="col-lg-7">
							<h3 class="panel-media-heading"> {!! $user->profile->first_name !!} {!! studly_case($user->profile->last_name) !!}</h3>
							<a href="#" class="btn-link">{!! $user->username !!} </a>

							<p class="text-muted mar-btm">{!! $user->title !!} </p>
						</div>
						<div class="col-lg-5 text-lg-right">
							<button class="btn btn-sm btn-primary">Details</button>
							<button href="mailbox" class="btn btn-sm btn-mint btn-icon fa fa-envelope icon-lg"></button>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<h4>Profile info</h4>
					<button name="editProfile" class="btn btn-info btn-active-success" onclick="edit_profile()">Edit</button>
					{!! var_dump($user->profile->toArray()) !!}

					<h4>Customer info</h4>
					{!! var_dump($user->customerInfo->toArray()) !!}

					<h4>Employee info</h4>
					{!! var_dump($user->employeeInfo->toArray()) !!}


				</div>
			</div>
			<!--===================================================-->

		</div>
	</div>

@stop

@section('scripts')
	
@stop
