@extends('app')

@section('title')
    @parent
    Form Elements
@stop

@section('css')
    @parent

            <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{!! asset('plugins/bootstrap-select/bootstrap-select.min.css') !!}" rel="stylesheet">


    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="{!! asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/chosen/chosen.min.css') !!} " rel="stylesheet">


    <!--noUiSlider [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/noUiSlider/jquery.nouislider.min.css') !!} " rel="stylesheet">
    <link href=" {!! asset('plugins/noUiSlider/jquery.nouislider.pips.min.css') !!} " rel="stylesheet">


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') !!} " rel="stylesheet">


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/bootstrap-datepicker/bootstrap-datepicker.css') !!} " rel="stylesheet">


    <!--Dropzone [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/dropzone/dropzone.css') !!} " rel="stylesheet">


    <!--Summernote [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/summernote/summernote.min.css') !!} " rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href=" {!! asset('css/demo/nifty-demo.min.css') !!} " rel="stylesheet">


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/bootstrap-validator/bootstrapValidator.min.css') !!}" rel="stylesheet">



@stop


@section('content')
    @parent




    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">Inline Form</h3>
        </div>
        <div class="panel-body">

            @append('partials.fields.inline')


        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Block styled form</h3>
                </div>

                <!--Block Styled Form -->
                <!--===================================================-->
                <form>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Firstname</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Lastname</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Website</label>
                                    <input type="url" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Block Styled Form -->

            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Horizontal form</h3>
                </div>

                <!--Horizontal Form-->
                <!--===================================================-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputemail">Email</label>

                            <div class="col-sm-9">
                                <input type="email" placeholder="Email" id="demo-hor-inputemail" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-hor-inputpass">Password</label>

                            <div class="col-sm-9">
                                <input type="password" placeholder="Password" id="demo-hor-inputpass"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <label class="form-checkbox form-normal form-primary">
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-info" type="submit">Sign in</button>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Horizontal Form-->

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Input size</h3>
                </div>


                <!--Input Size-->
                <!--===================================================-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="demo-is-inputsmall">Small Input</label>

                            <div class="col-sm-6">
                                <input type="text" placeholder=".input-sm" class="form-control input-sm"
                                       id="demo-is-inputsmall">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-is-inputnormal" class="col-sm-3 control-label">Normal Input</label>

                            <div class="col-sm-6">
                                <input type="text" placeholder="Normal" class="form-control" id="demo-is-inputnormal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-is-inputlarge" class="col-sm-3 control-label">Large Input</label>

                            <div class="col-sm-6">
                                <input type="text" placeholder=".input-lg" class="form-control input-lg"
                                       id="demo-is-inputlarge">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Grid Inputs</label>

                            <div class="col-sm-3">
                                <input type="text" placeholder=".col-sm-3" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-5 col-sm-offset-3">
                                <input type="text" placeholder=".col-sm-5" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-3">
                                <input type="text" placeholder=".col-sm-7" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <input type="text" placeholder=".col-sm-9" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-info btn-labeled fa fa-user fa-lg" type="submit">Login</button>
                                <button class="btn btn-warning btn-labeled fa fa-repeat fa-lg" type="reset">Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Input Size-->


            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">No label form</h3>
                </div>

                <!--No Label Form-->
                <!--===================================================-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 mar-btm">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-4 mar-btm">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-4 mar-btm">
                                <input type="url" class="form-control" placeholder="Website">
                            </div>
                        </div>
                        <textarea placeholder="Message" rows="13" class="form-control"></textarea>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-primary">Send message</button>
                    </div>
                </form>
                <!--===================================================-->
                <!--End No Label Form-->

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Icons Addons</h3>
                </div>

                <!--Icons Addons-->
                <!--===================================================-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="input-group mar-btm">
                            <span class="input-group-addon"><i class="fa fa-star fa-lg"></i></span>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="input-group mar-btm">
                            <input type="email" class="form-control" placeholder="Folder name">
                            <span class="input-group-addon"><i class="fa fa-folder fa-lg"></i></span>
                        </div>
                        <div class="input-group mar-btm">
                            <span class="input-group-addon"><i class="fa fa-dollar fa-lg"></i></span>
                            <input type="text" class="form-control">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Icons Addons-->

            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Checkboxes and radio addons</h3>
                </div>

                <!--Checkboxes and Radio addons-->
                <!--===================================================-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="input-group mar-btm">
											<span class="input-group-addon">
												<label class="form-checkbox form-icon active">
                                                    <input type="checkbox" checked>
                                                </label>
											</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group mar-btm">
											<span class="input-group-addon">
												<label class="form-radio form-icon">
                                                    <input type="radio" name="input-group-radio">
                                                </label>
											</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group mar-btm">
											<span class="input-group-addon">
												<label class="form-radio form-icon">
                                                    <input type="radio" name="input-group-radio">
                                                </label>
											</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Checkboxes and Radio addons-->

            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Buttons Addons</h3>
                </div>

                <!--Buttons Addons-->
                <!--===================================================-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="input-group mar-btm">
											<span class="input-group-btn">
												<button class="btn btn-warning" type="button">Submit</button>
											</span>
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="input-group mar-btm">
                            <input type="text" placeholder="Search" class="form-control">
											<span class="input-group-btn">
												<button class="btn btn-danger btn-labeled fa fa-search" type="button">
                                                    Search
                                                </button>
											</span>
                        </div>
                        <div class="input-group mar-btm">
											<span class="input-group-btn">
												<button class="btn btn-purple" type="button"><i
                                                            class="fa fa-thumbs-up"></i></button>
											</span>
                            <input type="text" placeholder="Comment" class="form-control">
											<span class="input-group-btn">
												<button class="btn btn-purple" type="button"><i
                                                            class="fa fa-thumbs-down"></i></button>
											</span>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Buttons Addon-->

            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Dropdowns Addons</h3>
                </div>

                <!--Dropdowns Addons-->
                <!--===================================================-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="input-group mar-btm">
                            <div class="input-group-btn">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    Action <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <input type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="input-group mar-btm">
                            <input type="email" placeholder="Email" class="form-control">

                            <div class="input-group-btn">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    Action <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-group mar-btm">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="button">Action</button>
                                <button data-toggle="dropdown"
                                        class="btn btn-primary dropdown-toggle dropdown-toggle-icon" type="button"><i
                                            class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <input type="text" placeholder="Comment" class="form-control">

                            <div class="input-group-btn">
                                <button data-toggle="dropdown"
                                        class="btn btn-primary dropdown-toggle dropdown-toggle-icon" type="button"><i
                                            class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Dropdowns Addons-->

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Validation States</h3>
                </div>

                <!--Validation States-->
                <!--===================================================-->
                <div class="panel-body">
                    <div class="form-group">
                        <label for="demo-vs-definput" class="control-label">Default input</label>
                        <input type="text" id="demo-vs-definput" class="form-control">
                    </div>
                    <div class="form-group has-warning">
                        <label for="demo-vs-warinput" class="control-label">Input with warning</label>
                        <input type="text" id="demo-vs-warinput" class="form-control">
                    </div>
                    <div class="form-group has-error">
                        <label for="demo-vs-errinput" class="control-label">Input with error</label>
                        <input type="text" id="demo-vs-errinput" class="form-control">
                    </div>
                    <div class="form-group has-success">
                        <label for="demo-vs-scsinput" class="control-label">Input with success</label>
                        <input type="text" id="demo-vs-scsinput" class="form-control">
                    </div>
                </div>
                <!--===================================================-->
                <!--END OF VALIDATION STATES-->

            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">With optional icons</h3>
                </div>
                <div class="panel-body">

                    <!--Validation States-->
                    <!--===================================================-->
                    <div class="form-group has-feedback">
                        <label for="demo-oi-definput" class="control-label">Default input</label>
                        <input type="text" id="demo-oi-definput" class="form-control">
                        <span class="fa fa-user fa-lg form-control-feedback"></span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label for="demo-oi-sccinput" class="control-label">Input with success</label>
                        <input type="text" id="demo-oi-sccinput" class="form-control">
                        <span class="fa fa-check fa-lg form-control-feedback"></span>
                    </div>
                    <div class="form-group has-warning has-feedback">
                        <label for="demo-oi-warinput" class="control-label">Input with warning</label>
                        <input type="text" id="demo-oi-warinput" class="form-control">
                        <span class="fa fa-warning fa-lg form-control-feedback"></span>
                    </div>
                    <div class="form-group has-error has-feedback">
                        <label for="demo-oi-errinput" class="control-label">Input with error</label>
                        <input type="text" id="demo-oi-errinput" class="form-control">
                        <span class="fa fa-times fa-lg form-control-feedback"></span>
                    </div>
                    <!--===================================================-->
                    <!--End Validation States-->

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Basic Form Elements</h3>
                </div>


                <!-- BASIC FORM ELEMENTS -->
                <!--===================================================-->
                <form class="panel-body form-horizontal form-padding">

                    <!--Static-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Static</label>

                        <div class="col-md-9"><p class="form-control-static">Username</p></div>
                    </div>

                    <!--Text Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-text-input">Text Input</label>

                        <div class="col-md-9">
                            <input type="text" id="demo-text-input" class="form-control" placeholder="Text">
                            <small class="help-block">This is a help text</small>
                        </div>
                    </div>

                    <!--Email Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-email-input">Email Input</label>

                        <div class="col-md-9">
                            <input type="email" id="demo-email-input" class="form-control"
                                   placeholder="Enter your email">
                            <small class="help-block">Please enter your email</small>
                        </div>
                    </div>

                    <!--Password-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-password-input">Password</label>

                        <div class="col-md-9">
                            <input type="password" id="demo-password-input" class="form-control" placeholder="Password">
                            <small class="help-block">Please enter password</small>
                        </div>
                    </div>

                    <!--Readonly Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-readonly-input">Readonly input</label>

                        <div class="col-md-9">
                            <input type="text" id="demo-readonly-input" class="form-control"
                                   placeholder="Readonly input here..." readonly>
                        </div>
                    </div>

                    <!--Textarea-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="demo-textarea-input">Textarea</label>

                        <div class="col-md-9">
                            <textarea id="demo-textarea-input" rows="9" class="form-control"
                                      placeholder="Your content here.."></textarea>
                        </div>
                    </div>

                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Radio Buttons</label>

                        <div class="col-md-9">
                            <div class="col-md-6 pad-no">

                                <!-- Radio Buttons -->
                                <div class="radio">
                                    <label class="form-radio form-normal active"><input type="radio" checked=""
                                                                                        name="de-blk"> Option 1
                                        (pre-checked)</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-normal"><input type="radio" name="de-blk"> Option
                                        2</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-normal"><input type="radio" name="de-blk"> Option
                                        3</label>
                                </div>

                            </div>
                            <div class="col-md-6 pad-no">

                                <!-- Icon Radio Buttons -->
                                <div class="radio">
                                    <label class="form-radio form-icon active"><input type="radio" checked=""
                                                                                      name="ico-blk"> Option 1
                                        (pre-checked)</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-icon"><input type="radio" name="ico-blk"> Option
                                        2</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-icon"><input type="radio" name="ico-blk"> Option
                                        3</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Inline Radio buttons</label>

                        <div class="col-md-9">
                            <div class="radio">

                                <!-- Inline radio buttons -->
                                <label class="form-radio form-normal active"><input type="radio" checked=""
                                                                                    name="def-w-label"> Option 1
                                    (pre-checked)</label>
                                <label class="form-radio form-normal"><input type="radio" name="def-w-label"> Option
                                    2</label>
                                <label class="form-radio form-normal"><input type="radio" name="def-w-label"> Option
                                    3</label>

                            </div>
                            <hr class="hr-sm">
                            <div class="radio">

                                <!-- Inline Icon Radios Buttons -->
                                <label class="form-radio form-icon active"><input type="radio" checked=""
                                                                                  name="ico-w-label"> Option 1
                                    (pre-checked)</label>
                                <label class="form-radio form-icon"><input type="radio" name="ico-w-label"> Option
                                    2</label>
                                <label class="form-radio form-icon"><input type="radio" name="ico-w-label"> Option
                                    3</label>

                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Checkboxes</label>

                        <div class="col-md-9">
                            <div class="col-md-6 pad-no form-block">

                                <!-- Checkboxes -->
                                <div class="checkbox">
                                    <label class="form-checkbox form-normal form-primary active"><input type="checkbox"
                                                                                                        checked="">
                                        Option 1 (pre-checked)</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option
                                        2</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option
                                        3</label>
                                </div>

                            </div>
                            <div class="col-md-6 pad-no form-block">

                                <!-- Icon Checkboxes -->
                                <div class="checkbox">
                                    <label class="form-checkbox form-icon active"><input type="checkbox" checked="">
                                        Option 1 (pre-checked)</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-icon"><input type="checkbox"> Option 2</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-icon"><input type="checkbox"> Option 3</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Inline Checkboxes</label>

                        <div class="col-md-9">
                            <div class="checkbox">

                                <!-- Inline Checkboxes -->
                                <label class="form-checkbox form-normal form-primary active"><input type="checkbox"
                                                                                                    checked=""> Option 1
                                    (pre-checked)</label>
                                <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option
                                    2</label>
                                <label class="form-checkbox form-normal form-primary"><input type="checkbox"> Option
                                    3</label>

                            </div>
                            <hr class="hr-sm">
                            <div class="checkbox">

                                <!-- Inline Icon Checkboxes -->
                                <label class="form-checkbox form-icon active"><input type="checkbox" checked=""> Option
                                    1 (pre-checked)</label>
                                <label class="form-checkbox form-icon"><input type="checkbox"> Option 2</label>
                                <label class="form-checkbox form-icon"><input type="checkbox"> Option 3</label>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">File input</label>

                        <div class="col-md-9">
											<span class="pull-left btn btn-default btn-file">
											Browse... <input type="file">
											</span>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!-- END BASIC FORM ELEMENTS -->


            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Disabled</h3>
                </div>


                <!-- DISABLED FORM ELEMENTS-->
                <!--===================================================-->
                <form class="panel-body form-horizontal form-padding">

                    <!--Static-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Static</label>

                        <div class="col-md-9">
                            <p class="form-control-static">Username</p>
                        </div>
                    </div>

                    <!--Disabled Text Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Text Input</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Text" disabled>
                            <small class="help-block">This is a help text</small>
                        </div>
                    </div>

                    <!--Disabled Email Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Email Input</label>

                        <div class="col-md-9">
                            <input type="email" class="form-control" placeholder="Enter your email" disabled>
                            <small class="help-block">Please enter your email</small>
                        </div>
                    </div>

                    <!--Disabled Password-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>

                        <div class="col-md-9">
                            <input type="password" class="form-control" placeholder="Password" disabled>
                            <small class="help-block">Please enter password</small>
                        </div>
                    </div>

                    <!--Readonly Input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Readonly input</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Readonly input here..." readonly
                                   disabled>
                        </div>
                    </div>


                    <!--Disabled Textarea-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Textarea</label>

                        <div class="col-md-9">
                            <textarea rows="9" class="form-control" placeholder="Your content here.."
                                      disabled></textarea>
                        </div>
                    </div>

                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Radio Buttons</label>

                        <div class="col-md-9">
                            <div class="col-md-6 pad-no">

                                <!--Disabled Radio Buttons -->
                                <div class="radio">
                                    <label class="form-radio form-normal active disabled"><input type="radio"
                                                                                                 name="de-blk2" checked
                                                                                                 disabled> Option 1
                                        (pre-checked)</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-normal disabled"><input type="radio" name="de-blk2"
                                                                                          disabled> Option 2</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-normal disabled"><input type="radio" name="de-blk2"
                                                                                          disabled> Option 3</label>
                                </div>

                            </div>
                            <div class="col-md-6 pad-no form-block">

                                <!--Disabled Icon Radio Buttons -->
                                <div class="radio">
                                    <label class="form-radio form-icon active disabled"><input type="radio"
                                                                                               name="ico-blk2" checked
                                                                                               disabled> Option 1
                                        (pre-checked)</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-icon disabled"><input type="radio" name="ico-blk2"
                                                                                        disabled> Option 2</label>
                                </div>
                                <div class="radio">
                                    <label class="form-radio form-icon disabled"><input type="radio" name="ico-blk2"
                                                                                        disabled> Option 3</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Inline Radio Buttons</label>

                        <div class="col-md-9">
                            <div class="radio">

                                <!-- Inline Disabled Radios Buttons -->
                                <label class="form-radio form-normal active disabled"><input type="radio"
                                                                                             name="def-w-label2" checked
                                                                                             disabled> Option 1
                                    (pre-checked)</label>
                                <label class="form-radio form-normal disabled"><input type="radio" name="def-w-label2"
                                                                                      disabled> Option 2</label>
                                <label class="form-radio form-normal disabled"><input type="radio" name="def-w-label2"
                                                                                      disabled> Option 3</label>

                            </div>
                            <hr class="hr-sm">
                            <div class="radio">

                                <!-- Inline Disabled Icon Radios Buttons -->
                                <label class="form-radio form-icon active disabled"><input type="radio"
                                                                                           name="ico-w-label2" checked
                                                                                           disabled> Option 1
                                    (pre-checked)</label>
                                <label class="form-radio form-icon disabled"><input type="radio" name="ico-w-label2"
                                                                                    disabled> Option 2</label>
                                <label class="form-radio form-icon disabled"><input type="radio" name="ico-w-label2"
                                                                                    disabled> Option 3</label>

                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Checkboxes</label>

                        <div class="col-md-9">
                            <div class="col-md-6 pad-no">

                                <!-- Disabled Checkboxes -->
                                <div class="checkbox">
                                    <label class="form-checkbox form-normal form-primary active disabled"><input
                                                type="checkbox" checked disabled> Option 1 (pre-checked)</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-normal form-primary disabled"><input
                                                type="checkbox" disabled> Option 2</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-normal form-primary disabled"><input
                                                type="checkbox" disabled> Option 3</label>
                                </div>

                            </div>
                            <div class="col-md-6 pad-no">

                                <!-- Disabled Icon Checkboxes -->
                                <div class="checkbox">
                                    <label class="form-checkbox form-icon active disabled"><input type="checkbox"
                                                                                                  checked disabled>
                                        Option 1 (pre-checked)</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled>
                                        Option 2</label>
                                </div>
                                <div class="checkbox">
                                    <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled>
                                        Option 3</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group pad-ver">
                        <label class="col-md-3 control-label">Inline Checkboxes</label>

                        <div class="col-md-9">
                            <div class="checkbox">

                                <!-- Inline Disabled Checkboxes -->
                                <label class="form-checkbox form-normal form-primary active disabled"><input
                                            type="checkbox" checked disabled> Option 1 (pre-checked)</label>
                                <label class="form-checkbox form-normal form-primary disabled"><input type="checkbox"
                                                                                                      disabled> Option 2</label>
                                <label class="form-checkbox form-normal form-primary disabled"><input type="checkbox"
                                                                                                      disabled> Option 3</label>

                            </div>
                            <hr class="hr-sm">
                            <div class="checkbox">

                                <!-- Inline Disabled Icon Checkboxes -->
                                <label class="form-checkbox form-icon active disabled"><input type="checkbox" checked
                                                                                              disabled> Option 1
                                    (pre-checked)</label>
                                <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled> Option
                                    2</label>
                                <label class="form-checkbox form-icon disabled"><input type="checkbox" disabled> Option
                                    3</label>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">File input</label>

                        <div class="col-md-9">
											<span class="pull-left btn btn-default btn-file disabled">
												Browse... <input type="file" disabled>
											</span>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!-- END DISABLED FORM ELEMENTS -->

            </div>
        </div>
    </div>


    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Form Components</h1>


    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <div class="row">
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bootstrap Tags Input</h3>
                    </div>
                    <div class="panel-body">
                        <p>jQuery plugin providing a Twitter Bootstrap user interface for managing tags</p><br>

                        <!-- Bootstrap Tags Input -->
                        <!--===================================================-->
                        <input type="text" class="form-control" placeholder="Add a tag"
                               value="Sport, Movie, Documents, Video" data-role="tagsinput">
                        <!--===================================================-->

                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Chosen</h3>
                    </div>
                    <div class="panel-body">
                        <p>Chosen is a jQuery plugin that makes long, unwieldy select boxes much more user-friendly.</p>
                        <br>


                        <!-- Default choosen -->
                        <!--===================================================-->
                        <select data-placeholder="Choose a Country..." id="demo-chosen-select" tabindex="2">
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Aland Islands">Aland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of
                                The
                            </option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D&apos;ivoire">Cote D\'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curacao">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People\'s
                                Republic of
                            </option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People&apos;s Democratic Republic">Lao People\'s Democratic Republic
                            </option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                                Republic of
                            </option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                            <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and
                                Tristan da Cunha
                            </option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                                Sandwich Islands
                            </option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <!--===================================================-->

                        <br>
                        <hr>
                        <br>
                        <h5 class="text-thin mar-btm">Multiple selects</h5>

                        <!-- Multiple Select Choosen -->
                        <!--===================================================-->
                        <select id="demo-cs-multiselect" data-placeholder="Choose a Country..." multiple tabindex="4">
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Aland Islands">Aland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of
                                The
                            </option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D&apos;ivoire">Cote D\'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curacao">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People\'s
                                Republic of
                            </option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People&apos;s Democratic Republic">Lao People\'s Democratic Republic
                            </option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                                Republic of
                            </option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                            <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and
                                Tristan da Cunha
                            </option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                                Sandwich Islands
                            </option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <!--===================================================-->

                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bootstrap Select</h3>
                    </div>
                    <div class="panel-body">
                        <p>A custom select for Twitter Bootstrap using button dropdown.</p><br>


                        <!-- Default Bootstrap Select -->
                        <!--===================================================-->
                        <select class="selectpicker">
                            <option>HTML</option>
                            <option>CSS</option>
                            <option>jQuery</option>
                            <option>Javascript</option>
                        </select>
                        <!--===================================================-->

                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Group</p>


                        <!-- Bootstrap Select with Option Groups -->
                        <!--===================================================-->
                        <select class="selectpicker">
                            <optgroup label="Music">
                                <option>Pop</option>
                                <option>Rap</option>
                                <option>Rock</option>
                                <option>Sountrack</option>
                            </optgroup>
                            <optgroup label="Movie">
                                <option>Action</option>
                                <option>Comedy</option>
                                <option>Adventure</option>
                                <option>Drama</option>
                                <option>Romance</option>
                            </optgroup>
                        </select>
                        <!--===================================================-->


                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Multiple selects</p>

                        <!-- Bootstrap Select with Multiple Selects -->
                        <!--===================================================-->
                        <select class="selectpicker" multiple title="Choose one of the following..." data-width="100%">
                            <option>Family</option>
                            <option>Friend</option>
                            <option>Partner</option>
                        </select>
                        <!--===================================================-->

                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Add a search input</p>


                        <!-- Bootstrap Select with Search Input -->
                        <!--===================================================-->
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                            <option>Family</option>
                            <option>Friend</option>
                            <option>Partner</option>
                            <option>Sport</option>
                            <option>Movie</option>
                            <option>Documents</option>
                            <option>Music</option>
                            <option>Video</option>
                        </select>
                        <!--===================================================-->


                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Colored</p>

                        <div class="row">


                            <!-- Bootstrap Select : primary -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-primary">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>


                            <!-- Bootstrap Select : Info -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-info">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>


                            <!-- Bootstrap Select : Success -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-success">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>


                            <!-- Bootstrap Select : Warning -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-warning">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>


                            <!-- Bootstrap Select : Danger -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-danger">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>


                            <!-- Bootstrap Select : Mint -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-mint">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>

                            <!-- Bootstrap Select : Purple -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-purple">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>


                            <!-- Bootstrap Select : Pink -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-pink">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>


                            <!-- Bootstrap Select : Dark -->
                            <!--===================================================-->
                            <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-dark">
                                <option>Family</option>
                                <option>Friend</option>
                                <option>Partner</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Range Slider component</h3>
                    </div>
                    <div class="panel-body">
                        <h4 class="text-thin">Horizontal</h4>

                        <div class="row">
                            <div class="col-xs-6">
                                <p class="text-thin mar-btm">Default</p>

                                <!--Default Range Slider-->
                                <!--===================================================-->
                                <div id="demo-range-def"></div>
                                <!--===================================================-->

                                <br>

                                <div>
                                    <strong>Value : </strong>
                                    <span id="demo-range-def-val"></span>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <p class="text-thin mar-btm">Step</p>

                                <!--Range Slider : Steps-->
                                <!--===================================================-->
                                <div id="demo-range-step"></div>
                                <!--===================================================-->

                                <br>

                                <div>
                                    <strong>Value : </strong>
                                    <span id="demo-range-step-val"></span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <h4 class="text-thin">Vertical</h4>

                        <p class="text-thin mar-btm">Fixed Drag</p>

                        <div class="mar-rgt box-inline">

                            <!--Vertical Range Slider-->
                            <!--===================================================-->
                            <div id="demo-range-ver1" class="range-vertical"></div>
                            <div id="demo-range-ver2" class="range-vertical"></div>
                            <div id="demo-range-ver3" class="range-vertical"></div>
                            <div id="demo-range-ver4" class="range-vertical"></div>
                            <div id="demo-range-ver5" class="range-vertical"></div>
                            <!--===================================================-->

                        </div>
                        <div id="demo-range-vpips" class="demo-pips range-vertical pips"></div>

                        <br>
                        <hr>
                        <br>

                        <h4 class="text-thin">Slider behaviour</h4>

                        <div class="row">
                            <div class="col-xs-6">
                                <p class="text-thin mar-btm">Drag</p>

                                <!--Range Slider : Drag -->
                                <!--===================================================-->
                                <div id="demo-range-drg"></div>

                            </div>
                            <div class="col-xs-6">
                                <p class="text-thin mar-btm">Fixed Drag</p>

                                <!--Range slider : Fixed Drag -->
                                <!--===================================================-->
                                <div id="demo-range-fxt"></div>

                            </div>
                            <div class="col-xs-6">
                                <p class="text-thin mar-btm">Combinate</p>

                                <!--Range Slider : Combinate -->
                                <!--===================================================-->
                                <div id="demo-range-com"></div>

                            </div>
                        </div>

                        <br>
                        <hr>
                        <br>
                        <h4 class="text-thin mar-btm">Pips</h4>

                        <!--Range Slider : Pips -->
                        <!--===================================================-->
                        <div id="demo-range-hpips" class="demo-pips pips"></div>
                        <!--===================================================-->

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bootstrap Timepicker</h3>
                    </div>
                    <div class="panel-body">
                        <p>Easily select a time for a text input using your mouse or keyboards arrow keys.</p>
                        <br>

                        <p class="text-thin mar-btm">Text input</p>

                        <!--Bootstrap Timepicker : Text Input-->
                        <!--===================================================-->
                        <input id="demo-tp-textinput" type="text" class="form-control">

                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Component</p>

                        <!--Bootstrap Timepicker : Component-->
                        <!--===================================================-->
                        <div class="input-group date">
                            <input id="demo-tp-com" type="text" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-clock-o fa-lg"></i></span>
                        </div>
                        <!--===================================================-->

                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bootstrap Datepicker</h3>
                    </div>
                    <div class="panel-body">
                        <p>Bootstrap-datepicker provides a flexible datepicker widget in the Twitter bootstrap
                            style.</p><br>

                        <p class="text-thin mar-btm">Text input</p>


                        <!--Bootstrap Datepicker : Text Input-->
                        <!--===================================================-->
                        <div id="demo-dp-txtinput">
                            <input type="text" class="form-control">
                        </div>
                        <!--===================================================-->

                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Component</p>

                        <!--Bootstrap Datepicker : Component-->
                        <!--===================================================-->
                        <div id="demo-dp-component">
                            <div class="input-group date">
                                <input type="text" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                            </div>
                            <small class="text-muted">Auto close on select</small>
                        </div>
                        <!--===================================================-->

                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Range</p>

                        <!--Bootstrap Datepicker : Range-->
                        <!--===================================================-->
                        <div id="demo-dp-range">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="form-control" name="start"/>
                                <span class="input-group-addon">to</span>
                                <input type="text" class="form-control" name="end"/>
                            </div>
                        </div>
                        <!--===================================================-->

                        <br>
                        <hr>
                        <br>

                        <p class="text-thin mar-btm">Inline</p>

                        <!--Bootstrap Datepicker : Inline-->
                        <!--===================================================-->
                        <div id="demo-dp-inline">
                            <div></div>
                        </div>
                        <!--===================================================-->

                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Switchery</h3>
                    </div>
                    <div class="panel-body">
                        <p>Switchery is a simple component that helps you turn your default HTML checkbox inputs into
                            beautiful iOS 7 style switches in just few simple steps.</p>
                        <br>

                        <div class="box-inline mar-rgt">
                            <p class="text-thin mar-btm">Checked by default</p>

                            <!--Switchery : Checked-->
                            <!--===================================================-->
                            <input id="demo-sw-checked" type="checkbox" checked>
                            <!--===================================================-->

                        </div>
                        <div class="box-inline">
                            <p class="text-thin mar-btm">Uncheked by default</p>

                            <!--Switchery : Unchecked-->
                            <!--===================================================-->
                            <input id="demo-sw-unchecked" type="checkbox">
                            <!--===================================================-->

                        </div>
                        <hr>
                        <p class="text-thin mar-btm">Checking state</p>

                        <div class="box-inline mar-rgt">

                            <!--Switchery : Checked by default-->
                            <!--===================================================-->
                            <input id="demo-sw-checkstate" type="checkbox" checked>
                            <!--===================================================-->

                        </div>

                        <!--Switchery : Checking State Field-->
                        <!--===================================================-->
                        <span id="demo-sw-checkstate-field" class="label label-info"></span>
                        <!--===================================================-->

                        <hr>
                        <p class="text-thin mar-btm">Colored</p>
                        <ul class="list-inline">

                            <!--Switchery : Colored-->
                            <!--===================================================-->
                            <li class="mar-btm">
                                <input id="demo-sw-clr1" type="checkbox" checked>
                            </li>
                            <li class="mar-btm">
                                <input id="demo-sw-clr2" type="checkbox" checked>
                            </li>
                            <li class="mar-btm">
                                <input id="demo-sw-clr3" type="checkbox" checked>
                            </li>
                            <li class="mar-btm">
                                <input id="demo-sw-clr4" type="checkbox" checked>
                            </li>
                            <li class="mar-btm">
                                <input id="demo-sw-clr5" type="checkbox" checked>
                            </li>
                            <li class="mar-btm">
                                <input id="demo-sw-clr6" type="checkbox" checked>
                            </li>
                            <li class="mar-btm">
                                <input id="demo-sw-clr7" type="checkbox" checked>
                            </li>
                            <li class="mar-btm">
                                <input id="demo-sw-clr8" type="checkbox" checked>
                            </li>
                            <!--===================================================-->

                        </ul>
                        <hr>
                        <p class="text-thin mar-btm">Sizes</p>
                        <ul class="list-inline">

                            <!--Switchery : Sizes-->
                            <!--===================================================-->
                            <li><input id="demo-sw-sz-lg" type="checkbox" checked></li>
                            <li><input id="demo-sw-sz" type="checkbox" checked></li>
                            <li><input id="demo-sw-sz-sm" type="checkbox" checked></li>
                            <!--===================================================-->

                        </ul>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">DropzoneJs</h3>
                    </div>
                    <div class="panel-body">

                        <!--Dropzonejs-->
                        <!--===================================================-->
                        <form id="demo-dropzone" action="#" class="dropzone">
                            <div class="dz-default dz-message">
                                <div class="dz-icon icon-wrap icon-circle icon-wrap-md">
                                    <i class="fa fa-cloud-upload fa-3x"></i>
                                </div>
                                <div>
                                    <p class="dz-text">Drop files to upload</p>

                                    <p class="text-muted">or click to pick manually</p>
                                </div>
                            </div>
                            <div class="fallback">
                                <input name="file" type="file" multiple/>
                            </div>
                        </form>
                        <!--===================================================-->
                        <!-- End Dropzonejs -->

                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">WYSIWYG Editor</h3>
            </div>
            <div class="panel-body">

                <!--Summernote-->
                <!--===================================================-->
                <div id="demo-summernote"></div>
                <!--===================================================-->
                <!-- End Summernote -->

            </div>
        </div>


    </div>
    <!--===================================================-->
    <!--End page content-->

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Form Validation</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <div class="row">
            <div class="col-lg-6">


                <!-- FORM VALIDATION ON TABS -->
                <!--===================================================-->
                <div class="tab-base">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#demo-bsc-tab-1" data-toggle="tab"><i class="fa"></i> Information</a></li>
                        <li><a href="#demo-bsc-tab-2" data-toggle="tab"><i class="fa"></i> Address</a></li>
                    </ul>

                    <!-- Tabs Content -->
                    <form id="demo-bv-bsc-tabs" class="form-horizontal" action="#" method="post">
                        <div class="tab-content">
                            <div class="tab-pane pad-btm fade in active" id="demo-bsc-tab-1">
                                <h4 class="text-thin mar-btm">First Tab</h4>
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Full name</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="fullName" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Company</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="company" placeholder="Company">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Member Type</label>
                                    <div class="col-lg-7">
                                        <div class="radio">
                                            <label class="form-radio form-icon">
                                                <input type="radio" name="memberType" value="free"> Free
                                            </label>

                                            <label class="form-radio form-icon">
                                                <input type="radio" name="memberType" value="personal"> Personal
                                            </label>

                                            <label class="form-radio form-icon">
                                                <input type="radio" name="memberType" value="bussines"> Bussiness
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="demo-bsc-tab-2">
                                <h4 class="mar-btm text-thin">Second Tab</h4>
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">City</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-footer clearfix">
                                <div class="col-lg-7 col-lg-offset-3">
                                    <button type="submit" class="btn btn-primary btn-labeled fa fa-check fa-lg">Validate</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--===================================================-->
                <!-- END FORM VALIDATION ON TABS -->


                <!-- FORM VALIDATION ON ACCORDION -->
                <!--===================================================-->
                <form id="demo-bv-accordion" class="form-horizontal" action="#" method="post">
                    <div id="demo-accordion" class="panel-group accordion">
                        <div class="panel">

                            <!-- Accordion title -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-parent="#demo-accordion" data-toggle="collapse" href="#demo-acc-panel-1"><i class="fa"></i> Account</a>
                                </h4>
                            </div>

                            <!-- Accordion content -->
                            <div id="demo-acc-panel-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Username</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Email address</label>
                                        <div class="col-lg-7">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-7">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">

                            <!-- Accordion title -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-parent="#demo-accordion" data-toggle="collapse" href="#demo-acc-panel-2"><i class="fa"></i> Information</a>
                                </h4>
                            </div>

                            <!-- Accordion content -->
                            <div id="demo-acc-panel-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Full name</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="firstName" placeholder="First name">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="lastName" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Member type</label>
                                        <div class="col-lg-7">
                                            <div class="radio">
                                                <label class="form-radio form-icon">
                                                    <input type="radio" name="memberType" value="free"> Free
                                                </label>

                                                <label class="form-radio form-icon">
                                                    <input type="radio" name="memberType" value="personal"> Personal
                                                </label>

                                                <label class="form-radio form-icon">
                                                    <input type="radio" name="memberType" value="bussines"> Bussiness
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Bio</label>
                                        <div class="col-lg-7">
                                            <textarea class="form-control" name="bio" rows="7" placeholder="Tell us your story..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">

                            <!-- Accordion title -->
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-parent="#demo-accordion" data-toggle="collapse" href="#demo-acc-panel-3"><i class="fa"></i> Profile</a>
                                </h4>
                            </div>

                            <!-- Accordion content -->
                            <div id="demo-acc-panel-3" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Phone number</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="phoneNumber" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">City</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="city" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-7 col-lg-offset-3">
                                            <button type="submit" class="btn btn-primary btn-labeled fa fa-user fa-lg" name="signup" value="Sign up">Sign up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--===================================================-->
                <!-- END FORM VALIDATION ON ACCORDION -->


                <div class="panel">

                    <!-- Panel heading -->
                    <div class="panel-heading">
                        <div class="panel-control">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#demo-tabs-box-1"><i class="fa"></i> Tooltip</a></li>
                                <li><a data-toggle="tab" href="#demo-tabs-box-2"><i class="fa"></i> Popover</a></li>
                                <li><a data-toggle="tab" href="#demo-tabs-box-3"><i class="fa"></i> Custom container</a></li>
                            </ul>
                        </div>
                        <h3 class="panel-title">Showing errors in...</h3>
                    </div>

                    <!-- Panel body -->
                    <form id="demo-bv-errorcnt" class="form-horizontal" action="#" method="post">
                        <div class="panel-body">
                            <div class="tab-content">

                                <!--SHOWING ERRORS IN TOOLTIP-->
                                <!--===================================================-->
                                <div id="demo-tabs-box-1" class="tab-pane fade in active">
                                    <h4 class="mar-btm text-thin">Tooltip</h4>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Name</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group pad-btm">
                                        <label class="col-lg-3 control-label">Email address</label>
                                        <div class="col-lg-7">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <!--===================================================-->


                                <!--SHOWING ERRORS IN POPOVER-->
                                <!--===================================================-->
                                <div id="demo-tabs-box-2" class="tab-pane fade">
                                    <h4 class="mar-btm text-thin">Popover</h4>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Username</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-7">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <!--===================================================-->


                                <!--SHOWING ERRORS IN CUSTOM CONTAINER-->
                                <!--===================================================-->
                                <div id="demo-tabs-box-3" class="tab-pane fade">
                                    <h4 class="mar-btm text-thin">Custom container</h4>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Phone Number</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="phoneNumber" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">City</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="city" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-7 col-lg-offset-3">
                                            <div id="demo-error-container" class="bg-gray-light"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--===================================================-->

                            </div>
                        </div>
                        <div class="panel-footer clearfix">
                            <div class="col-lg-7 col-lg-offset-3">
                                <button type="submit" class="btn btn-primary btn-labeled fa fa-user fa-lg" name="signup" value="Sign up">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!--MASKED INPUT-->
                <!--===================================================-->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Masked Input</h3>
                    </div>
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label for="demo-msk-date" class="col-md-4 control-label">Date</label>
                            <div class="col-md-7">
                                <input type="text" id="demo-msk-date" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-msk-date2" class="col-md-4 control-label">Date</label>
                            <div class="col-md-7">
                                <input type="text" id="demo-msk-date2" class="form-control" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-msk-phone" class="col-md-4 control-label">Phone</label>
                            <div class="col-md-7">
                                <input type="text" id="demo-msk-phone" class="form-control" placeholder="(999) 999-9999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-msk-phone-ext" class="col-md-4 control-label">Phone + Ext</label>
                            <div class="col-md-7">
                                <input type="text" id="demo-msk-phone-ext" class="form-control" placeholder="(999) 999-9999? x99999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-msk-taxid" class="col-md-4 control-label">Tax ID</label>
                            <div class="col-md-7">
                                <input type="text" id="demo-msk-taxid" class="form-control" placeholder="99-9999999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-msk-ssn" class="col-md-4 control-label">SSN</label>
                            <div class="col-md-7">
                                <input type="text" id="demo-msk-ssn" class="form-control" placeholder="999-99-9999">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="demo-msk-pkey" class="col-md-4 control-label">Product Key</label>
                            <div class="col-md-7">
                                <input type="text" id="demo-msk-pkey" class="form-control" placeholder="a*-999-a999">
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--END OF MASKED INPUT-->

            </div>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Validation</h3>
                    </div>

                    <form id="demo-bvd-notempty" action="forms-validation.html" class="form-horizontal">
                        <div class="panel-body">
                            <h4 class="text-thin">Not Empty validator</h4>
                            <hr>

                            <!--NOT EMPTY VALIDATOR-->
                            <!--===================================================-->
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-7 col-lg-offset-3">
                                        <div class="checkbox">
                                            <label class="form-checkbox form-icon">
                                                <input type="checkbox" name="acceptTerms" value="java" /> Accept the terms and policies
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!--===================================================-->

                            <hr>
                            <h4 class="mar-btm text-thin">Identical validator</h4>
                            <hr>

                            <!--IDENTICAL VALIDATOR-->
                            <!--===================================================-->
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-7">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Retype password</label>
                                    <div class="col-lg-7">
                                        <input type="password" class="form-control" name="confirmPassword" placeholder="Retype password">
                                    </div>
                                </div>
                            </fieldset>
                            <!--===================================================-->

                            <hr>
                            <h4 class="mar-btm text-thin">Other validators</h4>
                            <hr>

                            <!--OTHER VALIDATOR-->
                            <!--===================================================-->
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Member Type</label>
                                    <div class="col-lg-7">
                                        <div class="radio">
                                            <label class="form-radio form-icon">
                                                <input type="radio" name="member" value="free"> Free
                                            </label>
                                            <label class="form-radio form-icon">
                                                <input type="radio" name="member" value="personal"> Personal
                                            </label>
                                            <label class="form-radio form-icon">
                                                <input type="radio" name="member" value="bussiness"> Bussiness
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Skill</label>
                                    <div class="col-lg-7">
                                        <div class="checkbox form-block">
                                            <label class="form-checkbox form-icon active">
                                                <input type="checkbox" name="programs[]" value="net"> .Net
                                            </label>
                                            <label class="form-checkbox form-icon">
                                                <input type="checkbox" name="programs[]" value="java"> Java
                                            </label>
                                            <label class="form-checkbox form-icon">
                                                <input type="checkbox" name="programs[]" value="c"> C/C++
                                            </label>
                                            <label class="form-checkbox form-icon active">
                                                <input type="checkbox" name="programs[]" value="php"> PHP
                                            </label>
                                            <label class="form-checkbox form-icon">
                                                <input type="checkbox" name="programs[]" value="perl"> Perl
                                            </label>
                                            <label class="form-checkbox form-icon">
                                                <input type="checkbox" name="programs[]" value="ruby"> Ruby
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Integer</label>
                                    <div class="col-lg-7">
                                        <input type="number" class="form-control" name="integer" placeholder="Integer">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Numeric</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="numeric" placeholder="Decimal is allowed">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Greater than</label>
                                    <div class="col-lg-7">
                                        <input type="number" class="form-control" name="greaterthan" placeholder="Numbers greater than 50">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Less than 25</label>
                                    <div class="col-lg-7">
                                        <input type="number" class="form-control" name="lessthan" placeholder="Numbers less than 50">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Range [1 - 100]</label>
                                    <div class="col-lg-7">
                                        <input type="number" class="form-control" name="range" placeholder="Numbers 1-100">
                                    </div>
                                </div>
                            </fieldset>
                            <!--===================================================-->

                            <hr>
                            <h4 class="mar-btm text-thin">Regular expression based validators</h4>
                            <hr>

                            <!--REGULAR EXPRESSION BASED VALIDATORS-->
                            <!--===================================================-->
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email address</label>
                                    <div class="col-lg-7">
                                        <input type="email" class="form-control" name="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Website</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="website" placeholder="http://" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Hex color</label>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" name="color" placeholder="#fff">
                                    </div>
                                </div>
                            </fieldset>
                            <!--===================================================-->

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-7 col-sm-offset-3">
                                    <button class="btn btn-primary btn-labeled fa fa-send fa-lg" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
    <!--===================================================-->
    <!--End page content-->


@stop

@section('scripts')
    @parent


            <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') !!} "></script>


    <!--Chosen [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/chosen/chosen.jquery.min.js') !!} "></script>


    <!--noUiSlider [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/noUiSlider/jquery.nouislider.all.min.js') !!} "></script>


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') !!} "></script>


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/bootstrap-datepicker/bootstrap-datepicker.js') !!} "></script>


    <!--Dropzone [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/dropzone/dropzone.min.js') !!} "></script>


    <!--Summernote [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/summernote/summernote.min.js') !!} "></script>


    <!--Demo script [ DEMONSTRATION ]-->
    <script src=" {!! asset('js/demo/nifty-demo.min.js') !!} "></script>


    <!--Form Component [ SAMPLE ]-->
    <script src=" {!! asset('js/demo/form-component.js') !!} "></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/bootstrap-validator/bootstrapValidator.min.js') !!}"></script>


    <!--Masked Input [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/masked-input/jquery.maskedinput.min.js') !!}"></script>


    <!--Form validation [ SAMPLE ]-->
    <script src=" {!! asset('js/demo/form-validation.js') !!}"></script>



@stop
