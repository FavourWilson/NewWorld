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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url("NewWorld/index")}}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Contact </li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="mb-8">
        <iframe width="100%" height="512" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1253&amp;height=512&amp;hl=en&amp;q=After%20Eke-Awka,%20Anambra%20State%20Awka+(New%20World%20)&amp;t=p&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.add-map.net/'>adding a google map to website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=14c777bc914358154d188a7776ca38c6c6341a0e'></script>

    <div class="container">
        <div class="row mb-10">
            <div class="col-md-8 col-xl-9">
                <div class="mr-xl-6">
                    <div class="border-bottom border-color-1 mb-5">
                        <h3 class="section-title mb-0 pb-2 font-size-25">Leave us a Message</h3>
                    </div>
                    <p class="max-width-830-xl text-gray-90">We would love to get feedbacks from you</p>
                    <form class="js-validate" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        First name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="firstName" placeholder="" aria-label="" required="" data-msg="Please enter your frist name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Last name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="lastName" placeholder="" aria-label="" required="" data-msg="Please enter your last name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-12">
                                <!-- Input -->
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Subject
                                    </label>
                                    <input type="text" class="form-control" name="Subject" placeholder="" aria-label="" data-msg="Please enter subject." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>
                            <div class="col-md-12">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Your Message
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary-dark-w px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="border-bottom border-color-1 mb-5">
                    <h3 class="section-title mb-0 pb-2 font-size-25">Our Store</h3>
                </div>
                <div class="mr-xl-6">
                    <address class="mb-6">
                        121,  <br>
                        Dike Park, <br> 
                        After Eke-Awka, Anambra State
                    </address>
                    <h5 class="font-size-14 font-weight-bold mb-3">Hours of Operation</h5>
                    <ul class="list-unstyled mb-6">
                        <li class="flex-center-between mb-1"><span class="">Monday:</span><span class="">8 AM-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Tuesday:</span><span class="">8 AM-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Wednesday:</span><span class="">8 AM-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Thursday:</span><span class="">8 AM-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Friday:</span><span class="">8 AM-6 PM</span></li>
                        <li class="flex-center-between mb-1"><span class="">Saturday:</span><span class="">8 AM-6 PM</span></li>
                        <li class="flex-center-between"><span class="">Sunday</span><span class="">Closed</span></li>
                    </ul>
                   
                </div>
            </div>
        </div>
        
    </div>
</main>
@endsection

@push('js')
<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=6ac7fcfd7ef7985750600aaaa8b497973cca195f'></script>
 
@endpush