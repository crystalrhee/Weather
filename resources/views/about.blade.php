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
            <li>
                <a href="/daily"><i class="fa fa-fw fa-bar-chart-o"></i>Daily</a>
            </li>
            <li>
                <a href="/weekly"><i class="fa fa-fw fa-table"></i>Weekly</a>
            </li>
            <li class = "active">
                <a href="/about"><i class="fa fa-fw fa-wrench"></i>About</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Introduction Row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">About Us
            <small>It's Nice to Meet You!</small>
        </h1>
        <p>This is our project for Database Design CS3200.</p>
    </div>
</div>

<!-- Team Members Row -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Our Team</h2>
    </div>
    <div class="col-lg-4 col-sm-6 text-center">
        <img src="/images/rhee.jpg" height = '380px' width = '380px'>
        <h3>Soo Jung Rhee
            <small>Second Year</small>
        </h3>
        <p>Combined Computer Science and Business Major</p>
    </div>
    <div class="col-lg-4 col-sm-6 text-center">
        <img src="images/dang.jpg" height = '380px' width = '380px'>
        <h3>Matt Dang
            <small>Third Year</small>
        </h3>
        <p>Computer Science Major</p>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; DangRhee 2017</p>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</footer>
@endsection