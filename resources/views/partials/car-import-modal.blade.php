<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">

            <form action="{{ route('car.import') }}" method="POST" name="importform"
               enctype="multipart/form-data">
                @csrf
                {{-- <input type="file" name="file" class="form-control-file">
                <br> --}}
                <a class="btn btn-info" href="{{ route('car.export') }}"> 
                 Export File</a>
                {{-- <button class="btn btn-success">Import File</button> --}}
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>