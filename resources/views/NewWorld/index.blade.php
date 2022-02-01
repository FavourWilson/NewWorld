@extends('layout.NewWorld.app')

@section('content')
<div class="container">
    <!-- Banner -->
    {{-- <div class="mb-5">
        <div class="row">
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="../../assets/img/190X150/img1.png" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="../../assets/img/190X150/img2.jpg" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="../../assets/img/190X150/img3.jpg" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                <a href="../shop/shop.html" class="d-black text-gray-90">
                    <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                        <div class="col-6 col-xl-5 col-wd-6 pr-0">
                            <img class="img-fluid" src="../../assets/img/190X150/img4.png" alt="Image Description">
                        </div>
                        <div class="col-6 col-xl-7 col-wd-6">
                            <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                            </div>
                            <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                Shop now
                                <span class="link__icon ml-1">
                                    <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
    <!-- End Banner -->
    <!-- Deals-and-tabs -->
    <div class="mb-5">
        <div class="row">
            <!-- Deal -->
            
            <!-- End Deal -->
            <!-- Tab Prodcut -->
            <div class="col-md-12">
                <!-- Features Section -->
                <div class="">
                    <!-- Nav Classic -->
                    <div class="position-relative bg-white text-center z-index-2">
                        <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill" href="index.html#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                        All Laptops
                                    </div>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- End Nav Classic -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                            <ul class="row list-unstyled products-group no-gutters">
                                @foreach ($product as $item)
                                <li class="col-6 col-wd-3 col-md-4 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="" class="font-size-12 text-gray-5">  {{$item->productname}}</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="" class="text-blue font-weight-bold">{{$item->brandname}}</a></h5>
                                                <div class="mb-2">
                                                    
                                                    <a href="{{url('NewWorld/details/'.$item->id)}}" class="d-block text-center"><img class="img-fluid" src="{{ json_decode($item->photo)[0] }}" alt="Image Description"></a>
                                                    
                                                   
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100"><sup>NGN</sup>{{$item->price}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="{{url('NewWorld/details/'.$item->id)}}" class="text-gray-6 font-size-13"><i class="ec ec-add-to-cart mr-1 font-size-15"></i> View {{$item->brandname}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                               
  
                            </ul>
                        </div>
                       
                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Features Section -->
            </div>
            <!-- End Tab Prodcut -->
        </div>
    </div>
    <!-- End Deals-and-tabs -->
</div>
<!-- Products-4-1-4 -->
{{-- <div class="products-group-4-1-4 space-1 bg-gray-7">
    <h2 class="sr-only">Products Grid</h2>
    <div class="container">
        <!-- Nav Classic -->
        <div class="position-relative text-center z-index-2 mb-3">
            <ul class="nav nav-classic nav-tab nav-tab-sm px-md-3 justify-content-start justify-content-lg-center flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble border-md-down-bottom-0 pb-1 pb-lg-0 mb-n1 mb-lg-0" id="pills-tab-1" role="tablist">
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link active " id="Tpills-one-example1-tab" data-toggle="pill" href="index.html#Tpills-one-example1" role="tab" aria-controls="Tpills-one-example1" aria-selected="true">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Best Deals
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-two-example1-tab" data-toggle="pill" href="index.html#Tpills-two-example1" role="tab" aria-controls="Tpills-two-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            TV & Video
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-three-example1-tab" data-toggle="pill" href="index.html#Tpills-three-example1" role="tab" aria-controls="Tpills-three-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Cameras
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-four-example1-tab" data-toggle="pill" href="index.html#Tpills-four-example1" role="tab" aria-controls="Tpills-four-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Audio
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-five-example1-tab" data-toggle="pill" href="index.html#Tpills-five-example1" role="tab" aria-controls="Tpills-five-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Smartphones
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-six-example1-tab" data-toggle="pill" href="index.html#Tpills-six-example1" role="tab" aria-controls="Tpills-six-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            GPS & Navi
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-seven-example1-tab" data-toggle="pill" href="index.html#Tpills-seven-example1" role="tab" aria-controls="Tpills-seven-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Computers
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-eight-example1-tab" data-toggle="pill" href="index.html#Tpills-eight-example1" role="tab" aria-controls="Tpills-eight-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Portable Audio
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Tpills-nine-example1-tab" data-toggle="pill" href="index.html#Tpills-nine-example1" role="tab" aria-controls="Tpills-nine-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Accessories
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Nav Classic -->

        <!-- Tab Content -->
        <div class="tab-content" id="Tpills-tabContent">
            <div class="tab-pane fade pt-2 show active" id="Tpills-one-example1" role="tabpanel" aria-labelledby="Tpills-one-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-two-example1" role="tabpanel" aria-labelledby="Tpills-two-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-three-example1" role="tabpanel" aria-labelledby="Tpills-three-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-four-example1" role="tabpanel" aria-labelledby="Tpills-four-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-five-example1" role="tabpanel" aria-labelledby="Tpills-five-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-six-example1" role="tabpanel" aria-labelledby="Tpills-six-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-seven-example1" role="tabpanel" aria-labelledby="Tpills-seven-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-eight-example1" role="tabpanel" aria-labelledby="Tpills-eight-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Tpills-nine-example1" role="tabpanel" aria-labelledby="Tpills-nine-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Game Consoles</a></div>
                                                <h5 class="mb-0 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                            </div>
                                            <div class="mb-1 min-height-4-1-4">
                                                <a href="index.html#" class="d-block text-center my-4 mt-lg-6 mb-lg-5 mt-xl-0 mb-xl-0 mt-wd-6 mb-wd-5"><img class="img-fluid" src="../../assets/img/564X520/img2.jpg" alt="Image Description"></a>
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2 mb-3">
                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img1.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #01" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img1.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img2.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #02" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img2.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Gallery -->
                                                        <a class="js-fancybox max-width-60 u-media-viewer" href="javascript:;" data-src="../../assets/img/1920X1080/img3.jpg" data-fancybox="fancyboxGallery6" data-caption="Electro in frames - image #03" data-speed="700" data-is-infinite="true">
                                                            <img class="img-fluid border" src="../../assets/img/100X100/img3.jpg" alt="Image Description">

                                                            <span class="u-media-viewer__container">
                                                                <span class="u-media-viewer__icon">
                                                                    <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <!-- End Gallery -->
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-add-cart__wide btn-primary transition-3d-hover"><i class="ec ec-add-to-cart mr-2"></i> Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Tablet White EliteBook Revolve 810 G2</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img2.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 product-item max-width-xl-100 d-md-none d-wd-block product-item remove-divider">
                                <div class="product-item__outer h-100 w-100 prodcut-box-shadow">
                                    <div class="product-item__inner bg-white p-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">GameConsole Destiny Special Edition</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img7.jpg" alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tab Content -->
    </div>

    <!-- Features Section -->
    <div class="container space-2 d-none">
        <!-- Nav Classic -->
        <div class="position-relative text-center z-index-2 mb-3">
            <ul class="nav nav-classic nav-tab nav-tab-sm px-md-3 justify-content-start justify-content-lg-center flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble border-md-down-bottom-0 pb-1 pb-lg-0 mb-n1 mb-lg-0" id="pills-tab-2" role="tablist">
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link active " id="Gpills-one-example1-tab" data-toggle="pill" href="index.html#Gpills-one-example1" role="tab" aria-controls="Gpills-one-example1" aria-selected="true">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Best Deals
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-two-example1-tab" data-toggle="pill" href="index.html#Gpills-two-example1" role="tab" aria-controls="Gpills-two-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            TV & Video
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-three-example1-tab" data-toggle="pill" href="index.html#Gpills-three-example1" role="tab" aria-controls="Gpills-three-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Cameras
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-four-example1-tab" data-toggle="pill" href="index.html#Gpills-four-example1" role="tab" aria-controls="Gpills-four-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Audio
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-five-example1-tab" data-toggle="pill" href="index.html#Gpills-five-example1" role="tab" aria-controls="Gpills-five-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Smartphones
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-six-example1-tab" data-toggle="pill" href="index.html#Gpills-six-example1" role="tab" aria-controls="Gpills-six-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            GPS & Navi
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-seven-example1-tab" data-toggle="pill" href="index.html#Gpills-seven-example1" role="tab" aria-controls="Gpills-seven-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Computers
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-eight-example1-tab" data-toggle="pill" href="index.html#Gpills-eight-example1" role="tab" aria-controls="Gpills-eight-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Portable Audio
                        </div>
                    </a>
                </li>
                <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                    <a class="nav-link " id="Gpills-nine-example1-tab" data-toggle="pill" href="index.html#Gpills-nine-example1" role="tab" aria-controls="Gpills-nine-example1" aria-selected="false">
                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                            Accessories
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Nav Classic -->

        <!-- Tab Content -->
        <div class="tab-content" id="Gpills-tabContent">
            <div class="tab-pane fade pt-2 show active" id="Gpills-one-example1" role="tabpanel" aria-labelledby="Gpills-one-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-two-example1" role="tabpanel" aria-labelledby="Gpills-two-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-three-example1" role="tabpanel" aria-labelledby="Gpills-three-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-four-example1" role="tabpanel" aria-labelledby="Gpills-four-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-five-example1" role="tabpanel" aria-labelledby="Gpills-five-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-six-example1" role="tabpanel" aria-labelledby="Gpills-six-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-seven-example1" role="tabpanel" aria-labelledby="Gpills-seven-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-eight-example1" role="tabpanel" aria-labelledby="Gpills-eight-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade pt-2" id="Gpills-nine-example1" role="tabpanel" aria-labelledby="Gpills-nine-example1-tab">
                <div class="row no-gutters">
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-wd-4 products-group-1">
                        <ul class="row list-unstyled products-group no-gutters bg-white h-100 mb-0">
                            <li class="col product-item remove-divider">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <div class="mb-1">
                                                <div class="mb-2">
                                                    <div class="bg-gray-1 bg-animation rounded height-10 w-40"></div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="bg-gray-1 bg-animation rounded height-12 mb-1 w-90"></div>
                                                    <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-450"></div>
                                            </div>
                                            <div class="mb-4">
                                                <!-- Gallery -->
                                                <div class="row mx-gutters-2">
                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="bg-gray-1 width-60 height-60"></div>
                                                    </div>
                                                    <div class="col"></div>
                                                </div>
                                                <!-- End Gallery -->
                                            </div>
                                            <div class="flex-center-between">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-40"></div>
                                                <div class="bg-gray-1 height-35 width-134 rounded-pill"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-wd-4 d-md-flex d-wd-block">
                        <ul class="row list-unstyled products-group no-gutters mb-0 w-100">
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-12 col-wd-6 d-md-none d-wd-block">
                                <div class="h-100 w-100 prodcut-box-shadow">
                                    <div class="bg-white p-3">
                                        <div class="pb-xl-2">
                                            <div class="mb-2">
                                                <div class="bg-gray-1 bg-animation rounded height-10 w-60"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="bg-gray-1 bg-animation rounded height-12 mb-1"></div>
                                                <div class="bg-gray-1 bg-animation rounded height-12 w-80"></div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="bg-gray-1 height-190"></div>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="bg-gray-1 bg-animation rounded height-20 w-60"></div>
                                                <div class="bg-gray-1 height-35 width-35 rounded-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tab Content -->
    </div>
    <!-- End Features Section -->
</div> --}}
<!-- End Products-4-1-4 -->

@endsection