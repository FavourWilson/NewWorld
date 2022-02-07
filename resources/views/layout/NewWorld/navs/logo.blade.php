<div class="py-2 py-xl-5 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <!-- Logo -->
                            <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="index.html" aria-label="New World Computer">
                               <img src="{{asset('asset/img/logo.png')}}"/>
                            </a>
                            <!-- End Logo -->

                            <!-- Fullscreen Toggle Button -->
                            <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                    <span class="u-hamburger__inner"></span>
                                </span>
                            </button>
                            <!-- End Fullscreen Toggle Button -->
                        </nav>
                        <!-- End Nav -->

                        <!-- ========== HEADER SIDEBAR ========== -->
                        <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvoker">
                            <div class="u-sidebar__scroller">
                                <div class="u-sidebar__container">
                                    <div class="u-header-sidebar__footer-offset">
                                        <!-- Toggle Button -->
                                        <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">
                                            <button type="button" class="close ml-auto" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                                <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                            </button>
                                        </div>
                                        <!-- End Toggle Button -->

                                        <!-- Content -->
                                        <div class="js-scrollbar u-sidebar__body">
                                            <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                <!-- Logo -->
                                                <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="" aria-label="New World Computer">
                                                   
                                                </a>
                                                <!-- End Logo -->

                                                <!-- List -->
                                                <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                    <!-- Value of the Day -->
                                                   
                                                    <!-- Computers & Accessories -->
                                                    @foreach($nav as $n)
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarComputersCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarComputersCollapse">
                                                            {{ $n['category']->Companyname }}
                                                        </a>

                                                        <div id="headerSidebarComputersCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul class="u-header-collapse__nav-list">
                                                                <li><span class="u-header-sidebar__sub-menu-title"></span></li>
                                                                @foreach($n['subcategory'] as $sub)
                                                                <li class=""><a class="u-header-collapse__submenu-nav-link" href="">{{ $sub->brandname }}</a></li>

                                                                
                                                                @endforeach
                                                                <!-- <li class=""><a class="u-header-collapse__submenu-nav-link" href="index.html#">Software</a></li>
                                                                        <li><span class="u-header-sidebar__sub-menu-title">Office & Stationery</span></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="index.html#">All Office & Stationery</a></li>
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="index.html#">All New World Computernics</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    

                                                    @endforeach
                                                    <!-- End Computers & Accessories -->



                                                    <!-- End List -->
                                            </div>
                                        </div>
                                        <!-- End Content -->
                                    </div>
                                    <!-- Footer -->
                                    <footer id="SVGwaveWithDots" class="svg-preloader u-header-sidebar__footer">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item pr-3">
                                                <a class="u-header-sidebar__footer-link text-gray-90" href="index.html#">Privacy</a>
                                            </li>
                                            <li class="list-inline-item pr-3">
                                                <a class="u-header-sidebar__footer-link text-gray-90" href="index.html#">Terms</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="u-header-sidebar__footer-link text-gray-90" href="index.html#">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- SVG Background Shape -->
                                        <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
                                            <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description" data-parent="#SVGwaveWithDots">
                                        </div>
                                        <!-- End SVG Background Shape -->
                                    </footer>
                                    <!-- End Footer -->
                                </div>
                            </div>
                        </aside>
                        <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Search Bar -->
                    <div class="col d-none d-xl-block">
                        <form class="js-focus-state">
                            <label class="sr-only" for="searchproduct">Search</label>
                            <div class="input-group">
                                <input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                <div class="input-group-append">
                                    <!-- Select -->
                                 
                                    <!-- End Select -->
                                    <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                        <span class="ec ec-search font-size-24"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Search Bar -->
                    <!-- Header Icons -->
                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button" data-toggle="tooltip" data-placement="top" title="Search" aria-controls="searchClassic" aria-haspopup="true" aria-expanded="false" data-unfold-target="#searchClassic" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                
                                <li class="col pr-xl-0 px-2 px-sm-3">
                                    <a href="" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                      
                                        @if (Auth::check())
                                        <span class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">{{$cart->count()}}</span>
                                        @endif

                                        @if ($cart[0]->ipAddress)
                                        <span class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">{{$cart->count()}}</span>
                                        @endif
                                        <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3"></span>
                                    </a>
                                  
                                </li>
   
                                
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
