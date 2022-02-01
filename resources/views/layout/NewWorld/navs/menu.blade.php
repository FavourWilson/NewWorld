<div class="d-none d-xl-block container">
    <div class="row">
        <!-- Vertical Menu -->
        <div class="col-md-auto d-none d-xl-block">
            <div class="max-width-270 min-width-270">
                <!-- Basics Accordion -->
                <div id="basicsAccordion">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-header card-collapse border-0" id="basicsHeadingOne">
                            <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                data-toggle="collapse"
                                data-target="#basicsCollapseOne"
                                aria-expanded="true"
                                aria-controls="basicsCollapseOne">
                                <span class="ml-0 text-gray-90 mr-2">
                                    <span class="fa fa-list-ul"></span>
                                </span>
                                <span class="pl-1 text-gray-90">All Departments</span>
                            </button>
                        </div>
                        <div id="basicsCollapseOne" class="collapse show vertical-menu"
                            aria-labelledby="basicsHeadingOne"
                            data-parent="#basicsAccordion">
                            <div class="card-body p-0">
                                <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                        <ul class="navbar-nav u-header__navbar-nav">
                                           
                                            <!-- Nav Item MegaMenu -->
                                            @foreach($nav as $n)
                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut"
                                                data-position="left">
                                                <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">{{$n['category']->Companyname}}</a>

                                                <!-- Nav Item - Mega Menu -->
                                                <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                                                    
                                                    <div class="row u-header__mega-menu-wrapper">
                                                        <div class="col mb-3 mb-sm-0">
                                                            <span class="u-header__sub-menu-title">{{$n['category']->Companyname}}</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                @foreach($n['subcategory'] as $subcate)
                                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="subcategory/{{$n['category']->id}}/{{$subcate->id}}">{{$subcate->brandname}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>

                                                      
                                                    </div>
                                                </div>
                                                <!-- End Nav Item - Mega Menu -->
                                            </li>
                                            @endforeach
                                            <!-- End Nav Item MegaMenu-->
                                            <!-- Nav Item MegaMenu -->

                                            
                                           
                                            <!-- End Nav Item MegaMenu-->
                                            <!-- Nav Item MegaMenu -->
                                          
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Basics Accordion -->
            </div>
        </div>
        <!-- End Vertical Menu -->
        <!-- Secondary Menu -->
    </div>
</div>