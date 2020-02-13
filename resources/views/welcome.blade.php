<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm p-1" style="background-color: #55165F;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset ('images/client-logo1.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link h4" href="#"><i class="fa fa-home"></i> HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h4" href="#"><i class="fa fa-globe"></i> ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h4" href="#"><i class="fa fa-car"></i>CARS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h4 uppercase" href="#"><i class="fa fa-phone"></i>CONTACT US</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link h4" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link h4" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div id="jumbo-bg" class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6" style="color: cornsilk">
                        <h6>Feugiat tortor mauris, vitae magna parturient nec, velit bibensectetuer eros urna nunc suspendisse</h6>
                        <h1 class="display-4">Upto 25% off on first booking through your app</h1>
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
                    <img src="{{asset ('images/car2.png')}}" alt="car">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
