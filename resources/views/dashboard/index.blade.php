@extends('layouts.admin.index')

@section('body')

<div class="card-deck text-center">
  <div class="card bg-primary shadow rounded border-0">
    <div class="row">
      <div class="col-md-4 pt-2">
        <h1 class="display-4"><i class="fa fa-car"></i></h1>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text">{{$cars->count()}}</p>
          <h4 class="card-title">Cars</h4>
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
          <p class="card-text">{{$bookings->count()}}</p>
          <h4 class="card-title">Bookings</h4>
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
          <p class="card-text">{{$users->count()}}</p>
          <h4 class="card-title">Users</h4>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
