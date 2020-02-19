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
                <img src="{{asset ('images/car2.png')}}" class="img-fluid" alt="car">
            </div>
        </div>
    </div>
@endsection
