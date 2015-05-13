@extends('app')

@section('title')
	@parent
	Charts
@stop

@section('css')
	@parent
@stop


@section('content')
@parent

<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
    <h1 class="page-header text-overflow">Charts</h1>

    <!--Searchbox-->
    <div class="searchbox">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--End page title-->

<!--Page content-->
<!--===================================================-->
<div id="page-content">

    <div class="row">
        <div class="eq-height">
            <div class="col-md-12 col-lg-4 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control panel-control-component">
                            <small class="text-muted">Auto update</small>
                            <input type="checkbox" data-size="switchery-md" id="demo-auto-gauge">
                        </div>
                        <h3 class="panel-title">Gauge</h3>
                    </div>

                    <!-- Gauge JS -->
                    <!--===================================================-->
                    <div class="panel-body">
                        <div class="text-center">

                            <!--Gauge placeholder-->
                            <canvas id="demo-gauge" height="70" class="canvas-responsive"></canvas>

                            <p class="h4">
                                <span id="demo-gauge-txt" class="label label-primary"></span>
                            </p>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Gauge JS -->

                </div>
            </div>
            <div class="col-sm-6 col-lg-4 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Easy pie charts</h3>
                    </div>
                    <div class="panel-body text-center">

                        <!--Easy Pie Chart-->
                        <!--===================================================-->
                        <div id="demo-pie-1" class="pie-title-center mar-rgt" data-percent="35">
                            <span class="pie-value text-thin"></span>
                        </div>
                        <!--===================================================-->
                        <!-- End Easy Pie Chart -->

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 eq-box-lg">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Easy pie charts</h3>
                    </div>
                    <div class="panel-body text-center">

                        <!--Easy Pie Chart-->
                        <!--===================================================-->
                        <div id="demo-pie-2" class="pie-title-center" data-percent="83">
                            <span class="pie-value text-thin"></span>
                        </div>
                        <!--===================================================-->
                        <!-- End Easy Pie Chart -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h3 class="text-thin">Sparkline</h3>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-lg-3">

            <!--Sparkline Area Chart-->
            <div class="panel panel-success panel-colorful text-center">
                <div class="panel-body">

                    <!--Placeholder-->
                    <div id="demo-sparkline-area"></div>

                </div>
                <div class="bg-light pad-ver">
                    <h4 class="text-thin">Sparkline</h4> Area Chart
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">

            <!--Sparkline Line Chart-->
            <div class="panel panel-info panel-colorful text-center">
                <div class="panel-body">

                    <!--Placeholder-->
                    <div id="demo-sparkline-line"></div>

                </div>
                <div class="bg-light pad-ver">
                    <h4 class="text-thin">Sparkline</h4> Line Chart
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">

            <!--Sparkline Bar Chart-->
            <div class="panel panel-purple panel-colorful text-center">
                <div class="panel-body">

                    <!--Placeholder-->
                    <div id="demo-sparkline-bar" class="box-inline"></div>

                </div>
                <div class="bg-light pad-ver">
                    <h4 class="text-thin">Sparkline</h4> Bar Chart
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">

            <!--Sparkline Pie Chart-->
            <div class="panel panel-mint panel-colorful text-center">
                <div class="panel-body">

                    <!--Placeholder-->
                    <div id="demo-sparkline-pie" class="box-inline "></div>
                </div>
                <div class="bg-light pad-ver">
                    <h4 class="text-thin">Sparkline</h4> Pie chart
                </div>
            </div>
        </div>
    </div>
    <br>
    <h3 class="text-thin mar-btm">Morris Charts</h3>
    <hr>

    <!--Morris Charts -->
    <!--===================================================-->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Area Chart</h3>
                </div>
                <div class="panel-body">

                    <!--Morris Area Chart placeholder-->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <div id="demo-morris-area" style="height:212px"></div>
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Line Chart</h3>
                </div>
                <div class="panel-body">

                    <!--Morris Line Chart placeholder-->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <div id="demo-morris-line" style="height:212px"></div>
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Bar Chart</h3>
                </div>
                <div class="panel-body">

                    <!--Morris Bar Chart placeholder -->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <div id="demo-morris-bar" style="height:212px"></div>
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Donut Chart</h3>
                </div>
                <div class="panel-body">

                    <!--Morris Donut Chart placeholder -->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <div id="demo-morris-donut" style="height:212px"></div>
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Morris Charts -->

    <h3 class="text-thin mar-btm">Flot Charts</h3>

    <!-- Flot Charts -->
    <!--===================================================-->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Line Chart</h3>
                </div>
                <div class="panel-body">

                    <!--Flot Line Chart placeholder-->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <div id="demo-flot-line" style="height:212px"></div>
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Pie Chart</h3>
                </div>
                <div class="panel-body">

                    <!--Flot Donut Chart placeholder -->
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    <div id="demo-flot-donut" style="height:212px"></div>
                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Flot Charts -->



</div>
<!--===================================================-->
<!--End page content-->


@stop

@section('scripts')
    @parent


            <!--Flot Chart [ OPTIONAL ]-->
    <script src="plugins/flot-charts/jquery.flot.min.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.min.js"></script>


    <!--Flot Pie Chart [ OPTIONAL ]-->
    <script src="plugins/flot-charts/jquery.flot.pie.min.js"></script>


    <!--Gauge js [ OPTIONAL ]-->
    <script src="plugins/gauge-js/gauge.min.js"></script>


    <!--Easy Pie Chart [ OPTIONAL ]-->
    <script src="plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>


    <!--Charts [ SAMPLE ]-->
    <script src="js/demo/charts.js"></script>


@stop
