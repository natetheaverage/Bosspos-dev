@extends('blank')

@section('title') User Directory @stop

@section('css')
	@parent

	<!--Dropzone -->
	<link href="{!! asset('plugins/dropzone/dropzone.css') !!}" rel="stylesheet">

@stop

@section('content')


		<!--Dropzonejs-->
		<!--===================================================-->

		{!! Form::open( ['action' => 'ProfileController@uploadAndSaveProfilePicture', 'id' => 'dropzone', 'class' => 'dropzone']) !!}
			<input type="hidden" id="profileId" name="profileId" value="{!! $userProfile->id !!}" />
			<div class="dz-default dz-message">
				<div class="dz-icon icon-wrap icon-circle icon-wrap-md">
					<i class="fa fa-cloud-upload fa-3x"></i>
				</div>
				<div>
					<p class="dz-text">Drop files to upload</p>
					<p class="text-muted">or click to pick manually</p>
				</div>
			</div>
			<div class="fallback">

				<input name="file" type="file" multiple />
			</div>
		{!! Form::close() !!}
		<!--===================================================-->
		<!-- End Dropzonejs -->

@stop

@section('scripts')

	<!--Dropzone [ OPTIONAL ]-->
	<script src="{!! asset('plugins/dropzone/dropzone.min.js') !!}"></script>
	<script src="{!! asset('js/profile-dropzone.js') !!}"></script>

@stop