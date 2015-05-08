@if($object->type == null)

	{{------------------------------------------------
	-- Begin accordian
	-- @param: formHeading    {{ $object->value }},
	--         sectionTitle   {{ $object->name }},
	--         sectionClass   {{ $object->class }}
	--------------------------------------------------}}
@elseif($object->type == 'accordionStart')

	<div class="box box-{{ $object->class }}">
		<div class="box-header with-border-info">
			<h3 class="box-title">Registration</h3>
		</div>
		<div class="box-body">
			<div class="box-group" id="accordion">
				<div class="panel box box-{{ $object->class }}">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
					   aria-expanded="true"
					   class="">
						<div class="box-header with-border">
							<h4 class="box-title">
								{{ $object->label }}
							</h4>
						</div>
					</a>
					@if(env('APP_EDIT'))
						@include('edit.button')
					@endif
					<div id="collapseOne"
					     class="panel-collapse collapse in"
					     aria-expanded="true">
						<div class="box-body">

							{{--------------------------------------------
							-- Next accordian section
							-- @param: sectionTitle {{ $object->name }},
							--         sectionClass {{ $object->class }}
							-----------------------------------------------}}
							@elseif($object->type == 'accordionNext')
						</div>
					</div>
				</div>
				<div class="panel box box-{{ $object->class }}">
					<a data-toggle="collapse"
					   data-parent="#accordion"
					   href={{ "#$object->id" }}
					   aria-expanded="false"
					   class="collapsed">
						<div class="box-header with-border">
							<h4 class="box-title">

								{{ $object->label }}

							</h4>
						</div>
					</a>

					@if(env('APP_EDIT'))
						@include('edit.button')
					@endif

					<div id="{{ $object->id }}"
					     class="panel-collapse collapse"
					     aria-expanded="false"
					     style="height: 0px;">
						<div class="box-body">

							{{-------------------------------
							-- End accordian
							-- @param: none
							--------------------------------}}
							@elseif($object->type == 'accordionStop')
								@if(env('APP_EDIT'))
									@include('edit.button')
								@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-------------------------------
	-- Start Box
	-- @param: none
	--------------------------------}}
@elseif($object->type == 'boxStart')
	<div class="box box-{{ $object->class }}">
		<div class="box-header with-border-info">
			<h3 class="box-title">{{ $object->label }}</h3>
		</div>
		<div class="box-body">
			@if(env('APP_EDIT'))
				@include('edit.button')
			@endif
			{{-------------------------------
			-- End box
			-- @param: none
			--------------------------------}}
			@elseif($object->type == 'boxEnd')

		</div>
	</div>

@endif
