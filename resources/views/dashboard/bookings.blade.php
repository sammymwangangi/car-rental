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
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
          <tbody>
              @foreach ($bookings as $booking)
                  
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
                            @if($booking->is_approved==1)
                                <span class="badge badge-pill badge-success">APPROVED</span>
                            @else
                                <span class="badge badge-pill badge-danger">NOT APPROVED</span>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                               data-target="#status-modal-{{ $booking->id }}">
                               <span>
                                   <i class="fa fa-fw fa-edit"></i> Toggle Status
                               </span>
                            </a>
                        </td>
                        <!-- ====================Toggle status Modal===========================  -->
                        <div id="status-modal-{{ $booking->id }}" class="modal fade" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                             style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h5>Are you sure you want to change the status?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('bookings.status', $booking->id) }}"
                                           class="btn btn-success float-left">Okay</a>
                                        <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancel
                                        </button>
                                    </div>
                                </div>
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- ====================End Toggle status Modal===========================  -->
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