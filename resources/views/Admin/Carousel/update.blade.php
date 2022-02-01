@extends('layout.Admin.app')
@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

@endpush
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Products</h4>
                    <p class="sub-header">
                    </p>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{url('Admin/Carousel/update/'.$car[0]->id)}}" enctype="multipart/form-data">
                                @method("PUT")
                                @csrf
                                <div class="mb-3">
                                    <label for="adsname" class="form-label">Ad Name</label>
                                    <input type="text" id="adsname" name="adsname" class="form-control" value="{{$car[0]->adsname}}" placeholder="Ad Name">
                                </div>

                                

                                <div class="mb-3" id="sub_cat_place">
                                </div>

                                <div class="mb-3">
                                    <label for="pname" class="form-label">Product Name</label>
                                    <input type="text" id="pname" name="pname" class="form-control" value="{{$car[0]->productname}}" placeholder="Product Name">
                                </div>

                                

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" id="price" name="price" class="form-control" value="{{$car[0]->price}}" placeholder="Price">
                                </div>

                                <div class="mb-3 increment">
                                    <label for="images" class="form-label">Images</label>

                                    <input type="file" id="images" name="images" value="{{$car[0]->images}}" class="form-control">
                                   
                                </div>

                              
                                <div class="mb-3">
                                    <button class="btn input-group-text btn-dark waves-effect waves-light" type="submit">Update Ads</button>
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

@push('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>







@endpush