@extends('app')

@section('title')
	@parent
	Wizards
@stop

@section('css')
	@parent
            <!--Switchery [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/switchery/switchery.min.css') !!}" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/bootstrap-select/bootstrap-select.min.css') !!}" rel="stylesheet">


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href=" {!! asset('plugins/bootstrap-validator/bootstrapValidator.min.css') !!}" rel="stylesheet">




@stop


@section('content')
@parent

<div class="panel">
    <div class="eq-height clearfix">
        <div class="col-md-5 eq-box-md text-center box-vmiddle-wrap bg-primary">

            <!-- Simple Promotion Widget -->
            <!--===================================================-->
            <div class="box-vmiddle pad-all">
                <h3 class="text-thin">Register Today</h3>
									<span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
										<i class="fa fa-gift fa-5x text-primary"></i>
									</span>
                <p>Members get <span class="text-lg text-bold">50%</span> more points, so register today and start earning points for savings on great rewards!</p>
                <a class="btn btn-lg btn-primary btn-labeled fa fa-arrow-right" href="#">Learn More...</a>
            </div>
            <!--===================================================-->

        </div>
        <div class="col-md-7 eq-box-md eq-no-panel">

            <!-- Main Form Wizard -->
            <!--===================================================-->
            <div id="demo-main-wz">

                <!--nav-->
                <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
                    <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab1">
                            <span class="icon-wrap icon-wrap-xs bg-danger"><i class="fa fa-info"></i></span>
                            <p class="text-thin">Account</p>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab2">
                            <span class="icon-wrap icon-wrap-xs bg-warning"><i class="fa fa-user"></i></span>
                            <p class="text-thin">Profile</p>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab3">
                            <span class="icon-wrap icon-wrap-xs bg-info"><i class="fa fa-home"></i></span>
                            <p class="text-thin">Address</p>
                        </a>
                    </li>
                    <li class="col-xs-3">
                        <a data-toggle="tab" href="#demo-main-tab4">
                            <span class="icon-wrap icon-wrap-xs bg-success"><i class="fa fa-heart"></i></span>
                            <p class="text-thin">Finish</p>
                        </a>
                    </li>
                </ul>

                <!--progress bar-->
                <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-primary"></div>
                </div>


                <!--form-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="tab-content">

                            <!--First tab-->
                            <div id="demo-main-tab1" class="tab-pane">
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
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-7">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Retype password</label>
                                    <div class="col-lg-7">
                                        <input type="password" class="form-control" name="password2" placeholder="Retype password">
                                    </div>
                                </div>
                            </div>

                            <!--Second tab-->
                            <div id="demo-main-tab2" class="tab-pane fade">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Company</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Company" name="company" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Member Type</label>
                                    <div class="col-lg-7">
                                        <div class="radio">
                                            <label class="form-radio form-icon">
                                                <input type="radio" value="free" name="memberType"> Free
                                            </label>

                                            <label class="form-radio form-icon">
                                                <input type="radio" value="personal" name="memberType"> Personal
                                            </label>

                                            <label class="form-radio form-icon">
                                                <input type="radio" value="bussines" name="memberType"> Bussiness
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Third tab-->
                            <div id="demo-main-tab3" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone Number</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Address" name="address" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">City</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="City" name="city" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Poscode</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Poscode" name="poscode" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Fourth tab-->
                            <div id="demo-main-tab4" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Bio</label>
                                    <div class="col-lg-7">
                                        <textarea placeholder="Tell us your story..." rows="7" name="bio" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-7 col-lg-offset-3">
                                        <div class="checkbox">
                                            <label class="form-checkbox form-icon">
                                                <input type="checkbox" value="java" name="acceptTerms"> Accept the terms and policies
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Footer button-->
                    <div class="pull-right pad-all">
                        <button type="button" class="previous btn btn-primary">Previous</button>
                        <button type="button" class="next btn btn-primary">Next</button>
                        <button type="button" class="finish btn btn-success" disabled>Finish</button>
                    </div>

                </form>
            </div>
            <!--===================================================-->
            <!-- End of Main Form Wizard -->

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel">

            <!-- Classic Form Wizard -->
            <!--===================================================-->
            <div id="demo-cls-wz">

                <!--Nav-->
                <ul class="wz-nav-off wz-icon-inline">
                    <li class="col-xs-3 bg-purple">
                        <a data-toggle="tab" href="#demo-cls-tab1">
                            <span class="icon-wrap icon-wrap-xs bg-trans-dark"><i class="fa fa-info"></i></span> Account
                        </a>
                    </li>
                    <li class="col-xs-3 bg-purple">
                        <a data-toggle="tab" href="#demo-cls-tab2">
                            <span class="icon-wrap icon-wrap-xs bg-trans-dark"><i class="fa fa-user"></i></span> Profile
                        </a>
                    </li>
                    <li class="col-xs-3 bg-purple">
                        <a data-toggle="tab" href="#demo-cls-tab3">
                            <span class="icon-wrap icon-wrap-xs bg-trans-dark"><i class="fa fa-home"></i></span> Address
                        </a>
                    </li>
                    <li class="col-xs-3 bg-purple">
                        <a data-toggle="tab" href="#demo-cls-tab4">
                            <span class="icon-wrap icon-wrap-xs bg-trans-dark"><i class="fa fa-heart"></i></span> Finish
                        </a>
                    </li>
                </ul>

                <!--Progress bar-->
                <div class="progress progress-sm progress-striped active">
                    <div class="progress-bar progress-bar-pink"></div>
                </div>


                <!--Form-->
                <form class="form-horizontal mar-top">
                    <div class="panel-body">
                        <div class="tab-content">

                            <!--First tab-->
                            <div id="demo-cls-tab1" class="tab-pane">
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
                            </div>

                            <!--Second tab-->
                            <div id="demo-cls-tab2" class="tab-pane fade">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Third tab-->
                            <div id="demo-cls-tab3" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Address" name="address" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">City</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="City" name="city" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Fourth tab-->
                            <div id="demo-cls-tab4" class="tab-pane mar-btm">
                                <h4>Thank you</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                    </div>


                    <!--Footer button-->
                    <div class="panel-footer text-right">
                        <div class="box-inline">
                            <button type="button" class="previous btn btn-purple">Previous</button>
                            <button type="button" class="next btn btn-purple">Next</button>
                            <button type="button" class="finish btn btn-pink" disabled>Finish</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--===================================================-->
            <!-- End Classic Form Wizard -->

        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel">

            <!-- Circular Form Wizard -->
            <!--===================================================-->
            <div id="demo-step-wz">
                <div class="wz-heading wz-w-label bg-success">

                    <!--Progress bar-->
                    <div class="progress progress-xs">
                        <div style="width: 15%;" class="progress-bar progress-bar-dark"></div>
                    </div>

                    <!--Nav-->
                    <ul class="wz-steps wz-icon-bw wz-nav-off text-lg">
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-step-tab1">
													<span class="icon-wrap icon-wrap-xs icon-circle bg-dark">
														<span class="wz-icon icon-txt text-bold">1</span>
														<i class="wz-icon-done fa fa-check"></i>
													</span>
                                <small class="wz-desc box-block">Account</small>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-step-tab2">
													<span class="icon-wrap icon-wrap-xs icon-circle bg-dark">
														<span class="wz-icon icon-txt text-bold">2</span>
														<i class="wz-icon-done fa fa-check"></i>
													</span>
                                <small class="wz-desc box-block">Profile</small>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-step-tab3">
													<span class="icon-wrap icon-wrap-xs icon-circle bg-dark">
														<span class="wz-icon icon-txt text-bold">3</span>
														<i class="wz-icon-done fa fa-check"></i>
													</span>
                                <small class="wz-desc box-block">Address</small>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-step-tab4">
													<span class="icon-wrap icon-wrap-xs icon-circle bg-dark">
														<span class="wz-icon icon-txt text-bold">4</span>
														<i class="wz-icon-done fa fa-check"></i>
													</span>
                                <small class="wz-desc box-block">Finish</small>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--Form-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="tab-content">

                            <!--First tab-->
                            <div id="demo-step-tab1" class="tab-pane">
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
                            </div>

                            <!--Second tab-->
                            <div id="demo-step-tab2" class="tab-pane fade">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Third tab-->
                            <div id="demo-step-tab3" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone Number</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Address" name="address" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Fourth tab-->
                            <div id="demo-step-tab4" class="tab-pane mar-btm text-center">
                                <h4>Thank you</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                    </div>

                    <!--Footer button-->
                    <div class="panel-footer text-right">
                        <div class="box-inline">
                            <button type="button" class="previous btn btn-mint">Previous</button>
                            <button type="button" class="next btn btn-mint">Next</button>
                            <button type="button" class="finish btn btn-mint" disabled>Finish</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--===================================================-->
            <!-- End Circular Form Wizard -->

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel">

            <!-- Circular Form Wizard -->
            <!--===================================================-->
            <div id="demo-cir-wz">
                <div class="wz-heading">

                    <!--Progress bar-->
                    <div class="progress progress-sm progress-light-base">
                        <div class="progress-bar progress-bar-primary"></div>
                    </div>

                    <!--Nav-->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <ul class="wz-nav-off ">
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-cir-tab1" title="Account" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-mint">
														<i class="wz-icon fa fa-info fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-cir-tab2" title="Profile" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-info">
														<i class="wz-icon fa fa-user fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-cir-tab3" title="Address" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
														<i class="wz-icon fa fa-home fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-cir-tab4" title="Finish" class="add-tooltip">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-success">
														<i class="wz-icon fa fa-heart fa-2x"></i>
														<i class="wz-icon-done fa fa-check fa-2x"></i>
													</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--Form-->
                <form class="form-horizontal">
                    <div class="panel-body">
                        <div class="tab-content">

                            <!--First tab-->
                            <div id="demo-cir-tab1" class="tab-pane">
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
                            </div>

                            <!--Second tab-->
                            <div id="demo-cir-tab2" class="tab-pane fade">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Third tab-->
                            <div id="demo-cir-tab3" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone Number</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Address" name="address" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Fourth tab-->
                            <div id="demo-cir-tab4" class="tab-pane  mar-btm text-center">
                                <h4>Thank you</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>

                        </div>
                    </div>

                    <!--Footer button-->
                    <div class="panel-footer text-right">
                        <div class="box-inline">
                            <button type="button" class="previous btn btn-primary">Previous</button>
                            <button type="button" class="next btn btn-primary">Next</button>
                            <button type="button" class="finish btn btn-warning" disabled>Finish</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--===================================================-->
            <!-- End Circular Form Wizard -->

        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel">

            <!-- Form wizard with Validation -->
            <!--===================================================-->
            <div id="demo-bv-wz">
                <div class="wz-heading">

                    <!--Progress bar-->
                    <div class="progress progress-sm progress-light-base">
                        <div class="progress-bar progress-bar-primary"></div>
                    </div>

                    <!--Nav-->
                    <ul class="wz-icon-bw wz-nav-off">
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-bv-tab1" title="Account">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-mint">
													<i class="wz-icon fa fa-info fa-2x"></i>
													<i class="wz-icon-done fa fa-check fa-2x"></i>
												</span>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-bv-tab2" title="Profile">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-info">
													<i class="wz-icon fa fa-user fa-2x"></i>
													<i class="wz-icon-done fa fa-check fa-2x"></i>
												</span>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-bv-tab3" title="Address">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
													<i class="wz-icon fa fa-home fa-2x"></i>
													<i class="wz-icon-done fa fa-check fa-2x"></i>
												</span>
                            </a>
                        </li>
                        <li class="col-xs-3">
                            <a data-toggle="tab" href="#demo-bv-tab4" title="Finish">
													<span class="icon-wrap icon-wrap-sm icon-circle bg-success">
													<i class="wz-icon fa fa-heart fa-2x"></i>
													<i class="wz-icon-done fa fa-check fa-2x"></i>
												</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--Form-->
                <form id="demo-bv-wz-form" class="form-horizontal">
                    <div class="panel-body">
                        <div class="tab-content">

                            <!--First tab-->
                            <div id="demo-bv-tab1" class="tab-pane">
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
                            </div>

                            <!--Second tab-->
                            <div id="demo-bv-tab2" class="tab-pane fade">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">First name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Last name</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Third tab-->
                            <div id="demo-bv-tab3" class="tab-pane">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone Number</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label>
                                    <div class="col-lg-7">
                                        <input type="text" placeholder="Phone number" name="address" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!--Fourth tab-->
                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
                                <h4>Thank you</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                    </div>

                    <!--Footer button-->
                    <div class="panel-footer text-right">
                        <div class="box-inline">
                            <button type="button" class="previous btn btn-primary">Previous</button>
                            <button type="button" class="next btn btn-primary">Next</button>
                            <button type="button" class="finish btn btn-warning" disabled>Finish</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--===================================================-->
            <!-- End Form wizard with Validation -->

        </div>
    </div>
</div>


@stop

@section('scripts')
    @parent


            <!--Switchery [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/switchery/switchery.min.js') !!}"></script>


    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/bootstrap-select/bootstrap-select.min.js') !!}"></script>


    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') !!}"></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src=" {!! asset('plugins/bootstrap-validator/bootstrapValidator.min.js') !!}"></script>


    <!--Demo script [ DEMONSTRATION ]-->
    <script src=" {!! asset('js/demo/nifty-demo.min.js') !!}"></script>


    <!--Form Wizard [ SAMPLE ]-->
    <script src=" {!! asset('js/demo/form-wizard.js') !!}"></script>


@stop
