@extends('layout.Admin.app')
@section('content')
<div class="container-fluid">

<div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="index.html#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-face"></i>
                    </a>
                    
                </div>

                <h4 class="header-title mt-0 mb-4">Total Customers</h4>

                <div class="widget-chart-1">
                    

                    <div class="widget-detail-1 text-end">
                        <h2 class="fw-normal pt-2 mb-1"> {{$user->count()}} </h2>
                        <p class="text-muted mb-1">Customers Available</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                   
                    <div class="dropdown-menu dropdown-menu-end">
                        <i class="mdi mdi-cart"></i>
                    </div>
                </div>

                <h4 class="header-title mt-0 mb-3">Total Uncompleted Orders</h4>

                <div class="widget-box-2">
                    <div class="widget-detail-2 text-end">
                        <h2 class="fw-normal mb-1"> {{$ca->count()}} </h2>
                        <p class="text-muted mb-3"></p>
                    </div>
                    <div class="widget-detail-1 text-end">
                        <p class="text-muted mb-1">Unfinished Orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                   
                    <div class="dropdown-menu dropdown-menu-end">
                        <i class="mdi mdi-cart-arrow-left"></i>
                    </div>
                </div>

                <h4 class="header-title mt-0 mb-4">Total Completed Orders</h4>

                <div class="widget-chart-1">
                   
                    <div class="widget-detail-1 text-end">
                        <h2 class="fw-normal pt-2 mb-1"> {{$cart->count()}} </h2>
                        <p class="text-muted mb-1">finished order</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="index.html#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-cart-arrow-right"></i>
                    </a>
                   
                </div>

                <h4 class="header-title mt-0 mb-3">Total Products</h4>

                <div class="widget-box-2">
                    <div class="widget-detail-2 text-end">
                        <h2 class="fw-normal mb-1"> {{$data->count()}}</h2>
                        <p class="text-muted mb-3">Number of Products</p>
                    </div>
                   
                </div>
            </div>
        </div>
        
    </div><!-- end col -->

</div>
<!-- end row -->



<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="index.html#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Update Product</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">View Product</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Delete Product</a>
                    </div>
                </div>

                <h4 class="header-title mt-0 mb-3">List Of Products</h4>

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Company Name</th>
                            <th>Brand Name</th>
                            <th>CPU</th>
                            <th>RAM</th>
                            <th>Color</th>
                            <th>Screen Size</th>
                            <th>Storage</th>
                            <th>Price</th>
                            <th>Action</th>

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
                                  <td>{{$products->CPU}}</td>
                                  <td>{{$products->RAM}}</td>
                                  <td>{{$products->Color}}</td>
                                  <td>{{$products->Screensize}}</td>
                                  <td>{{$products->storage}}</td>
                                  <td>{{$products->price}}</td>
                                  <td>
                                  <a href="/Admin/Products/view/{{ $products->id }}" class="btn btn-secondary">View</a>
                                  </td>
                                </tr>
                            @endforeach
                            }
                            @endif

                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
        
    </div><!-- end col -->

</div>

@endsection