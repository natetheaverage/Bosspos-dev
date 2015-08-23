<div id="taskTemplate" class="row mar-btm">
	<p>@{{ parentId }}</p>
	<div class="col-sm-12">
		<a class="col-sm-12 list-group-item mar-no">
			<input class="col-sm-12 list-group-item-heading form-textarea project-message-body" v-model="title" />
				<textarea class="col-sm-12 list-group-item-text form-textarea project-message-body"
				          v-model="description"
				          v-on="keyup: reportChange"
				          onload="autosize()">
				</textarea>
		</a>
	</div>
	<div class="btn-group mar-lft">
		<button class="btn btn-mint mar-rgt"><span class="fa fa-user"></span> Delegate</button>
		<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button>
	</div>
</div>