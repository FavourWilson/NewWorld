@extends('layout.Admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Category</h4>
                    <p class="sub-header">
                    </p>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{url('Admin/SubCategory/store')}}">
                                @csrf
                                <div class="mb-3">
                                
                                    <label for="pname" class="form-label">Company Name</label>
                                    <select class="form-control" name="categoryid" id="categoryid">
                                        <option disabled>--Please Select--</option>
                                        @foreach($category as $categories)
                                            <option value="{{$categories->id}}">{{$categories->companyname}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="pname" class="form-label">Brand Name</label>
                                    <input type="text" id="bname" name="bname" class="form-control" placeholder="Brand Name">
                                </div>
                                
                                <div class="mb-3">
                                    <button class="btn input-group-text btn-dark waves-effect waves-light" type="submit">Save Category</button>
                                </div>

                            </form>
                        </div> <!-- end col -->


                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
</div>
@endsection

