@if(env('APP_EDIT'))
{{-----------------------
-- Edit controls
------------------------}}
<div class="btn-group" style="position: absolute; z-index: 5; margin: 10px 5px;">
	<button type="button" class="btn btn-sm btn-edit btn-rounded btn-mint dropdown-toggle" style="padding: 0px 0px;" data-toggle="dropdown">
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		<li><a href="#" onClick="open_edit_window( {{ $object }} )">Edit</a></li>

		<li><a href="#" onClick="open_destroy_window( {{ $object }} )">Delete</a></li>
	</ul>
</div>
@endif