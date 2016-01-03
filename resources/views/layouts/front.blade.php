@extends('layouts.master')

@section('layout')

    <div class="backgroundr">

<nav class="navbar navbar-default" style="background-color:#000;padding:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Michael J. Tavares <i class="fa fa-home"></i></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#" class="col-sm-12 btn"><i class="fa fa-image"></i> Art Gallery</a>          
        </li>
        <li>
          <a href="#" class="col-sm-12 btn"><i class="fa fa-camera-retro"></i> Photo Gallery</a>
        </li>
        <li>
        <li>
          <a href="#" class="col-sm-12 btn">Login</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@yield('content')

    </div>
@stop