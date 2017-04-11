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
			<li class>
				<a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
			</li>
			<li class="active">
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
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Weather Today</div>

				<div class="panel-body">
					@foreach ($weathers as $weather)
					<h1>Date</h1>
					<h2 class="text-center">{{ $weather->date }}</h2>
					<hr>
					<h1 >Temperature</h1>
					<h1 class="display-1 text-center">HIGH <a href = "https://weather.com">{{ $weather->tempHigh }} degrees Fahrenheit</a></h1>
					<h1 class="text-center"><small>LOW {{ $weather->tempLow }} degrees Fahrenheit</small></h1>
					<hr>
					<h1>Humidity</h1>
					<h2 class="text-center">{{ $weather->humidity }} %</h2>
					<hr>
					<h1>Precipitation</h1>
					<?php if ($weather->precipitation == 0){ ?>
						<h2 class="text-center">Not Precipitating</h2>
					<?php } else { ?>
						<h2 class="text-center">Precipitating</h2>
					<?php } ?>
					<hr>
					<hr>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

	@endsection