



	@if( $object->type == 'largeButton' )
			<div class="btn-group pad-all"  >

				@if(env('APP_EDIT'))
					@include('edit.button')
				@endif
				<a href="{!! $object->href !!}" id="{!! $object->id !!}" class="{!! $object->class !!}">

					@if( $object->notification_style != '' and $object->notification_style != "null" )

						<span class="pull-right badge {!! $object->notification_style !!} badge-{!! $object->notification_color !!} ">" {!! $object->notification_text !!} "</span>

					@endif

					<i class="fa fa-4x {!!$object->icon !!}"></i></br>{!!$object->label!!}

				</a>
			</div>

		{{---------------------------------------------
		-- Main navigation buttons
		----------------------------------------------}}
	@elseif( $object->type == 'navigation' )

			@if(env('APP_EDIT'))
				@include('edit.button')
			@endif

			{{-- Open a SubMenu --}}
			@if($object->extra1 == 'openSub')
				<ul>
			@endif
			<li class="">
				<a href="{!! $object->href !!}" onclick="{{ $object->on_click }}" >
					<i class="fa {!! $object->icon !!}"></i>
					<span class="menu-title">
						<strong>{!! $object->label !!}</strong>
					</span>
					@if($object->extra2 == 'hasSub')
					<i class="arrow"></i>
					@endif
					@if( $object->notification_style != '' and $object->notification_style != "null" )
						<span class="pull-right badge {!! $object->notification_style !!} badge-{!! $object->notification_color !!} ">" {!! $object->notification_text !!} "</span>
					@endif

				</a>

			{{-- Close tier 2 SubMenus --}}
			@if($object->extra2 == 'closeSub1')
			</li>
				</ul>
			</li>

			{{-- Close tier 3 SubMenus --}}
			@elseif($object->extra2 == 'closeSub2')
				</li>
						</ul>
					</li>
				</ul>
			</li>

			{{-- Close Menu Item --}}
			@elseif($object->extra2 != 'hasSub')
			</li>
			@endif


	@elseif( $object->type == 'header main')

		<span class="badge bg-{!! $object->notification_color !!} "> {!! $object->notification_text !!} </span>

	@else

		hi

	@endif




