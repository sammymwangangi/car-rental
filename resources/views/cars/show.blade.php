@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="media mt-4">
            <img src="{{asset($car->image)}}" class="align-self-start mr-3" alt="car">
            <div class="media-body">
                <h4 class="mt-0">{{$car->name}}</h4>
                <p class="text-muted">
                    {{ $car->description }}
                </p>
                @if($car->status == 1)
                    <div class="card" style="width: 38rem;">
                        <div class="card-body">
                        <form method="POST" action="{{ route('bookings.store') }}">
                                <div class="form-row">
                                    <div class="form-group input-group flex-nowrap col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="pickup-loc" id="inputEmail4" placeholder="Pickup location" aria-label="Pickup location" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="form-group input-group flex-nowrap col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="drop_loc" id="inputPassword4" placeholder="Drop location" aria-label="Drop location" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group input-group flex-nowrap col-md-6">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="pickup_date" id="inputCity" placeholder="Pickup Date" aria-label="Pickup Date" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="form-group input-group flex-nowrap col-md-6">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="pickup_time" id="inputZip" placeholder="12:35 PM" aria-label="12:35 PM" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group input-group flex-nowrap col-md-6">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="drop_date" id="inputCity" placeholder="Drop Off Date" aria-label="Drop Off Date" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class="form-group input-group flex-nowrap col-md-6">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="addon-wrapping"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="drop_time" id="inputZip" placeholder="10:30 AM" aria-label="10:30 AM" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                @guest
                                    <a href="{{route('login')}}" class="btn btn-lg btn-block btn-warning">Login to Book </a>
                                @else
                                    <button type="submit" class="btn btn-lg btn-block btn-info">Book <i class="icon-plus"></i></button>
                                @endguest
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-danger text-center" role="alert">
                        <strong>Sorry! Currently not available for booking!</strong>
                    </div>
                @endif
            </div>
        </div>
        <a href="{{route('cars.index')}}" class="btn btn-md btn-success mt-2"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

@endsection