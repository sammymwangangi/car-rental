@extends('layouts.admin.index')

@section('title', 'Analytics')

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
        <div class="p-2 flex">
            <h4>Reports</h4>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-body">
                    {!! $chart->container() !!}
                    
                    {!! $chart->script() !!}
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card shadow">
                <div class="card-body">
                    {!! $rented->container() !!}
                    
                    {!! $rented->script() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-body">
                    {!! $user->container() !!}
                    
                    {!! $user->script() !!}
                </div>
            </div>
        </div>
        <div class="col-6">
            All Users
        </div>
    </div>
</div>

@endsection