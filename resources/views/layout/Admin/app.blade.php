<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- App css -->
<link href="{{ asset('assets/css/config/default/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="{{ asset('assets/css/config/default/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="{{ asset('assets/css/config/default/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
<link href="{{ asset('assets/css/config/default/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled="disabled" />

<!-- icons -->
<link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
@stack('css')
@cloudinaryJS
</head>

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
<div id="wrapper">


            <!-- Topbar Start -->
        <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                    <button class="btn input-group-text" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                                <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found 22 results</h5>
                                    </div>
                    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-home me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>
                    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-aperture me-1"></i>
                                        <span>How can I help you?</span>
                                    </a>
                                    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>User profile settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle" src="../assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                    
                                </div> 
                            </div>
                        </form>
                    </li>
            
                    <li class="dropdown d-inline-block d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>
                    
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge"></span>
                        </a>
                    
                    </li>
            
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                {{Auth::id()}} <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
            
                            <!-- item-->
                           
            
                            <!-- item-->
                            <a href="auth-logout.html" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>
            
                        </div>
                    </li>
            
                   
            
                </ul>
            
                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-light.png')}}" alt="" height="16">
                        </span>
                    </a>
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-dark.png')}}" alt="" height="16">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
            
                    <li>
                        <h4 class="page-title-main">Dashboard</h4>
                    </li>
                    
                </ul>

                <div class="clearfix"></div> 
                    
        </div>
        <!-- end Topbar -->

                    <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">

                    <img src="{{ asset('assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                        <div class="dropdown">
                            <a href="index.html#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">Nowak Helme</a>
                            <div class="dropdown-menu user-pro-dropdown">

                              
                
                                <!-- item-->
                                <a href="" class="dropdown-item notify-item">
                                    <i class="fe-log-out me-1"></i>
                                    <span>Logout</span>
                                </a>
                
                            </div>
                        </div>

                    <p class="text-muted left-user-info">Admin Head</p>

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="index.html#" class="text-muted left-user-info">
                                <i class="mdi mdi-cog"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="index.html#">
                                <i class="mdi mdi-power"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Navigation</li>
                        
                        <li>
                            <a href="{{url('Admin/index')}}">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">List</li>
                        
                        <li>
                            <a href="{{url('Admin/Products/index')}}">
                                <i class="mdi mdi-calendar"></i>
                                <span>Product</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('Admin/User/view')}}">
                                <i class="mdi mdi-forum"></i>
                                <span>Users</span>
                            </a>
                        </li>

                        <li>
                            <a href="index.html#email">
                                <i class="mdi mdi-email"></i>
                                <span> Orders</span>
                            </a>
                           
                        </li>

                        <li>
                            <a href="{{url('Admin/Category/index')}}">
                                <i class="mdi mdi-email"></i>
                                <span> Category</span>
                            </a>
                           
                        </li>

                        <li>
                            <a href="{{url('Admin/SubCategory/index')}}">
                                <i class="mdi mdi-email"></i>
                                <span>SubCategory</span>
                            </a>
                           
                        </li>

                        <li>
                            <a href="{{url('Admin/Carousel/index')}}">
                                <i class="mdi mdi-email"></i>
                                <span>Slides</span>
                            </a>
                           
                        </li>

                     

                     

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            @yield('content')
        <!-- container-fluid -->

        </div> <!-- content -->

                <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; <a href="">New World </a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- end Footer -->

     </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
        <!-- END wrapper -->

      

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/libs/morris.js06/morris.min.js')}}"></script>
        <script src="{{ asset('assets/libs/raphael/raphael.min.js')}}"></script>
  
        <!-- Dashboar init js-->
        <script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js-->
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        @stack('js')
    </body>
</html>