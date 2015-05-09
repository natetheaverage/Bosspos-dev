@if($object->type == null)

	{{--
	---- Hidden text field
	---- @param:
	--}}
@elseif($object->type == 'hidde')
	<div class="form-group">
			{!! Form::text($object->name, $object->value, ['class'=>'form-control hidden']) !!}
	</div>

	{{--
	-- Uneditable
	-- @param:
	--}}
@elseif($object->type == 'print')
	<div class="form-group">
		<div class="col-md-6">
			{!! Form::text($object->name, '', ['class'=>'form-control hidden', $object->disabled]) !!}
		</div>
	</div>

	{{--
	---- Plano text box
	----
	--}}
@elseif($object->type == 'textBox')
	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-6">
			{!! Form::text($object->name, $fakeInfo[$category[$section]][$object->name], ['class'=>'form-control', 'id'=>$object->hook, $object->disabled]) !!}
		</div>
	</div>

	{{--
	----
	----
	--}}
@elseif($object->type == 'email')
	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3  control-label']) !!}
		<div class="col-md-6">
			{!! Form::email($object->name, $fakeInfo[$category[$section]][$object->name], ['class'=>'form-control', 'id'=>$object->hook, $object->disabled]) !!}
		</div>
	</div>


	{{--
	--
	--
	--}}
@elseif($object->type == 'password')

	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3  control-label']) !!}
		<div class="col-md-4">
			{!! Form::input('password', $object->name, Input::old($object->name),
			['value' => $fakeInfo[$category[$section]][$object->name],
			 'class'=>'form-control',
			  $object->disabled,
			  'maxlength'=>'40',
			  'minlength'=>'6',
			  'data-fv-stringlength-message'=>'The full name must be more than 10 and less than 40 characters'
			]) !!}
		</div>
	</div>


	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'textField')
	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3  control-label']) !!}
		<div class="col-md-6">
			{!! Form::text($object->name, '', ['class'=>'form-control', 'id'=>$object->hook, $object->disabled]) !!}
		</div>
	</div>

	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'phoneMask')
	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3  control-label']) !!}
		<div class="col-md-3">
			{!! Form::text($object->name, '', [ 'class'=>'form-control', 'id'=>'phone', 'placeholder'=>'(999) 999-9999' , $object->disabled]) !!}
		</div>
	</div>


	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'datePicker')

	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3  control-label']) !!}
		<div class="col-sm-3">
			<div id="{!! $object->hook !!}">
				<div class="input-group date">
					{!! Form::text($object->name, $object->value, ['class'=>'form-control', $object->disabled]) !!}
					<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
				</div>
				<small class="text-muted">Auto close on select</small>
			</div>
		</div>
	</div>

	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'dateRange')
	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		<label>Date range:</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
			</div>
			<input type="text" class="form-control pull-right" id="reservation">
		</div>
		<!-- /.input group -->
	</div>

	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'dateTimeRange')
	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		<label>Date and time range:</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-clock-o"></i>
			</div>
			<input type="text" class="form-control pull-right" id="reservationtime">
		</div>
		<!-- /.input group -->
	</div>

	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'dateButton')
	<div class="form-group">
		<label>Date range button:</label>

		<div class="input-group">
			<button class="btn btn-default pull-right" id="daterange-btn">
				<i class="fa fa-calendar"></i> Date range picker
				<i class="fa fa-caret-down"></i>
			</button>
		</div>
	</div>

	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'timePicker')
	<div class="form-group">
		<label>Time picker:</label>

		<div class="input-group">
			<input type="text" class="form-control timepicker">

			<div class="input-group-addon">
				<i class="fa fa-clock-o"></i>
			</div>
		</div>
		<!-- /.input group -->
	</div>

	{{--
	---- Drop Down fields list Picker
	---- @param:  lable                 {{ $object->class }},
	----          the db value          {{ $object->disabled }},
	----          disabled              {{ $object->disabled }},
	----          the menu              {{ $object->optionList($object->value) }},
	----          the default selection {{ $object->lists($object->value)->where('default')->get() }},
	----          disabled              {{ $object->disabled }},
	----          class                 {{ $object->class }},
	--}}
@elseif($object->type == 'dropDown')


	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3 control-label $object->class',
		$object->disabled]) !!}
		<div class="col-md-4">
			{!! Form::select($object->name,
			$object->optionList($object->value),
			$object->lists($object->value)->where('default')->get(),
			['class'=>"form-control chosen-select $object->class",
			'data-live-search'=>'true']) !!}
		</div>
	</div>



	{{--
	----
	---- @param:
	--}}
@elseif($object->type == 'multiSelect')

	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3 control-label $object->class']) !!}
		<div class="col-md-6">
			{!! Form::select($object->name,
			$object->optionList($object->value),
			$object->lists($object->value)->where('default')->get() ,
			['class'=>'form-control chosen-multi-select $object->class',
			'multiple',
			'data-live-search'=>'true' ]) !!}
		</div>
	</div>



	{{--
	---- Checkbox
	---- @param: checked    {{ $object->value }},
	----         disabled   {{ $object->disabled }},
	----         field name {{ $object->title }},
	----         class      {{ $object->class }}
	--}}
@elseif($object->type == 'checkBox')

	<div class="form-group">
		@if(env('APP_EDIT'))
			<div class="input-group-btn">
				@include('edit.button')
			</div>
		@endif
		{!! Form::label( $object->name, $object->label, ['class'=>'col-md-3 control-label $object->class']) !!}
		<div class="input-group col-sm-2">
			<div class="box-inline mar-rgt">
				{!! Form::checkbox($object->name, 1, $object->default, ['class' => 'js-switch', 'checked',  $object->disabled ]) !!}
			</div>
		</div>
	</div>


	{{-------------------------------------------
	---- Radio selection
	---- @param:
	------------------------------------------}}
@elseif($object->type == 'radio')
	<div class="form-group">
		<label>
			<div class="iradio_minimal-blue checked" aria-checked="false" aria-disabled="false"
			     style="position: relative;"><input type="radio" name="r1" class="minimal" checked=""
			                                        style="position: absolute; opacity: 0;">
				<ins class="iCheck-helper"
				     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
			</div>
		</label>
		<label>
			<div class="iradio_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
				<input type="radio" name="r1" class="minimal" style="position: absolute; opacity: 0;">
				<ins class="iCheck-helper"
				     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
			</div>
		</label>
		<label>
			<div class="iradio_minimal-blue disabled" aria-checked="false" aria-disabled="true"
			     style="position: relative;"><input type="radio" name="r1" class="minimal" disabled=""
			                                        style="position: absolute; opacity: 0;">
				<ins class="iCheck-helper"
				     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
			</div>
			Minimal skin radio
		</label>
	</div>

	{{-------------------------------------------
	---- File uploader
	---- @param:
	------------------------------------------}}
@elseif($object->type == 'dropZone')



	{{------------------------------------------------
	---- Submit Button
	---- @param: label
	--------------------------------------------------}}
@elseif($object->type == 'submit')

	{!! Form::submit($object->label, ['class' => 'form-control']) !!}
	@if(env('APP_EDIT'))
		<div class="input-group-btn">
			@include('edit.button')
		</div>
	@endif


@endif






