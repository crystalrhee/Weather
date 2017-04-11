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
				<a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
			</li>
			<li>
				<a href="/daily"><i class="fa fa-fw fa-bar-chart-o"></i>Daily</a>
			</li>
			<li class="active">
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
		<div class="panel panel-default">
			<div class="panel-heading">Weekly</div>

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
	</div>
</div>
@endsection