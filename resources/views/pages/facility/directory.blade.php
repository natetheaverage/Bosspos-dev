@extends('app')

@section('title') Compose Message @stop

@section('css')
	@parent

@stop


@section('content')
	<div class="row">
		<div class="col-lg-12">

			<!--Primary Panel-->
			<!--===================================================-->
			<div class="panel panel-bordered panel-dark">
				<div class="panel-heading">
					<div class="panel-control">
						<span class="label label-danger">{{ $facilities->count() }} Facilities</span>
						<button class="btn btn-default" data-target="#demo-panel-collapse" data-toggle="collapse" aria-expanded="true"><i class="fa fa-chevron-down"></i></button>
						<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
					</div>
					<h3 class="panel-title">Employees</h3>
				</div>
				<div id="demo-panel-collapse" class="collapse in panel-body" aria-expanded="true">

					@foreach($facilities as $facility)
						<div class="col-md-4 col-lg-4">

							<!--Profile Widget-->
							<!--===================================================-->
							<div class="panel widget">
								<div class="widget-header bg-mint"></div>
								<div class="widget-body text-center">

									@if($facility->picture != null)

										<a href="#" onClick="open_file_upload_window({{ $facility->id }})"><img alt="Profile Picture" class="widget-img img-circle img-border-light" src="{!! asset('img/users/'.studly_case($facility->name[0]).'/'.studly_case($facility->name).'/'.$facility->picture) !!}"></a>
									@else

										<a href="#" onClick="open_file_upload_window({{ $facility->id }})"><img alt="Profile Picture" class="widget-img img-circle img-border-light" src="{!! asset('img/av'.rand(1,6).'.png') !!}"></a>
									@endif

									<a class="users-list-name" href="/employee/{{ $facility->id }}"><h4 class="mar-no">{{ $facility->name }}</h4></a>
									<p class="text-muted mar-btm">{{ $facility->type }}</p>

									<div class="pad-ver">
										<button class="btn btn-primary">Edit</button>
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
    @parent
	
@stop
