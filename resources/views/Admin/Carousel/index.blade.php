@extends('layout.Admin.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-0"></h5>
                    <p class="sub-header"></p>
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="btn-editable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ad Name</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Action </th>
                                    <th>
                                        <a href="{{url("Admin/Carousel/create")}}" class="btn btn-secondary">Create</a>
                                    </th>
                                </tr>
                            </thead>
                        
                            <tbody>
                            @if(is_array($data) || is_object($data)){
                                @foreach($data as $ca)
                                <tr>
                                    <td>{{$ca->id}}</td>
                                  <td>{{$ca->adsname}}</td>
                                  <td>{{$ca->productname}}</td>
                                  <td>{{$ca->price}}</td>
                                  <td>
                                  <a href="view/{{ $ca->id }}" class="btn btn-secondary">View</a>

                                    <a href="update/{{ $ca->id }}" class="btn btn-success">Edit</button>
                                    @method('DELETE')
                                    <a href="destroy/{{ $ca->id }}" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                            @endforeach
                              }
                               @endif
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> 
</div>
@endsection 

