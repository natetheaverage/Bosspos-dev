@extends('app')

@section('title') Compose Message @stop

@section('css')
	@parent

@stop


@section('content')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12">
			<div id="Projecter" class="panel">
				<!--Panel heading-->
				<div class="panel-heading">
					<div class="panel-control">
						<button class="demo-panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#demo-panel-collapse"><i class="fa fa-refresh"></i></button>
						<button class="btn btn-default" data-target="#demo-panel-collapse" data-toggle="collapse"><i class="fa fa-chevron-down"></i></button>
						<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
					</div>
					<h3 class="panel-title">Expanded by default</h3>
				</div>

				<!--Panel body-->
				<div id="demo-panel-collapse" class="collapse in">
					<div class="panel-body">


						{!! Form::model('project', ['action' => 'ProjectController@store', 'class' => 'form-control']) !!}
						<div class="row">
							<div class="form-group">
								<div class="col-sm-12">
									{!! Form::text('title', '', ['placeholder' => 'New Project', 'class' => 'input-lg text-simibold form-control', 'style' => 'border:none; border-bottom:1px solid #999; font-size:24px;']) !!}
									<small class="text-muted">Project Title</small>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-sm-6">
									<div id="ProjecterDueDatePicker" class="input-group date">
										{!! Form::text('dueDate', $app['date'], ['class'=>'form-control datepicker']) !!}
										<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
									</div>
									<small class="text-muted">Due Date</small>
								</div>

								<div class="col-sm-6">
									<div id="ProjecterDueTimePicker" class="input-group time">
										{!! Form::text('dueTime', $app['date'], ['class'=>'form-control timepicker']) !!}
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
									</div>
									<small class="text-muted">Due Date</small>
								</div>
							</div>
								<!-- /.input group -->
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-sm-12">
									{!! Form::textArea('description', '', ['placeholder' => 'Describe the project here...', 'class' => 'form-control']) !!}
									<small  class="help-block">Description</small>
								</div>
							</div>
						</div>
						{!! Form::submit('Save', ['class' => 'btn form-btn btn-primary']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div id="Tasker" class="panel">
				<!--Panel heading-->
				<div class="panel-heading">
					<div class="panel-control">
						<button class="demo-panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#demo-panel-collapse"><i class="fa fa-refresh"></i></button>
						<button class="btn btn-default" data-target="#demo-panel-collapse" data-toggle="collapse"><i class="fa fa-chevron-down"></i></button>
						<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
					</div>
					<h3 class="panel-title">Expanded by default</h3>
				</div>

				<!--Panel body-->
				<div id="demo-panel-collapse" class="collapse in">
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="TaskSystem" class="bg-dark"></div>
	</div>
@stop

@section('scripts')
    @parent
	
@stop
