@extends('layouts.app')

@section('content')
    <div id="jumbo-bg" class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-6" style="color: cornsilk">
                    <h6>Feugiat tortor mauris, vitae magna parturient nec, velit bibensectetuer eros urna nunc suspendisse</h6>
                    <h1 class="display-4">Upto 25% off on first booking through your app</h1>
                    <a href="{{route('cars.index')}}" class="btn btn-primary btn-lg" role="button">Browse Cars</a>
                </div>
                <div class="col-6">
                    <div class="card" style="width: 38rem;">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <select id="inputState" class="form-control">
                                    <option selected>Choose Your Car Type</option>
                                    <option>Car type 1</option>
                                    <option>Car type 2</option>
                                    <option>Car type 3</option>
                                    </select>
                                </div>
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
                                <button type="submit" class="btn btn-lg btn-block" style="background-color: #9561e2; color: white">Search Cars <i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="display-4">We are Best Car Rental Company to Find Car</h1>
                <h4>
                    Lorem ipsum dolor sit amet, sit lectus risus dis aptent, vitae odio nec. Justo volutpat rutrum purus,
                    augue cursus, turpis felis nonummy nisl. Vel justrus sed volutpat, tristique tempor scelerisque dictum dui donec urna,
                    consequat scelerisque eu ut, ornare ut. Rutrum eget
                </h4>
            </div>
            <div class="col-4">
                <img src="{{asset ('images/cars/car.svg')}}" class="img-fluid" alt="car">
            </div>
        </div>

        <div class="p-4">
            {{-- <h6 class=" text-uppercase">Text content</h6> --}}
            <!-- Gradient divider -->
            <hr data-content="FEATURED CARS" class="hr-text">
        </div>

        <div class="card-deck m-2">
            @forelse ($cars as $car)
            <div class="card">
                <img src="{{asset($car->image)}}" class="card-img-top" alt="...">
                    <div class="d-flex justify-content-between p-2">
                        @if($car->status == 1)
                            <h4>
                                <span class="badge rounded-circle bg-success">
                                    <i class="fa fa-check fa-2x"></i>
                                </span>
                            </h4>
                        @else
                            <h4>
                                <span class="badge rounded-circle bg-danger">
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
                <div class="card-body">
                    <h2 class="text-center card-title">KSH.{{$car->price}}<small>/day</small></h2>
                <h5 class="text-center card-title text-info"><a href="{{url('/cars/'.$car->id)}}">{{$car->name}}</a></h5>
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
                        <a class="btn btn-sm btn-outline-success" href="{{url('/cars/'.$car->id)}}">Book <i class="icon-arrow-right"></i></a>
                    @else
                        <button class="btn btn-sm btn-outline-danger"><i class="fa fa-times fa-1x"></i> Not Available </button>
                    @endif
                </div>
            </div>

            @empty
                <h4>No Cars Found!</h4>
            @endforelse
        </div>

        <div class="p-4">
            <hr data-content="TESTIMONIALS" class="hr-text">
        </div>
        <section class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 mx-auto">
                        <div class="p-5 bg-white shadow rounded">
                            <!-- Bootstrap carousel-->
                            <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                                <!-- Bootstrap carousel indicators [nav] -->
                                <ol class="carousel-indicators mb-0">
                                    <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>


                                <!-- Bootstrap inner [slides]-->
                                <div class="carousel-inner px-5 pb-4">
                                    <!-- Carousel slide-->
                                    <div class="carousel-item active">
                                        <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-1_ffutqr.jpg" alt="" width="75">
                                            <div class="media-body ml-3">
                                                <blockquote class="blockquote border-0 p-0">
                                                    <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <footer class="blockquote-footer">Someone famous in
                                                        <cite title="Source Title">Source Title</cite>
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Carousel slide-->
                                    <div class="carousel-item">
                                        <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-3_hdxocq.jpg" alt="" width="75">
                                            <div class="media-body ml-3">
                                                <blockquote class="blockquote border-0 p-0">
                                                    <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <footer class="blockquote-footer">Someone famous in
                                                        <cite title="Source Title">Source Title</cite>
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Carousel slide-->
                                    <div class="carousel-item">
                                        <div class="media"><img class="rounded-circle img-thumbnail" src="https://res.cloudinary.com/mhmd/image/upload/v1579676165/avatar-2_gibm2s.jpg" alt="" width="75">
                                            <div class="media-body ml-3">
                                                <blockquote class="blockquote border-0 p-0">
                                                    <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <footer class="blockquote-footer">Someone famous in
                                                        <cite title="Source Title">Source Title</cite>
                                                    </footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Bootstrap controls [dots]-->
                                <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left text-dark text-lg"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="fa fa-angle-right text-dark text-lg"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
