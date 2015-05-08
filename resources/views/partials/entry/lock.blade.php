@extends('welcome')

@section('title')
	@parent
	#PAGE_TITLE
@stop



@section('content')
@parent

        <!-- LOCK SCREEN -->
<!--===================================================-->
<div class="cls-content">
    <div class="cls-content-sm panel widget">
        <div class="widget-header bg-primary">
            <h4 class="text-thin">John Doe</h4>
            Administrator
        </div>
        <div class="widget-body">
            <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/av1.png">
            <p>Please enter your password to unlock the screen!</p>
            <form action="index.html">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-block btn-success text-uppercase" type="submit">Login In</button>
                </div>
            </form>
        </div>
    </div>
    <div class="pad-ver">
        <a href="/" class="btn-link mar-rgt">Sign in using different account</a>
    </div>
</div>
<!--===================================================-->

@stop

@section('scripts')
    @parent
	
@stop
