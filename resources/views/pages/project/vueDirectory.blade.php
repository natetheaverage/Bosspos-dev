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
			<button v-on="click: showDeleted = !showDeleted" class="btn btn-info mar-btm">View Deleted Projects</button>
			<button v-on="click: createNewProject({!! $currentUser->profile->id !!})" class="btn btn-block btn-info mar-btm"><span class="fa fa-plus"></span></button>
			<div class="panel" id="@{{ project.id }}" v-repeat="project : projects">
				<project
						on-delete="@{{ deleteProject }}"
						this-project="@{{ project }}"
						current-user="{!! $currentUser->profile->id !!}"
						show-deleted="false"
				        on-change="@{{ save }}"
						>
				</project>
			</div>

			<pre>@{{ $data | json }}</pre>
			<input type="text"
		       placeholder="New Name"
		       v-model="newName"
		       v-on="
		       keyup: onKeyUp,
		       blur: onBlur
		       ">

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
