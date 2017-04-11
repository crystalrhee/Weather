@extends('layout')

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-left" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="/">Home</a>
    </div>

    <!-- Sidebar Menu Items -->
    <div>
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="/daily"><i class="fa fa-fw fa-bar-chart-o"></i>Daily</a>
            </li>
            <li>
                <a href="/weekly"><i class="fa fa-fw fa-table"></i>Weekly</a>
            </li>
            <li>
                <a href="/about"><i class="fa fa-fw fa-wrench"></i>About</a>
            </li>
        </ul>
    </div>
</nav>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Weather <small>Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>Like Weather View?</strong> Check out our<a href="https://github.com/crystalrhee/Weather-Application.git" class="alert-link"> GitHub Page </a> for more information!
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!--Table constructor start -->
        <div class="pmd-content pmd-content-custom" id="content"> 

            <!--component header -->
            <div class="componant-title-bg"> 
                <div class="container">
                    <div class="row">

                        <!-- component title and description -->
                        <div class="col-lg-12">
                            <h1>This Week</h1>
                            <p class="lead">Weather is the state of the atmosphere, to the degree that it is hot or cold, wet or dry, calm or stormy, clear or cloudy. Most weather phenomena occur in the lowest level of the atmosphere, the troposphere, just below the stratosphere.</p>
                        </div><!-- component title and description end-->

                    </div>
                </div>
            </div><!--component header end-->

            <div class="custom-table">
                <div class="container">

                    <!-- Basic Bootstrap Table -->
                    <section class="row component-section">

                        <!-- Basic Bootstrap Table code and example -->
                        <div class="col-lg-12">
                            <div class="component-box">
                                <!-- Basic Bootstrap Table example -->
                                <div class="pmd-card pmd-card-custom-view">
                                    <div class="table-responsive">
                                        <table cellspacing="0" cellpadding="0" class="table" id="table-bootstrap">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>High Temp</th>
                                                    <th>Low Temp</th>
                                                    <th>Precipitation</th>
                                                    <th>Humidity</th>
                                                </tr>
                                            </thead>

                                            @foreach ($weathers as $weather)
                                            <tbody>
                                                <tr>
                                                    <td class="text-right">{{ $weather->date }}</td>
                                                    <td class="text-right">{{ $weather->tempHigh }}</td>
                                                    <td class="text-right">{{ $weather->tempLow }}</td>
                                                    <td class="text-right">{{ $weather->precipitation }}</td>
                                                    <td class="text-right">{{ $weather->humidity }}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- line graph-->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-area-chart">

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                </div>
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                    <div class="text-right">
                        <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                </div>
                <div class="panel-body">
                    <!---->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
</div>