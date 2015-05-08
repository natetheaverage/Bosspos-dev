@extends('app')

@section('title')Mailbox | Inbox <small>13 new messages</small> @stop

@section('css')
	@parent
			<!-- fullCalendar 2.2.5-->
	<link href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" type="text/css" media='print' />
	<!-- iCheck -->
	<link href="{{ asset('plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
	<div class="row">
		<div class="col-md-3">
			<a href="compose" class="btn btn-primary btn-block margin-bottom">Compose</a>
			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Folders</h3>
				</div>
				<div class="box-body no-padding">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-primary pull-right">12</span></a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
						<li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
						<li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-waring pull-right">65</span></a></li>
						<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
					</ul>
				</div><!-- /.box-body -->
			</div><!-- /. box -->
			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Labels</h3>
				</div>
				<div class="box-body no-padding">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
						<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
						<li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
					</ul>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
		<div class="col-md-9">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Inbox</h3>
					<div class="box-tools pull-right">
						<div class="has-feedback">
							<input type="text" class="form-control input-sm" placeholder="Search Mail"/>
							<span class="glyphicon glyphicon-search form-control-feedback"></span>
						</div>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body no-padding">
					<div class="mailbox-controls">
						<!-- Check all button -->
						<button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
						<div class="btn-group">
							<button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
							<button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
							<button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
						</div><!-- /.btn-group -->
						<button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
						<div class="pull-right">
							1-50/200
							<div class="btn-group">
								<button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
								<button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
							</div><!-- /.btn-group -->
						</div><!-- /.pull-right -->
					</div>
					<div class="table-responsive mailbox-messages">
						<table class="table table-hover table-striped">
							<tbody>

							@for($i =0; $i < 10; $i++)
							<tr>
								<td><input type="checkbox" /></td>
								<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
								<td class="mailbox-name"><a href="read">Alexander Pierce</a></td>
								<td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
								<td class="mailbox-attachment"></td>
								<td class="mailbox-date">5 mins ago</td>
							</tr>
								@endfor
							</tbody>
						</table><!-- /.table -->
					</div><!-- /.mail-box-messages -->
				</div><!-- /.box-body -->
				<div class="box-footer no-padding">
					<div class="mailbox-controls">
						<!-- Check all button -->
						<button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
						<div class="btn-group">
							<button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
							<button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
							<button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
						</div><!-- /.btn-group -->
						<button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
						<div class="pull-right">
							1-50/200
							<div class="btn-group">
								<button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
								<button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
							</div><!-- /.btn-group -->
						</div><!-- /.pull-right -->
					</div>
				</div>
			</div><!-- /. box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
@stop

@section('scripts')
	<!-- iCheck -->
	<script src="{{ asset('plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
	<!-- Page Script -->
	<script>
		$(function () {
			//Enable iCheck plugin for checkboxes
			//iCheck for checkbox and radio inputs
			$('input[type="checkbox"]').iCheck({
				checkboxClass: 'icheckbox_flat-blue',
				radioClass: 'iradio_flat-blue'
			});

			//Enable check and uncheck all functionality
			$(".checkbox-toggle").click(function () {
				var clicks = $(this).data('clicks');
				if (clicks) {
					//Uncheck all checkboxes
					$("input[type='checkbox']", ".mailbox-messages").iCheck("uncheck");
				} else {
					//Check all checkboxes
					$("input[type='checkbox']", ".mailbox-messages").iCheck("check");
				}
				$(this).data("clicks", !clicks);
			});

			//Handle starring for glyphicon and font awesome
			$(".mailbox-star").click(function (e) {
				e.preventDefault();
				//detect type
				var $this = $(this).find("a > i");
				var glyph = $this.hasClass("glyphicon");
				var fa = $this.hasClass("fa");

				//Switch states
				if (glyph) {
					$this.toggleClass("glyphicon-star");
					$this.toggleClass("glyphicon-star-empty");
				}

				if (fa) {
					$this.toggleClass("fa-star");
					$this.toggleClass("fa-star-o");
				}
			});
		});
	</script>
@stop

