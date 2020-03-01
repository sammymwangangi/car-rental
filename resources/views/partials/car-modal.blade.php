<div class="modal fade" id="carModal" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="carModalLabel">New Car</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Porsche">
                </div>
                <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="1000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="passengers">Passengers</label>
                    <input type="number" class="form-control" id="passengers" name="nop" placeholder="5">
                </div>
                <div class="form-group col-md-6">
                    <label for="status"><strong>Status</strong> <em>[Available=1, Not-Available=0]</em></label>
                    <select id="status" name="status" class="form-control">
                        <option value="1" selected>Available</option>
                        <option value="1">Available</option>
                        <option value="0">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="category_id">Category</label>
                  <select id="category_id" name="category_id" class="form-control">
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group col-md-6">
                  <label for="brand_id">Brand</label>
                  <select id="brand_id" name="brand_id" class="form-control">
                    @foreach ($brands as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control" cols="30" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="image">Select car photo</label>
              <input type="file" name="image" class="form-control-file" id="image">
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