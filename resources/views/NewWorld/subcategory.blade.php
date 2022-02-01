@extends('layout.NewWorld.others.app')
@section('content')
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->
        @foreach ($details as $item)

        <div class="container">
            <div class="mb-8">
                <!-- Recommended Products -->
               
                <!-- End Recommended Products -->
                <!-- Shop-control-bar Title -->
                <div class="flex-center-between mb-3">
                    <h3 class="font-size-25 mb-0">{{$item->Companyname}}</h3>
                </div>
                <!-- End shop-control-bar Title -->
                <!-- Shop-control-bar -->
              
                <!-- End Shop-control-bar -->
                <!-- Shop Body -->
                <!-- Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">
                           
                            <li class="col-6 col-md-3 col-xl-2 product-item remove-divider-md-lg">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-xl-4 p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="" class="font-size-12 text-gray-5">{{$item->Companyname}}</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="" class="text-blue font-weight-bold">{{$item->brandname}}</a></h5>
                                            <div class="mb-2">
                                                <a href="" class="d-block text-center"><img class="img-fluid" src="{{ json_decode($item->photo)[0] }}" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price d-flex align-items-center position-relative">
                                                    <ins class="font-size-20 text-decoration-none"><sup>NGN</sup> {{$item->price}}</ins>
                                                    {{-- <del class="font-size-12 tex-gray-6 position-absolute bottom-100">$2 299,00</del> --}}
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{url('NewWorld/cart/'.$item->id)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                           
                           
                        </ul>
                    </div>
                   
                </div>
                <!-- End Tab Content -->
                <!-- End Shop Body -->
                <!-- Shop Pagination -->
             
                <!-- End Shop Pagination -->
            </div>
            <!-- Brand Carousel -->
        
            <!-- End Brand Carousel -->
        </div>

        @endforeach


    </main>


@endsection 
