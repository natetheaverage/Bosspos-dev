@extends('app')

@section('title')
    @parent
    Dashboard Menu
    @stop

@section('css')
    @parent

    <!--chosen.css [ OPTIONAL ]-->
    <link href="{!! asset('plugins/chosen/chosen.min.css') !!}" rel="stylesheet">

@stop

@section('content')
@parent
{{---------------------------------------------------------------------
-- Make sure dashboard menu was passed through
----------------------------------------------------------------------}}
    @if($dashboardMenu)
		<div class="col-md-12">
    {{------------------------------------------------------------------
	-- Itterate through the menu objects and create each button
	-------------------------------------------------------------------}}
        @foreach($dashboardMenu as $object)
            @include('partials.all')
        @endforeach
	{{------------------------------------------------------------------
	-- If in edit mode generate a create new button
	-------------------------------------------------------------------}}
		@if(env('APP_EDIT'))
			<div class="btn-group pad-all fa fa-plus">
				<a href="interfaceObjects/create/DashboardMain/{!! $dashboardMenu->count() !!}"> Create New Button</a>
			</div>
		@endif
{{------------------------------------------------------------------
-- End Dashboard Menu
-------------------------------------------------------------------}}
		</div>
    @endif

 @stop

@section('scripts')
    @parent

@stop