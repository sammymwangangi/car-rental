@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="media mt-4">
            <img src="{{asset($car->image)}}" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h4 class="mt-0">{{$car->name}}</h4>
                <p class="text-muted">
                    {{ $car->description }}
                </p>

                <div class="card" style="width: 38rem;">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group input-group flex-nowrap col-md-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Pickup location" aria-label="Pickup location" aria-describedby="addon-wrapping">
                                </div>
                                <div class="form-group input-group flex-nowrap col-md-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Drop location" aria-label="Drop location" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group input-group flex-nowrap col-md-6">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control" id="inputCity" placeholder="Pickup Date" aria-label="Pickup Date" aria-describedby="addon-wrapping">
                                </div>
                                <div class="form-group input-group flex-nowrap col-md-6">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <input type="text" class="form-control" id="inputZip" placeholder="12:35 PM" aria-label="12:35 PM" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group input-group flex-nowrap col-md-6">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control" id="inputCity" placeholder="Drop Off Date" aria-label="Drop Off Date" aria-describedby="addon-wrapping">
                                </div>
                                <div class="form-group input-group flex-nowrap col-md-6">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <input type="text" class="form-control" id="inputZip" placeholder="10:30 AM" aria-label="10:30 AM" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg btn-block" style="background-color: #9561e2; color: white">Book <i class="fa fa-plus"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection