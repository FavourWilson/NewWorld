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
                                    <th>Fullname</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                        
                            <tbody>
                            @if(is_array($user) || is_object($user)){
                                @foreach($user as $users)
                                <tr>
                                    <td>{{$users->id}}</td>
                                    <td>{{$users->name}}</td>
                                  <td>{{$users->phone}}</td>
                                  <td>{{$users->email}}</td>
                                  <td>{{$users->password}}</td>
                                  <td>

                                    <a href="" class="btn btn-success">Edit</a>
                                  
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

