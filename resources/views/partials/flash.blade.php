@if( Session::has('flash_message'))
	<div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}">
		@if( Session::has('flash_message_important'))
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		@endif
		<h4><i class="icon fa fa-check"></i> {{ session('flash_message') }}</h4>
	</div>
@endif