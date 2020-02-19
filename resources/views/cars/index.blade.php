@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card-deck mt-2">
            @forelse ($cars as $car)
            <div class="card shadow border-0 bg-light p-3 mb-2 rounded">
                <img src="{{asset($car->image)}}" class="card-img-top" alt="...">
                <div class="card-img-overlay text-center">
                <likes 
                    :likes="{{$car->likes}}"
                    :car-id="{{ $car->id }}"
                >
                </likes>
                </div>
                <div class="card-body">
                <h2 class="text-center card-title">KSH.{{$car->price}} <small>/day</small></h2>
                <h5 class="text-center card-title">{{$car->name}}</h5>
                <p class="card-text">{{str_limit($car ->description, $limit = 100, $end = '...')}}</p>
                </div>
                <div class="bg-light d-flex border-0 justify-content-around card-footer">
                    <small class="mt-2 text-muted"><i class="fa fa-bookmark"></i> {{$car->category->name}}</small> 
                    <small class="mt-2 text-muted"><i class="fa fa-car"></i> {{$car->brand->name}}</small> 
                    <small class="mt-2 text-muted"><i class="fa fa-user"></i> {{$car->nop}} Passengers</small>
                </div>
                <div class="bg-light card-footer">
                    <button class="float-right btn btn-outline-dark btn-block">Book <i class="fa fa-arrow-right fa-1x"></i></button>
                </div>
            </div>
            
            @empty
                <h4>No Cars Found!</h4>    
            @endforelse
        </div>
    </div>

@endsection