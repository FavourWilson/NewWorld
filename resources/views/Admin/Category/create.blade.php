@extends('layout.Admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Ccategory</h4>
                    <p class="sub-header">
                    </p>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{url('Admin/Category/store')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="pname" class="form-label">Company Name</label>
                                    <input type="text" id="cname" name="cname" class="form-control" placeholder="Company Name">
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

