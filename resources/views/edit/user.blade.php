@extends('app')

@section('title') Edit User @stop

@section('css')
	@parent

@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Register</div>
					<div class="panel-body">
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
						{!! Form::model($oldInfo, ['method' => 'PATCH', 'action' => ['UsersController@update', $oldInfo->id ]]) !!}
						@foreach($fields as $field)
							<div class="form-group col-xs-6">
								{!! Form::label( $field, $field, ['class'=>'col-md-4 control-label']) !!}
								<div class="col-md-12">
									{!! Form::text( $field, $oldInfo->$field, ['class'=>'form-control']) !!}
								</div>
							</div>
						@endforeach
							{!! Form::submit('Save', ['class'=>'form-control']) !!}
							{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
