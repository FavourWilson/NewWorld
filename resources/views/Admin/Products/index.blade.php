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
                                    <th>Product Name</th>
                                    <th>Company name</th>
                                    <th>Brand Name</th>
                                    <th>Price</th>
                                    <th>Action </th>
                                    <th>
                                        <a href="{{url("Admin/Products/create")}}" class="btn btn-secondary">Create</a>
                                    </th>
                                </tr>
                            </thead>
                        
                            <tbody>
                            @if(is_array($data) || is_object($data)){
                                @foreach($data as $products)
                                <tr>
                                    <td>{{$products->id}}</td>
                                  <td>{{$products->productName}}</td>
                                  <td>{{$products->Companyname}}</td>
                                  <td>{{$products->brandname}}</td>
                                  <td>{{$products->price}}</td>
                                  <td>
                                  <a href="/Admin/Products/view/{{ $products->id }}" class="btn btn-secondary">View</a>

                                    <a href="/Admin/Products/update/{{ $products->id }}" class="btn btn-success">Edit</button>
                                    @method('DELETE')
                                    <a href="/Admin/Products/delete/{{ $products->id }}" class="btn btn-danger">Delete</a>
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

