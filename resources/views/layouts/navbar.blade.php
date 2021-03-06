<nav class="navbar navbar-expand-md navbar-dark shadow-sm p-1 sticky-top" style="background-color: #55165F;">
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
                    <a class="nav-link" href="{{url('/')}}"><i class="fa fa-home"></i> HOME</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}"><i class="fa fa-globe"></i> ABOUT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('cars.index') }}"><i class="fa fa-car"></i> CARS</a>
                </li>
                @auth()
                <li class="nav-item">
                <a class="nav-link uppercase" href="{{ url('/dashboard') }}"><i class="fa fa-th-large"></i> DASHBOARD</a>
                </li>
                <li class="nav-item">
                <a class="nav-link uppercase" href="{{ url('/bookings') }}"><i class="fa fa-book"></i> My Bookings</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link uppercase" href="{{ route('contact.index') }}"><i class="fa fa-phone"></i> CONTACT US</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> {{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{asset('images/users/'.Auth::user()->avatar)}}" alt="" class="img-responsive img-circle" style="width: 2rem; height: 2rem">
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/profile/editProfile/'.Auth::user()->id )}}"><i class="fa fa-user"></i> Edit Profile</a>
                            <a class="dropdown-item" href="{{ url('/profile/passwordChange') }}"><i class="fa fa-lock"></i> Manage Password</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }}
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
