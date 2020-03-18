@extends('layouts.app')

@section('content')
    <div class="container">
        <h2> My Bookings </h2>
        <table class="table table-bordered p-4">
            <thead>
                <tr>
                    <th scope="col">Car Name</th>
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
                        <td>{{$booking->car->name}}</td>
                        <td>{{$booking->pickup_loc}}</td>
                        <td>{{$booking->pickup_date}}</td>
                        <td>{{$booking->pickup_time}}</td>
                        <td>{{$booking->drop_loc}}</td>
                        <td>{{$booking->drop_date}}</td>
                        <td>{{$booking->drop_time}}</td>
                    </tr>
                @empty
                    <tr>
                    <h4>No Bookings Available, go to <a href="{{route('cars.index')}}">cars</a> to book one</h4>
                    </tr>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection