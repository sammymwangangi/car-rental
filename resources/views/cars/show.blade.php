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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if($car->status == 1)
                    <div class="card" style="width: 38rem;">
                        <div class="card-body">
                            @include('partials.book')
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