@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Car Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Pickup Location</th>
                <th scope="col">Pickup Date</th>
                <th scope="col">Pickup Time</th>
                <th scope="col">Drop-Off Location</th>
                <th scope="col">Drop-Off Date</th>
                <th scope="col">Drop-Off Time</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($bookings as $booking)
                    
                    <tr>
                    <th scope="row">{{$booking->id}}</th>
                        <td>{{$booking->car->name}}</td>
                        <td>{{$booking->user->name}}</td>
                        <td>{{$booking->pickup_loc}}</td>
                        <td>{{$booking->pickup_date}}</td>
                        <td>{{$booking->pickup_time}}</td>
                        <td>{{$booking->drop_loc}}</td>
                        <td>{{$booking->drop_date}}</td>
                        <td>{{$booking->drop_time}}</td>
                    </tr>
                @empty
                    <tr>
                    <h4>No Bookings Available, go to <a href="{{routes('cars.index')}}">cars</a> to book one</h4>
                    </tr>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection