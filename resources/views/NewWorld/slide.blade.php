@extends('layout.NewWorld.others.app')
@push('css')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endpush

@section('content')
<main id="content" role="main">
    <!-- breadcrumb -->
 
    <!-- End breadcrumb -->
    <div class="container">
        <!-- Single Product Body -->
        <form action="{{url('NewWorld/addSpecial/'.$ca->id)}}" method="POST" class="mb-xl-14 mb-6">
            @csrf
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                        data-infinite="true"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                        data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                        data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                        data-nav-for="#sliderSyncingThumb">
                        <div class="js-slide">
                            <img class="img-fluid" src="{{$images}}" alt="Image Description">

                        </div>
                       
                    </div>
                    <input type="text" name="id" id="id" value="{{$ca->id}}" class="form-control" hidden>
                    
                    
                </div>
                
                <div class="col-md-7 mb-md-6 mb-lg-0">
                   
                    <div class="mb-2">
                      
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <h2 class="font-size-25 text-lh-1dot2">{{$ca->adsname}}</h2>
                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$ca->productname}}</a>
                           
                            
                        </div>
                       
                        <div class="mb-4">
                            <div class="d-flex align-items-baseline">
                                <ins class="font-size-36 text-decoration-none" name="price">{{$ca->price}}</ins>
                                {{-- <del class="font-size-20 ml-2 text-gray-6">$2,299.00</del> --}}
                            </div>
                        </div>
                       
                        <div class="d-md-flex align-items-end mb-3">
                            <div class="max-width-150 mb-4 mb-md-0">
                                <h6 class="font-size-14">Quantity</h6>
                                <!-- Quantity -->
                                <div class="border rounded-pill py-2 px-3 border-color-1">
                                    <div class="js-quantity row align-items-center">
                                        <div class="col">
                                            <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" id="quan" name="quan" value="1">
                                        </div>
                                        <div class="col-auto pr-1">
                                            <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" onclick="decrease()"  href="javascript:;">
                                                <small class="fas fa-minus btn-icon__inner"></small>
                                            </a>
                                            <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" onclick="increase()" href="javascript:;">
                                                <small class="fas fa-plus btn-icon__inner"></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Quantity -->
                            </div>
                     
                                <!-- End Quantity -->
                            </div>
                            <div class="ml-md-3">
                                <button type="submit" class="btn px-5 btn-primary-dark transition-3d-hover"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</button>
                            </div>
                        </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </form>
        <!-- End Single Product Body -->
        <!-- Single Product Tab -->
     
    </div>
</main>
@endsection

@push('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
function increase(){
    var a = 1;
    var textBox = document.getElementById("quan");
    textBox.value++;
    
}    
function decrease(){
    var textBox = document.getElementById("quan");
    textBox.value--;
}


 
</script>
@endpush