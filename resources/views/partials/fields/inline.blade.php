@extends('app')

@section('css')
	@parent
@stop


@section('content')
@parent

        <!-- Inline Form  -->
<!--===================================================-->
<form class="form-inline">
    <div class="form-group">
        <label for="demo-inline-inputmail" class="sr-only">Email address</label>
        <input type="email" placeholder="Enter email" id="demo-inline-inputmail" class="form-control">
    </div>
    <div class="form-group">
        <label for="demo-inline-inputpass" class="sr-only">Password</label>
        <input type="password" placeholder="Password" id="demo-inline-inputpass" class="form-control">
    </div>
    <div class="checkbox">
        <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Remember me</label>
    </div>
    <button class="btn btn-primary" type="submit">Sign in</button>
</form>
<!--===================================================-->
<!-- End Inline Form  -->

@stop

@section('scripts')
    @parent
	
@stop
