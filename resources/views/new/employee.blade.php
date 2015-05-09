@extends('app')

@section('title')
	@parent
	Register
@stop

@section('css')
	@parent
            <!--Switchery [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/switchery/switchery.min.css') !!}" rel="stylesheet">

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/bootstrap-select/bootstrap-select.min.css') !!}" rel="stylesheet">

    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/bootstrap-validator/bootstrapValidator.min.css') !!}" rel="stylesheet">

	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<link href=" {!! asset('plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet') !!}">

	<!--chosen.css [ OPTIONAL ]-->
	<link href="{!! asset('plugins/chosen/chosen.min.css') !!}" rel="stylesheet">



@stop


@section('content')
@parent


<div class="row">
    <div class="col-lg-6">
        <div class="panel">

	        <!-- Form wizard with Validation -->
	        <!--===================================================-->
	        <div id="employee-registration-wizard">

		        <!--Nav-->
		        <ul class="wz-nav-off wz-icon-inline">
			        @foreach($category as $order => $categoryName)
			        <li class="col-md-3 bg-mint">
				        <a id="wiz-tab{!! $order !!}" data-toggle="tab" href="#employee-registration-tab{!! $order !!}">
					        <span class="icon-wrap icon-wrap-xs bg-trans-dark"><i class="fa {!! $wizardIcons[$order] !!}"></i></span> {!! studly_case($categoryName) !!}
				        </a>
			        </li>
					@endforeach
		        </ul>

		        <!--Progress bar-->
		        <div class="progress progress-sm progress-striped active">
			        <div class="progress-bar progress-bar-info"></div>
		        </div>

		        <!--Form-->
		        {!! Form::model($fields, ['url' => $formUrl, 'id' => 'employee-registration-wizard-form', 'class' => 'form-horizontal']) !!}
		        <input type="hidden" name="stage" id="wizard-stage" value="{!! $stage !!}">
		        </input>
		        <div class="panel-body">
			        <div class="tab-content">

			        @for($section = 1; $section <= $sections; $section++)

				        <div id="employee-registration-tab{!! $section !!}" class="tab-pane @if($section == 2)fade @endif @if($section == 5)mar-btm @endif" >

				        @foreach($fields->where('extra1', $category[$section]) as $object)

					        @include('partials.all')

				        @endforeach
						</div>
			        @endfor
			        </div>


			        <!--Footer button-->
			        <div class="panel-footer text-right">
				        <div class="box-inline">
					        <button type="button" class="previous btn btn-primary">Previous</button>
					        <button type="button" class="next btn btn-primary">Next</button>
					        <button type="submit" value="Save" class="finish btn btn-warning" disabled>Save</button>
				        </div>
			        </div>

		        {!! Form::close() !!}
	        </div>
	        <!--===================================================-->
	        <!-- End Form wizard with Validation -->

        </div>
    </div>
</div>



@stop

@section('scripts')
    @parent


            <!--Switchery [ Required ]-->
    <script src=" {!! asset('plugins/switchery/switchery.min.js') !!}"></script>


    <!--Bootstrap Select [ Required ]-->
    <script src=" {!! asset('plugins/bootstrap-select/bootstrap-select.min.js') !!}"></script>


    <!--Bootstrap Wizard [ Required ]-->
    <script src=" {!! asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') !!}"></script>


    <!--Bootstrap Validator [ Required ]-->
    <script src=" {!! asset('plugins/bootstrap-validator/bootstrapValidator.min.js') !!}"></script>


	<!--Masked Input [ Required ]-->
	<script src="{!! asset('plugins/masked-input/jquery.maskedinput.min.js') !!}"></script>


    <!--Demo script [ DEMONSTRATION ]-->
    <script src=" {!! asset('js/demo/nifty-demo.min.js') !!}"></script>


    <!--employee resistration Wizard [ MEI ]-->
    <script src=" {!! asset('js/employee-registration.js') !!}"></script>


	<!--Bootstrap Datepicker [ OPTIONAL ]-->
	<script src="{!! asset('plugins/bootstrap-datepicker/bootstrap-datepicker.js') !!}"></script>


		<!--Chosen [ OPTIONAL ]-->
    <script src="{!! asset('plugins/chosen/chosen.jquery.min.js') !!}"></script>





@stop
