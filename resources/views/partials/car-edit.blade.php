<div class="modal fade" id="editModal{{ $car->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Car</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{route('cars.show', ['car' => $car->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" id="name" name="name" value="{{$car->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{$car->price}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="passengers">Passengers</label>
                        <input type="number" class="form-control" id="passengers" name="nop" value="{{$car->nop}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status"><strong>Status</strong> <em>[Available=1, Not-Available=0]</em> </label>
                        <select id="status" name="status" class="form-control">
                            <option value="{{$car->status}}">{{$car->status}}</option>
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control" cols="30" rows="4">{{$car->description}}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <img src="{{asset($car->image)}}" style="width:100px; height:100px" alt="car-image">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="image">Change car photo</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
        </div>
    </div>
    </div>
</div>