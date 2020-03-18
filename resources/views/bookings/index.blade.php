@extends('layouts.app')

@section('content')
    <div class="container p-4">
        <h2> My Bookings </h2>
        <table class="table table-bordered p-4">
            <thead>
                <tr>
                    <th scope="col">Car Name</th>
                    <th scope="col">Car Price</th>
                    <th scope="col">Pickup Location</th>
                    <th scope="col">Pickup Date</th>
                    <th scope="col">Pickup Time</th>
                    <th scope="col">Drop-Off Location</th>
                    <th scope="col">Drop-Off Date</th>
                    <th scope="col">Drop-Off Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)                   
                    <tr>
                        <td>{{$booking->car->name}}</td>
                        <td>KSH.{{$booking->car->price}}</td>
                        <td>{{$booking->pickup_loc}}</td>
                        <td>{{$booking->pickup_date}}</td>
                        <td>{{$booking->pickup_time}}</td>
                        <td>{{$booking->drop_loc}}</td>
                        <td>{{$booking->drop_date}}</td>
                        <td>{{$booking->drop_time}}</td>
                        <td>
                            <form action="{{action('BookingController@destroy', $booking['id'])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Cancel Booking</button>
                            </form>
                        </td>
                    </tr>
                {{-- @empty
                    <tr>
                    <h4>No Bookings Available, go to <a href="{{routes('cars.index')}}">cars</a> to book one</h4>
                    </tr> --}}
                @endforeach
            </tbody>
        </table>

    <a class="btn btn-info" href="{{route('cars.index')}}">Book another car</a>
    </div>
@endsection