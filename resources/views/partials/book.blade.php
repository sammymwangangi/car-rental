<form method="POST" action="{{ route('bookings.store') }}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="pickup_loc">Pickup Location</label>
        <input type="text" class="form-control" id="pickup_loc" name="pickup_loc">
      </div>
      <div class="form-group col-md-6">
        <label for="drop_loc">Drop Location</label>
        <input type="text" class="form-control" name="drop_loc" id="drop_loc">
      </div>
    </div>
    <div class="form-group">
      <label for="pickup_time">Pickup Time</label>
      <input type="time" class="form-control" id="pickup_time" name="pickup_time" placeholder="1234 Main St">
    </div>
    <div class="form-group">
      <label for="drop_time">Drop Time</label>
      <input type="time" class="form-control" id="drop_time" name="drop_time" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="pickup_date">Pickup Date</label>
        <input type="date" class="form-control" id="pickup_date" max="3000-12-31" 
        min="1000-01-01" name="pickup_date">
      </div>
      <div class="form-group col-md-4">
        <label for="drop_date">Drop Date</label>
        <input type="date" class="form-control" id="drop_date" max="3000-12-31" 
        min="1000-01-01" name="drop_date">
      </div>
    </div>
    <input type="hidden" name="car_id" value="{{$car->id}}">
    <button type="submit" class="btn btn-primary">Book</button>
</form>