@extends('app')

@section('title') Compose Message @stop

@section('css')
	@parent

@stop


@section('content')
	<div id="ProjecterDirectory">
		<!--Accordion Grouping-->
		<div class="panel-group accordion" id="accordion">
			<!--Accordion header button-->
			<div class="panel panel-bordered panel-@{{ class }}" v-repeat="projects">
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
									<textarea class="form-textarea project-message-body" v-on="keyup: reportChange">@{{ description }}</textarea>
									<textarea class="form-textarea project-message-body" v-on="keyup: reportChange">@{{ updated_at }}</textarea>
								</div>
								<!-- Details -->

								<!-- Tasks -->
								<div id="project@{{ id }}-tasks" class="tab-pane fade">
									<div class="list-group bg-dark">
										<button class="btn btn-block btn-info mar-btm" v-on="click: createNewTask(id, conversation_id, {!! $currentUser->profile->id !!})">New Task</button>
										<div class="row mar-btm" v-repeat="task">
											<div class="col-sm-12">
												<a class="col-sm-12 list-group-item mar-no">
													<input class="col-sm-12 list-group-item-heading form-textarea project-message-body" v-model="title" />
													<textarea class="col-sm-12 list-group-item-text form-textarea project-message-body "
													          v-model="description"
													          v-on="keyup: reportChange">
													</textarea>
												</a>
											</div>
											<div class="btn-group mar-lft">
												<button class="btn btn-mint mar-rgt"><span class="fa fa-user"></span> Delegate</button>
												<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button>
											</div>
										</div>
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


			<input type="text"
		       placeholder="New Name"
		       v-model="newName"
		       v-on="
		       keyup: onKeyUp,
		       blur: onBlur
		       ">
			<pre>@{{ $data | json  }}</pre>

		</div>
	</div>


	<div class="panel-group accordion" id="accordion">
		<div class="panel panel-bordered panel-info">

			<!--Accordion title-->
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-parent="#accordion" data-toggle="collapse" href="#collapseOne" aria-expanded="false" class="collapsed">Project Name</a>
				</h4>
			</div>

			<!--Accordion content-->
			<div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
				<div class="bg-dark">

					<div class="tab-base accordion-tab-base tab-stacked-left bg-trans">

						<!--Nav tabs-->
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true">Details</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false">Tasks</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false">Notes</a>
							</li>
						</ul>

						<!--Tabs Content-->
						<div class="tab-content bg-gray-dark">
							<div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
								<h4 class="text-thin">Details</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
							</div>
							<div id="demo-stk-lft-tab-2" class="tab-pane fade">
								<div class="list-group bg-dark">
									<div class="row mar-btm">
										<div class="col-sm-12">
										<a class="col-sm-12 list-group-item mar-no">
											<div class="btn-group btn-group-vertical pull-right mar-lft">
												<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
												<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
												<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
											</div>
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
										</a>
									</div>
									</div>
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row mar-btm ">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row ">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div id="demo-stk-lft-tab-3" class="tab-pane fade">

								<div class="list-group bg-dark">
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

											<div class="bg-gray-light bord-top mar-top">
												<div class="btn-group pull-right">
													<button class="btn btn-info"><span class="fa fa-thumbs-o-up"></span></button>
													<button class="btn btn-info"><span class="fa fa-thumbs-o-down"></span></button>
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button>
												</div>
											</div>
											</a>
										</div>
									</div>
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

												<div class="bg-gray-light bord-top mar-top">
													<div class="btn-group pull-right">
														<button class="btn btn-info"><span class="fa fa-thumbs-o-up"></span></button>
														<button class="btn btn-info"><span class="fa fa-thumbs-o-down"></span></button>
														<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
														<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

												<div class="bg-gray-light bord-top mar-top">
													<div class="btn-group pull-right">
														<button class="btn btn-info"><span class="fa fa-thumbs-o-up"></span></button>
														<button class="btn btn-info"><span class="fa fa-thumbs-o-down"></span></button>
														<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
														<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>

												<div class="bg-gray-light bord-top mar-top">
													<div class="btn-group pull-right">
														<button class="btn btn-info"><span class="fa fa-thumbs-o-up"></span></button>
														<button class="btn btn-info"><span class="fa fa-thumbs-o-down"></span></button>
														<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
														<button class="btn btn-danger"><span class="fa fa-close"></span> Delete</button>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-bordered panel-info">

			<!--Accordion title-->
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-parent="#accordion" data-toggle="collapse" href="#collapseTwo" class="collapsed" aria-expanded="false">Collapsible Group Item #2</a>
				</h4>
			</div>

			<!--Accordion content-->
			<div class="panel-collapse collapse" id="collapseTwo" aria-expanded="false" style="height: 0px;">
				<div class="bg-dark">

					<div class="tab-base accordion-tab-base tab-stacked-left bg-trans">

						<!--Nav tabs-->
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true">Details</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false">Tasks</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false">Notes</a>
							</li>
						</ul>

						<!--Tabs Content-->
						<div class="tab-content bg-gray-dark">
							<div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
								<h4 class="text-thin">Details</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
							</div>
							<div id="demo-stk-lft-tab-2" class="tab-pane fade">
								<div class="list-group bg-dark">
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row mar-btm ">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row ">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div id="demo-stk-lft-tab-3" class="tab-pane fade">

								<div class="list-group">
									<a href="#" class="list-group-item active">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
									<a href="#" class="list-group-item">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
									<a href="#" class="list-group-item">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
									<a href="#" class="list-group-item">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="panel panel-bordered panel-info">

			<!--Accordion title-->
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-parent="#accordion" data-toggle="collapse" href="#collapseThree" class="collapsed" aria-expanded="false">Collapsible Group Item #3</a>
				</h4>
			</div>

			<!--Accordion content-->
			<div class="panel-collapse collapse" id="collapseThree" aria-expanded="false" style="height: 0px;">
				<div class="bg-dark">

					<div class="tab-base accordion-tab-base tab-stacked-left bg-trans">

						<!--Nav tabs-->
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#demo-stk-lft-tab-1" aria-expanded="true">Details</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-2" aria-expanded="false">Tasks</a>
							</li>
							<li class="">
								<a data-toggle="tab" href="#demo-stk-lft-tab-3" aria-expanded="false">Notes</a>
							</li>
						</ul>

						<!--Tabs Content-->
						<div class="tab-content bg-gray-dark">
							<div id="demo-stk-lft-tab-1" class="tab-pane fade active in">
								<h4 class="text-thin">Details</h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
							</div>
							<div id="demo-stk-lft-tab-2" class="tab-pane fade">
								<div class="list-group bg-dark">
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row mar-btm">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row mar-btm ">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
									<div class="row ">
										<div class="col-sm-12">
											<a class="col-sm-12 list-group-item mar-no">
												<div class="btn-group btn-group-vertical pull-right mar-lft">
													<button class="btn btn-mint"><span class="fa fa-edit"></span> Edit</button>
													<button class="btn btn-mint"><span class="fa fa-user"></span> Delegate</button>
													<button class="btn btn-mint"><span class="fa fa-delete"></span> Delete</button>
												</div>
												<h4 class="list-group-item-heading text-thin">List group item heading</h4>
												<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div id="demo-stk-lft-tab-3" class="tab-pane fade">

								<div class="list-group">
									<a href="#" class="list-group-item active">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
									<a href="#" class="list-group-item">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
									<a href="#" class="list-group-item">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
									<a href="#" class="list-group-item">
										<h4 class="list-group-item-heading text-thin">List group item heading</h4>
										<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="TaskSystem"></div>
@stop

@section('scripts')
    @parent
	
@stop
