@extends('app')

@section('content')
	@parent
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 ">


				{!! Form::model($fields, ['url' => $formUrl]) !!}
				@foreach($fields as $object)
					@include('partials.all')
				@endforeach
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection

@section('scripts')
	@parent

	<script src="{!! asset('/plugins/timepicker/bootstrap-timepicker.min.js') !!}"
	        type="text/javascript"></script>
	<script src="{!! asset('/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('/cdn.ckeditor.com/4.4.3/standard/ckeditor.js') !!}"></script>
	<script src="{!! asset('/plugins/fastclick/fastclick.min.js') !!}"></script>
	<script src="{!! asset('/plugins/input-mask/jquery.inputmask.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') !!}"
	        type="text/javascript"></script>

	<script>
		// Edit Objects Button
		function open_edit_window(object) {
			var out = '';
			for (var i in object) {
				out += '<div class="form-group col-xs-4"> ' +
				'<label for="' + i + '">' + i + '</label> ' +
				'<input class="form-control" type="textbox" name="' + i + '" value="' + object[i] + '">' +
				'</div>';
			}

			bootbox.dialog({
				className: "modal-primary",
				title: "Editor",
				message: '<div class="row">  ' +
				'<div class="col-md-12"> ' +
				'{!! Form::model($object, ["method" => "PATCH", "action" => ["ListsController@update" , $object->id ]]) !!} ' +
				out +
				'{!! Form::submit("Save", ["class" => "form-control"]) !!}' +
				'{!! Form::close() !!} ' +
				'</div>  </div>'

			});
		}
/*
* Accordion
*  Not sure this is needed
*/


			/*
			 * Auto focus change
			 */
		$("input").bind("input", function() {
			var $this = $(this);
			setTimeout(function() {
				if ( $this.val().length >= parseInt($this.attr("maxlength"),10) )
					$this.next("input").focus();
			},0);
		});


			/*
			*  AdminLTE field functions
			 */
		$(function () {
			//Datemask2 mm/dd/yyyy
			$("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
			$("#phonemask").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
			//Money Euro
			$("[data-mask]").inputmask();

			//Date range picker
			$('#reservation').daterangepicker();
			//Date range picker with time picker
			$('#reservationtime').daterangepicker({
				timePicker: true,
				timePickerIncrement: 30,
				format: 'MM/DD/YYYY h:mm A'
			});
			//Date range as a button
			$('#daterange-btn').daterangepicker(
					{
						ranges: {
							'Today': [moment(), moment()],
							'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
							'Last 7 Days': [moment().subtract('days', 6), moment()],
							'Last 30 Days': [moment().subtract('days', 29), moment()],
							'This Month': [moment().startOf('month'), moment().endOf('month')],
							'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
						},
						startDate: moment().subtract('days', 29),
						endDate: moment()
					},
					function (start, end) {
						$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
					}
			);

			//iCheck for checkbox and radio inputs
			$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
				checkboxClass: 'icheckbox_minimal-blue',
				radioClass: 'iradio_minimal-blue'
			});


			//Colorpicker
			$(".my-colorpicker1").colorpicker();
			//color picker with addon
			$(".my-colorpicker2").colorpicker();

			//Timepicker
			$(".timepicker").timepicker({
				showInputs: false
			});
		});
	</script>
@stop