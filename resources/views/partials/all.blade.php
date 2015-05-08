{{-- var_dump($object->type) }}
	{{----------------------------------------------------------
	--
	--   Find the partial family type needed and import it
	--
	-------------------------------------------------------------}}

@if($object->family == 'box')
	@include('partials.box')

@elseif($object->family == 'button')
	@include('partials.button')

@elseif($object->family == 'field')
	@include('partials.field')

@elseif($object->family == 'chart')
	@include('partials.chart')

@elseif($object->family == 'modal')
	@include('partials.modal')

@elseif($object->family == 'wysiwyg')
	@include('partials.wysiwyg')

@elseif($object->family == 'table')
	@include('partials.table')

@elseif($object->family == 'alert')
	@include('partials.alert')

@endif


