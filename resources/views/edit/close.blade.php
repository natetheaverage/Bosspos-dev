@extends('blank')


@section('content')
	Close It!
@stop

@section('scripts')
    @parent
    <script>
	    parent.$('.modal-primary').modal('hide');
    </script>
@stop
