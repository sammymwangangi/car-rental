@extends('layouts.admin.index')

@section('body')

<div class="container">
    <div class="d-flex justify-content-start">
        <div class="p-2 flex">
            <button 
              id="sidebarCollapse" 
              type="button" 
              class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
              <i class="fa fa-bars mr-2"></i>
              <small class="text-uppercase font-weight-bold"></small>
            </button>
        </div>
        <div class="p-2 flex">
            <h4>Payments</h4>
        </div>
    </div>
    <table class="table table-hover table-bordered">
        <caption>List of Payments</caption>
        <thead class="thead-dark">
            <tr>
                <th scope="col">User</th>
                <th scope="col">Car</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        @if($booking->is_approved==1)
                            <td>{{$booking->user->name}}</td>
                            <td>{{$booking->car->name}}</td>
                            <td>KSH. {{$booking->car->price}}</td>
                        @else
                        <div class="alert alert-danger text-center" role="alert">
                            No Payments yet!
                        </div>
                        @endif
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>

@endsection