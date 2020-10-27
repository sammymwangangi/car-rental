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
            <h4>Cars</h4>
        </div>
    </div>

    <div class="row">
        <div class="col pb-2">
            <!-- Button trigger modal -->
            <button class="btn btn-success" data-toggle="modal" data-target="#carModal">
                <span><i class="fa fa-plus fa-1x"></i> Add New Car</span>
            </button>
            <!-- Modal -->
            @include('partials.car-modal')
        </div>
        <div class="col pb-2">
            {{-- <button class="btn btn-success" data-toggle="modal" data-target="#importModal">
                <span><i class="fa fa-file-excel-o fa-1x"></i> Export Cars</span>
            </button> --}}

            <form action="{{ route('car.import') }}" method="POST" name="importform"
               enctype="multipart/form-data">
                @csrf
                {{-- <input type="file" name="file" class="form-control-file">
                <br> --}}
                <a class="btn btn-info" href="{{ route('car.export') }}"> 
                    <span><i class="fa fa-file-excel-o fa-1x"></i> Export Cars</span>
                </a>
                {{-- <button class="btn btn-success">Import File</button> --}}
            </form>
            <!-- Modal -->
            {{-- @include('partials.car-import-modal') --}}
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Passengers</th>
            <th scope="col">Brand</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col-3">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($cars as $car)                
                <tr>
                    <th scope="row">{{$car->id}}</th>
                    <td>
                        @if($car->image != 'car2.png')
                            <img src="/images/{{ $car->image }}" class="img-fluid" style="width:50px; heigh:50px;" alt="event">
                        @else
                            <img src="{{asset($car->image)}}" class="img-fluid" style="width:50px; heigh:50px;" alt="service">
                        @endif
                    </td>
                    <td>{{$car->name}}</td>
                    <td>{{$car->price}}</td>
                    <td>{{$car->nop}}</td>
                    <td>{{$car->category->name}}</td>
                    <td>{{$car->brand->name}}</td>
                    <td>{{$car->description}}</td>
                    @if($car->status == 1)
                        <td>Available</td>
                    @else
                        <td>Not Available</td>
                    @endif
                    <td>
                        <button class="btn btn-info" data-toggle="modal" data-target="#editModal{{ $car->id }}"> 
                           <i class="fa fa-edit"></i> 
                        </button>
                        @include('partials.car-edit')
                    </td>
                    <td>
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @empty
                No data available!
            @endforelse
        </tbody>
    </table>
</div>
@endsection