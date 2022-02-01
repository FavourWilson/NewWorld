@extends('layout.Admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Update Category</h4>
                    <p class="sub-header">
                    </p>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{url('Admin/Category/update',$data[0]->id)}}">
                               @method("PUT")
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="cname" class="form-label">Company Name</label>
                                    <input type="text" id="cname" name="cname" class="form-control" value="{{$data[0]->Companyname}}" placeholder="Company Name">
                                </div>
                                
                                <div class="mb-3">
                                    <button class="btn input-group-text btn-dark waves-effect waves-light" type="submit">update Category</button>
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

