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
					<h1 class="pmd-display-4">Temperature</h1>
					<a href="https://weather.com">
						<h1 class="pmd-display-4">{{ $weather->tempHigh }} <small> {{ $weather->tempLow }}</small></h1>
					</a>
					@endforeach

					<div class="text-right">
                        <h6>degrees Fahrenheit<i class="fa fa-arrow-circle-right"></i></h6>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection