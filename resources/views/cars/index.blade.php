@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card-deck mt-2">
            @forelse ($cars as $car)
            <div class="card shadow border-0 p-2 mb-2 rounded">
                    <div class="d-flex justify-content-between">
                        @if($car->status == 1)
                            <h4>
                                <span class="badge rounded-circle badge-success">
                                    <i class="fa fa-check fa-2x"></i>
                                </span>
                            </h4>
                        @else
                            <h4>
                                <span class="badge rounded-circle badge-danger">
                                    <i class="fa fa-times fa-2x"></i>
                                </span>
                            </h4>
                        @endif
                        <likes 
                            :likes="{{$car->likes}}"
                            :car-id="{{ $car->id }}"
                        >
                        </likes>
                    </div>
                <img src="{{asset($car->image)}}" class="img-fluid card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="text-center card-title">KSH.{{$car->price}}<small>/day</small></h2>
                    <h5 class="text-center card-title text-info">{{$car->name}}</h5>
                    <p class="card-text">{{str_limit($car ->description, $limit = 100, $end = '...')}}</p>
                </div>
                <div class=" d-flex border-0 justify-content-around card-footer">
                    <small class="mt-2"><i class="fa fa-bookmark text-primary"></i> {{$car->category->name}}</small> 
                    <small class="mt-2"><i class="fa fa-car text-warning"></i> {{$car->brand->name}}</small> 
                    <small class="mt-2"><i class="fa fa-users text-danger"></i> {{$car->nop}} Passengers</small>
                </div>
                <div class=" d-flex justify-content-between card-footer">
                    <small class="mt-2 text-muted"><i class="fa fa-clock"></i>Uploaded at {{$car->created_at}}</small>
                    @if($car->status == 1)
                        <a class="btn btn-sm btn-outline-success" href="{{route('cars.show', $car->id)}}">Book <i class="fa fa-arrow-right fa-1x"></i></a>
                    @else
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-times fa-1x"></i> Not Available </button>
                    @endif
                </div>
            </div>
            
            @empty
                <h4>No Cars Found!</h4>    
            @endforelse
        </div>
    </div>

@endsection