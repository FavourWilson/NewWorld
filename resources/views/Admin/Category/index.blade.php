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
                                    <th>Category Name</th>
                                    <th>Action</th>
                                    <th>
                                        <a href="{{url("Admin/Category/create")}}" class="btn btn-success">Create Category</button>
                                    </th>
                                </tr>
                            </thead>
                        
                            <tbody>
                            @if(is_array($data) || is_object($data)){
                                @foreach($data as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                  <td>{{$category->Companyname}}</td>
                                  <td>

                                    <a href="/Admin/Category/update/{{ $category->id }}" class="btn btn-success">Edit</button>
                                    @method('DELETE')
                                    <a href="/Admin/Category/delete/{{ $category->id }}" class="btn btn-danger">Delete</a>
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

