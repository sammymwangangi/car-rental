@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Contact Us</h3>
                            <p class="text-muted mb-4">Didn't get the car you wanted? We can help you get it!</p>
                            <form action="/contact" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="email" type="email" name="email" placeholder="Email address" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">

                                    @error('email')
                                        <div class="text-danger p-4">{{ $message }}</div>
                                    @enderror

                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Submit</button>
                                
                                @if(session('message'))
                                    <div class="alert alert-success alert-dismissible fade show p-4" role="alert">
                                        {{ session('message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
@endsection