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
            <h4>Bookings</h4>
        </div>
    </div>
    <table class="table table-hover table-responsive">
        <caption>List of Bookings</caption>
        <thead class="thead-dark">
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
              <th scope="col">Action</th>
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
                        <td>
                            <label class="c-switch c-switch-sm c-switch-pill c-switch-success">
                                <input type="checkbox" class="c-switch-input" checked>
                                <span class="c-switch-slider"></span>Approve
                            </label>
                            {{-- <div class="custom-control custom-switch custom-switch-success">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Approve</label>
                            </div> --}}
                        </td>
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