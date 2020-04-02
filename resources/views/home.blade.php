@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4 border-0 p-2 rounded-lg shadow">
{{--                <div class="card-header">Dashboard</div>--}}
                <img src="{{asset('images/cars/car.svg')}}" class="card-img-top img-responsive" alt="...">

                <div class="card-body text-center text-warning" style="margin-top: -15rem">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="display-4">Hello, {{Auth::user()->name }}</h1>
                    <h4>
                        You are logged in!
                        <a href="{{route('cars.index')}}">Book</a> a car.
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
