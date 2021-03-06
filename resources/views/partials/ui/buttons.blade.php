@extends('app')

@section('title')
	@parent
	Buttons
@stop

@section('css')
	@parent
@stop


@section('content')
@parent


        <!--Page content-->
<!--===================================================-->
<div id="page-content">

    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Basic buttons</h3>
                </div>
                <div class="panel-body demo-nifty-btn">

                    <!--Basic Buttons-->
                    <!--===================================================-->
                    <button class="btn btn-default">Default</button>
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-info">Info</button>
                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-mint">Mint</button>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-danger">Danger</button>
                    <button class="btn btn-pink">Pink</button>
                    <button class="btn btn-purple">Purple</button>
                    <button class="btn btn-dark">Dark</button>
                    <!--===================================================-->

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Rounded buttons</h3>
                </div>
                <div class="panel-body demo-nifty-btn">

                    <!--Rounded Buttons-->
                    <!--===================================================-->
                    <button class="btn btn-default btn-rounded">Default</button>
                    <button class="btn btn-primary btn-rounded">Primary</button>
                    <button class="btn btn-info btn-rounded">Info</button>
                    <button class="btn btn-success btn-rounded">Success</button>
                    <button class="btn btn-mint btn-rounded">Mint</button>
                    <button class="btn btn-warning btn-rounded">Warning</button>
                    <button class="btn btn-danger btn-rounded">Danger</button>
                    <button class="btn btn-pink btn-rounded">Pink</button>
                    <button class="btn btn-purple btn-rounded">Purple</button>
                    <button class="btn btn-dark btn-rounded">Dark</button>
                    <!--===================================================-->

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">State button</h3>
                </div>
                <div class="panel-body demo-nifty-btn">

                    <!--State Button-->
                    <!--===================================================-->
                    <button id="demo-state-btn" class="btn btn-lg btn-info" data-loading-text="Loading..."
                            type="button">
                        Loading state
                    </button>
                    <!--===================================================-->

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Hover button</h3>
                </div>
                <div class="panel-body demo-nifty-btn">

                    <!--Hover Button-->
                    <!--===================================================-->
                    <button class="btn btn-lg btn-default btn-hover-warning">Hover Me!</button>
                    <!--===================================================-->

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Pressed button</h3>
                </div>
                <div class="panel-body demo-nifty-btn">

                    <!--Pressed Button-->
                    <!--===================================================-->
                    <button class="btn btn-lg btn-default btn-active-success">Click Me!</button>
                    <!--===================================================-->

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Single toggle button</h3>
                </div>
                <div class="panel-body demo-nifty-btn">

                    <!--Single TOggle Button-->
                    <!--===================================================-->
                    <button data-toggle="button" class="btn btn-lg btn-default btn-active-info active" type="button">
                        Single toggle
                    </button>
                    <!--===================================================-->

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="eq-height">
            <div class="col-sm-6 eq-box-sm">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Disabed buttons</h3>
                    </div>
                    <div class="panel-body demo-nifty-btn">

                        <!--Disabled Buttons-->
                        <!--===================================================-->
                        <button class="btn btn-default" disabled="disabled">Default</button>
                        <button class="btn btn-primary" disabled="disabled">Primary</button>
                        <button class="btn btn-info" disabled="disabled">Info</button>
                        <button class="btn btn-success" disabled="disabled">Success</button>
                        <button class="btn btn-mint" disabled="disabled">Mint</button>
                        <button class="btn btn-warning" disabled="disabled">Warning</button>
                        <button class="btn btn-danger" disabled="disabled">Danger</button>
                        <button class="btn btn-pink" disabled="disabled">Pink</button>
                        <button class="btn btn-purple" disabled="disabled">Purple</button>
                        <button class="btn btn-dark" disabled="disabled">Dark</button>
                        <!--===================================================-->

                    </div>
                </div>
            </div>
            <div class="col-sm-6 eq-box-sm">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Icon buttons</h3>
                    </div>
                    <div class="panel-body demo-nifty-btn">

                        <!--Icon Buttons-->
                        <!--===================================================-->
                        <button class="btn btn-default btn-icon icon-lg fa fa-user"></button>
                        <button class="btn btn-primary btn-icon icon-lg fa fa-shopping-cart"></button>
                        <button class="btn btn-info btn-icon icon-lg fa fa-trash"></button>
                        <button class="btn btn-success btn-icon icon-lg fa fa-star"></button>
                        <button class="btn btn-mint btn-icon icon-lg fa fa-thumbs-up"></button>
                        <!--===================================================-->

                        <br>

                        <!--Icon Buttons-->
                        <!--===================================================-->
                        <button class="btn btn-warning btn-icon btn-circle icon-lg fa fa-exclamation-triangle"></button>
                        <button class="btn btn-danger btn-icon btn-circle icon-lg fa fa-times"></button>
                        <button class="btn btn-pink btn-icon btn-circle icon-lg fa fa-envelope"></button>
                        <button class="btn btn-purple btn-icon btn-circle icon-lg fa fa-gift"></button>
                        <button class="btn btn-dark btn-icon btn-circle icon-lg fa fa-unlock-alt"></button>
                        <!--===================================================-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="eq-height">
            <div class="col-sm-6 eq-box-sm">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Buttons with label</h3>
                    </div>
                    <div class="panel-body text-center">

                        <!--Buttons with label-->
                        <!--===================================================-->
                        <button class="btn btn-primary btn-labeled fa fa-shopping-cart">Primary</button>
                        <button class="btn btn-warning btn-labeled fa fa-exclamation-triangle">Warning</button>
                        <button class="btn btn-purple btn-rounded btn-labeled fa fa-gift">Purple</button>
                        <!--===================================================-->

                    </div>
                </div>
            </div>
            <div class="col-sm-6 eq-box-sm">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Block level buttons</h3>
                    </div>
                    <div class="panel-body demo-nifty-btn">

                        <!--Block Level buttons-->
                        <!--===================================================-->
                        <button class="btn btn-block btn-primary">Block level button</button>
                        <!--===================================================-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="eq-height">
            <div class="col-sm-6 col-lg-3  eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Buttons sizes</h3>
                    </div>

                    <!--Buttons Sizes-->
                    <!--===================================================-->
                    <div class="panel-body demo-nifty-btn">
                        <button class="btn btn-lg btn-default">Large Button</button>
                        <br>
                        <button class="btn btn-default">Normal</button>
                        <br>
                        <button class="btn btn-sm btn-default">Small</button>
                        <br>
                        <button class="btn btn-xs btn-default">Extra Small</button>
                    </div>
                    <!--===================================================-->

                </div>
            </div>
            <div class="col-sm-6 col-lg-3 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Buttons sizes</h3>
                    </div>

                    <!--Buttons Rounded Sizes-->
                    <!--===================================================-->
                    <div class="panel-body demo-nifty-btn">
                        <button class="btn btn-lg btn-rounded btn-default">Large Button</button>
                        <br>
                        <button class="btn btn-rounded btn-default">Normal</button>
                        <br>
                        <button class="btn btn-sm btn-rounded btn-default">Small</button>
                        <br>
                        <button class="btn btn-xs btn-rounded btn-default">Extra Small</button>
                    </div>
                    <!--===================================================-->

                </div>
            </div>
            <div class="col-sm-6 col-lg-3 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Buttons sizes</h3>
                    </div>

                    <!--Icon Buttons Sizes-->
                    <!--===================================================-->
                    <div class="panel-body demo-nifty-btn">
                        <button class="btn btn-default btn-icon icon-3x fa fa-trash"></button>
                        <br>
                        <button class="btn btn-default btn-icon icon-2x fa fa-star"></button>
                        <br>
                        <button class="btn btn-default btn-icon icon-lg fa fa-thumbs-up"></button>
                    </div>
                    <!--===================================================-->

                </div>
            </div>
            <div class="col-sm-6 col-lg-3 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Buttons sizes</h3>
                    </div>

                    <!--Icon Buttons Sizes-->
                    <!--===================================================-->
                    <div class="panel-body demo-nifty-btn">
                        <button class="btn btn-default btn-icon btn-circle icon-3x fa fa-envelope"></button>
                        <br>
                        <button class="btn btn-default btn-icon btn-circle icon-2x fa fa-gift"></button>
                        <br>
                        <button class="btn btn-default btn-icon btn-circle icon-lg fa fa-unlock-alt"></button>
                    </div>
                    <!--===================================================-->

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="eq-height">
            <div class="col-lg-6 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Horizontal button groups</h3>
                    </div>
                    <div class="panel-body">
                        <div class="pad-ver mar-btm">

                            <!--Horizontal Button Groups-->
                            <!--===================================================-->
                            <div class="btn-group mar-rgt">
                                <button class="btn btn-default btn-active-purple">Left</button>
                                <button class="btn btn-default btn-active-purple">Middle</button>
                                <button class="btn btn-default btn-active-purple">Right</button>
                            </div>

                            <div class="btn-group">
                                <button class="btn btn-primary">Left</button>
                                <button class="btn btn-primary">Middle</button>
                                <button class="btn btn-primary">Right</button>
                            </div>
                            <!--===================================================-->

                        </div>
                        <br>
                        <h4 class="text-thin">Sizing</h4>
                        <hr>
                        <div class="pad-ver mar-btm">

                            <!--Large Buttons Group-->
                            <!--===================================================-->
                            <div class="btn-group btn-group-lg">
                                <button class="btn btn-purple btn-active-dark">Left</button>
                                <button class="btn btn-purple btn-active-dark">Middle</button>
                                <button class="btn btn-purple btn-active-dark">Right</button>
                            </div>
                            <!--===================================================-->

                            <!--Small Buttons Group-->
                            <!--===================================================-->
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-warning btn-active-dark">Left</button>
                                <button class="btn btn-warning btn-active-dark">Middle</button>
                                <button class="btn btn-warning btn-active-dark">Right</button>
                            </div>
                            <!--===================================================-->

                            <!--Extra Small Buttons Group-->
                            <!--===================================================-->
                            <div class="btn-group btn-group-xs">
                                <button class="btn btn-danger btn-active-dark">Left</button>
                                <button class="btn btn-danger btn-active-dark">Middle</button>
                                <button class="btn btn-danger btn-active-dark">Right</button>
                            </div>
                            <!--===================================================-->

                        </div>
                        <br>
                        <h4 class="text-thin">Justified button groups</h4>
                        <hr>
                        <div class="pad-ver mar-btm">

                            <!--Justified Button Group-->
                            <!--===================================================-->
                            <div class="btn-group btn-group-justified">
                                <a href="javascript:void(0)" class="btn btn-lg btn-mint">Left</a>
                                <a href="javascript:void(0)" class="btn btn-lg btn-mint">Middle</a>
                                <a href="javascript:void(0)" class="btn btn-lg btn-mint">Right</a>
                            </div>
                            <!--===================================================-->

                        </div>
                        <br>
                        <h4 class="text-thin">Vertical button groups</h4>
                        <hr>
                        <div class="pad-ver mar-btm">

                            <!--Vertical Button Group-->
                            <!--===================================================-->
                            <div class="btn-group-vertical mar-rgt">
                                <button class="btn btn-default btn-active-success">Top</button>
                                <button class="btn btn-default btn-active-success">Middle</button>
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Dropdown
                                        <i class="dropdown-caret fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="btn btn-default btn-active-success">Bottom</button>
                            </div>
                            <!--===================================================-->


                            <!--Vertical Button Group-->
                            <!--===================================================-->
                            <div class="btn-group-vertical">
                                <button class="btn btn-success">Top</button>
                                <button class="btn btn-success">Middle</button>
                                <button class="btn btn-success">Bottom</button>
                                <div class="btn-group dropup">
                                    <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        Dropdown
                                        <i class="dropdown-caret fa fa-caret-up"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--===================================================-->

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Dropdowns</h3>
                    </div>
                    <div class="panel-body">
                        <div class="pad-ver mar-btm demo-nifty-btn-group">


                            <!--Large Dropdown button-->
                            <!--===================================================-->
                            <div class="btn-group btn-group-lg">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                                    Dropdown <i class="dropdown-caret fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Dropdown header</li>
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Dropdown header</li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->


                            <!--Default Dropdown button-->
                            <!--===================================================-->
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                                    Dropdown <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">Dropdown header</li>
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Dropdown header</li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->


                            <!--Small Dropdown Button-->
                            <!--===================================================-->
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-mint btn-active-purple dropdown-toggle" data-toggle="dropdown"
                                        type="button">
                                    Dropdown <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Dropdown header</li>
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Dropdown header</li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->

                        </div>
                        <br>
                        <h4 class="text-thin">Split button dropdowns & variation</h4>
                        <hr>
                        <div class="pad-ver demo-nifty-btn-group">

                            <!--Split Buttons Dropdown-->
                            <!--===================================================-->
                            <div class="btn-group">
                                <button class="btn btn-default">Action</button>
                                <button class="btn btn-default dropdown-toggle dropdown-toggle-icon"
                                        data-toggle="dropdown" type="button">
                                    <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->

                            <!--Split Buttons Dropdown-->
                            <!--===================================================-->
                            <div class="btn-group dropup">
                                <button class="btn btn-default btn-active-purple">Action</button>
                                <button class="btn btn-default btn-active-purple dropdown-toggle dropdown-toggle-icon"
                                        data-toggle="dropdown" type="button">
                                    <i class="dropdown-caret fa fa-caret-up"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->

                        </div>
                        <br>
                        <h4 class="text-thin">Menu alignment</h4>
                        <hr>
                        <div class="pad-ver demo-nifty-btn-group">

                            <!--Menu Aligned to left-->
                            <!--===================================================-->
                            <div class="btn-group">
                                <button class="btn btn-default btn-active-pink dropdown-toggle dropdown-toggle-icon"
                                        data-toggle="dropdown" type="button">
                                    Left <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->


                            <!--Dropdup-->
                            <!--===================================================-->
                            <div class="btn-group dropup">
                                <button class="btn btn-default btn-active-pink dropdown-toggle dropdown-toggle-icon"
                                        data-toggle="dropdown" type="button">
                                    Dropup <i class="dropdown-caret fa fa-caret-up"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->


                            <!--Dropdown menu aligned to right-->
                            <!--===================================================-->
                            <div class="btn-group">
                                <button class="btn btn-default btn-active-pink dropdown-toggle dropdown-toggle-icon"
                                        data-toggle="dropdown" type="button">
                                    Righ <i class="dropdown-caret fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!--===================================================-->

                        </div>
                        <br>
                        <h4 class="text-thin">Nested button groups</h4>
                        <hr>
                        <div class="pad-ver mar-btm">

                            <!--Nested Button Groups-->
                            <!--===================================================-->
                            <div class="btn-group">
                                <button class="btn btn-default">1</button>
                                <button class="btn btn-primary">2</button>
                                <button class="btn btn-default">3</button>
                                <div class="btn-group">
                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Dropdown
                                        <i class="dropdown-caret fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--===================================================-->

                        </div>
                        <br>
                        <h4 class="text-thin">Multiple button groups</h4>
                        <hr>
                        <div class="pad-ver">

                            <!--Multiple Button Groups-->
                            <!--===================================================-->
                            <div class="btn-toolbar">
                                <div class="btn-group">
                                    <button class="btn btn-default btn-active-purple">1</button>
                                    <button class="btn btn-default btn-active-purple active">2</button>
                                    <button class="btn btn-default btn-active-purple">3</button>
                                    <button class="btn btn-default btn-active-purple">4</button>
                                </div>

                                <div class="btn-group">
                                    <button class="btn btn-default btn-active-purple">5</button>
                                    <button class="btn btn-default btn-active-purple">6</button>
                                    <button class="btn btn-default btn-active-purple">7</button>
                                </div>

                                <div class="btn-group">
                                    <button class="btn btn-default btn-active-purple">8</button>
                                </div>
                            </div>
                            <!--===================================================-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End page content-->


@stop

@section('scripts')
    @parent

            <!--Buttons [ SAMPLE ]-->
    <script src="{!! asset('/js/demo/ui-buttons.js') !!}"></script>


@stop
