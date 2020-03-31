@extends('layouts.admin.index')

@section('body')

<div class="container">

  <div class="d-flex justify-content-start">
    <div class="p-2 flex">
        <button 
          id="sidebarCollapse" 
          type="button" 
          class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
          <i class="fa fa-bars mr-2"></i>
          <small class="text-uppercase font-weight-bold"></small>
        </button>
    </div>
    <div class="flex">
        <h4>Dashboard</h4>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-sm-2">
      <div class="c-callout c-callout-info">
        <small class="text-muted">New Clients</small><br>
        <strong class="h4">{{$users->count()}}</strong>
      </div>
    </div><!--/.col-->
    <div class="col-sm-2">
      <div class="c-callout c-callout-danger">
        <small class="text-muted">Cars</small><br>
        <strong class="h4">{{$cars->count()}}</strong>
      </div>
    </div><!--/.col-->
    <div class="col-sm-2">
      <div class="c-callout c-callout-warning">
        <small class="text-muted">Pageviews</small><br>
        <strong class="h4">78,623</strong>
      </div>
    </div><!--/.col-->
    <div class="col-sm-2">
      <div class="c-callout c-callout-success">
        <small class="text-muted">Bookings</small><br>
        <strong class="h4">{{$bookings->count()}}</strong>
      </div>
    </div><!--/.col-->
    <div class="col-sm-2">
      <div class="c-callout">
        <small class="text-muted">CTR</small><br>
        <strong class="h4">23%</strong>
      </div>
    </div><!--/.col-->
    <div class="col-sm-2">
      <div class="c-callout c-callout-primary">
        <small class="text-muted">Bounce Rate</small><br>
        <strong class="h4">5%</strong>
      </div>
    </div><!--/.col-->
  </div><!--/.row-->

  <div class="card-deck text-center mb-4">
    <div class="card bg-primary shadow rounded border-0">
      <div class="row">
        <div class="col-md-4 pt-2">
          <h1 class="display-4"><i class="fa fa-car"></i></h1>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">Total Cars</h4>
            <h2 class="card-text">{{$cars->count()}}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-success shadow rounded border-0">
      <div class="row no-gutters">
        <div class="col-md-4 pt-2">
          <h1 class="display-4"><i class="fa fa-book"></i></h1>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">Total Bookings</h4>
            <h2 class="card-text">{{$bookings->count()}}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="card bg-warning shadow rounded border-0">
      <div class="row no-gutters">
        <div class="col-md-4 pt-2">
          <h1 class="display-4"><i class="fa fa-users"></i></h1>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">Total Users</h4>
            <h2 class="card-text">{{$users->count()}}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  {!! $chart->container() !!}

  {!! $chart->script() !!}
</div>

@endsection
