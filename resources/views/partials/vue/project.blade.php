<div id="projectTemplate"  >
	<div class="panel panel-bordered panel-info">

		<input v-model="dis" />
		<span v-text="dis"></span>
		<pre>@{{ $data | json }}</pre>

		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-parent="#accordion" data-toggle="collapse" href="#project@{{ id }}" class="collapsed" aria-expanded="false">@{{ title }}</a>
			</h4>
		</div>
		<!--Accordion content collapsible container-->
		<div class="panel-collapse collapse" id="project@{{ id }}" aria-expanded="false" style="height: 0px;">
		<div class="bg-dark">

			<div class="tab-base accordion-tab-base tab-stacked-left bg-trans">

				<!--Project Navigation Tabs-->
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#project@{{ id }}-details" aria-expanded="true">Details</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#project@{{ id }}-tasks" aria-expanded="false">Tasks</a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#project@{{ id }}-notes" aria-expanded="false">Notes</a>
					</li>
				</ul>

				<!--Tab Content-->
				<div class="tab-content bg-gray-dark">

					<!-- Details -->
					<div id="project@{{ id }}-details" class="tab-pane fade active in">
									<textarea class="col-sm-12 list-group-item-text form-textarea project-message-body"
									          v-on="keyup: reportChange"
									          onload="autosize()">@{{ description }}</textarea>
						<input class="form-textarea project-message-body" v-on="keyup: reportChange" v-model="updated_at" disabled />
					</div>
					<!-- Details -->

					<!-- Tasks -->
					<div id="project@{{ id }}-tasks" class="tab-pane fade">
						<div class="list-group bg-dark">
							<button class="btn btn-block btn-info mar-btm" v-on="click: createNewTask(id, conversation_id, {!! $currentUser->profile->id !!})">New Task</button>
							<input id="project-id" v-model="id" />

							@include('partials.vue.task')

							<task v-repeat="tasks" parent-id="@{{* id }}"></task>
						</div>
					</div>
					<!-- Tasks -->



					<div id="project@{{ id }}-notes" class="tab-pane fade">
						<div class="list-group bg-dark">

							<!-- conversation -->
							<button class="btn btn-block btn-info mar-btm">New Note</button>
							<div v-repeat="conversation">
								<div class="row mar-btm" >

									<div class="mar-lft">
										<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button>
									</div>
									<div class="col-sm-12">
										<a class="col-sm-12  list-group-item mar-no">
											<div class="col-sm-3 bord-rgt pull-left">
												<img src="/img/av1.png">
												<h4>Name</h4>
											</div>
											<input class="col-sm-9 list-group-item-heading form-textarea project-message-body" v-model="title" />
													<textarea class="col-sm-9 list-group-item-text form-textarea project-message-body "
													          v-model="description"
													          v-on="keyup: reportChange"></textarea>
										</a>
									</div>
								</div>

								<!-- notes -->
								<div class="timeline">
									<div class="timeline-header">
										<div class="timeline-entry" v-repeat="message">
											<div class="timeline-stat">
												<div class="timeline-icon">
													<img src="img/av4.png" alt="Image" />
												</div>
												<div class="timeline-time">3 Hours ago</div>
											</div>
											<div class="timeline-label">
												<div class="btn-group pull-right">
													<button class="btn btn-sm btn-mint"><span class="fa fa-edit"></span></button>
													<button class="btn btn-sm btn-danger"><span class="fa fa-close"></span></button>
												</div>
												<span class="mar-no pad-btm"><a href="#" class="btn-link primary text-semibold">Lisa D.</a> added this note to <a href="#">This Project this conversation</a></span>
												<div class='input-group display-flex'>
													<textarea class="form-control form-textarea project-message-body"></textarea>
												</div>
											</div>
										</div>
										<button className="btn btn-primary " ><span className="fa fa-plus"></span> Comment</button>
									</div>
								</div>
								<!-- notes -->


							</div>
							<!-- conversation -->



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>