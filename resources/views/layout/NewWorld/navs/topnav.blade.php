<div class="u-header-topbar py-2 d-none d-xl-block">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="topbar-left">
                        <a href="{{url('NewWorld/index')}}" class="text-gray-110 font-size-13 hover-on-dark">Welcome to NewWorld Computers</a>
                    </div>
                    <div class="topbar-right ml-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="{{url("NewWorld/contact")}}" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                            </li>
                           
                           
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <!-- Account Sidebar Toggle Button -->
                                @if (Auth::check())
                                <a id="#" class="u-header-topbar__nav-link" >
                                  
                                    
                                    {{Auth::User()->name}}
                                 

                                   
                                </a>
                                @else
                                <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                    <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in

                                   
                                </a>
                                @endif
                                <!-- End Account Sidebar Toggle Button -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>