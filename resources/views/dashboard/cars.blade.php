@extends('layouts.admin.index')

@section('body')



<div class="container">

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
            <button class="btn btn-success" data-toggle="modal" data-target="#importModal">
                <span><i class="fa fa-file-excel-o fa-1x"></i> Import Cars</span>
            </button>
            <!-- Modal -->
            @include('partials.car-import-modal')
        </div>
    </div>
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
                        <img src="{{asset($car->image)}}" style="width:50px; heigh:50px;" alt="car-image">
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
                        <button class="btn btn-info" data-toggle="modal" data-target="#editModal-{{ $car->id }}"> 
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