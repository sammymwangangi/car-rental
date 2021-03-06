<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
            <h4 class="m-0">{{ Auth::user()->name }}</h4>
            <!-- <p class="font-weight-light text-muted mb-0">Web developer</p> -->
        </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
        <a href="{{url('dashboard')}}" class="{{Request::is('dashboard') ? 'bg-light': ''}} nav-link text-dark">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Dashboard
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('dashboard.cars')}}" class="{{Request::is('dashboard/cars') ? 'bg-light': ''}} nav-link text-dark">
            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
            Cars
        </a>
        </li>
        <li class="nav-item">
        <a href="{{route('dashboard.bookings')}}" class="{{Request::is('dashboard/bookings') ? 'bg-light': ''}} nav-link text-dark">
            <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
            Bookings
        </a>
        </li>
        <li class="nav-item">
        <a href="{{url('dashboard/reports')}}" class="{{Request::is('dashboard/reports') ? 'bg-light': ''}} nav-link text-dark">
            <i class="fa fa-key mr-3 text-primary fa-fw"></i>
            Reports
        </a>
        </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Others</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
        <a href="{{url('dashboard/payments')}}" class="{{Request::is('dashboard/payments') ? 'bg-light': ''}} nav-link text-dark">
            <i class="fa fa-money mr-3 text-primary fa-fw"></i>
            Payments
        </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->