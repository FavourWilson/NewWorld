<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
<title>Log In | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="IdeoAdvanced" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- App css -->
<link href="{{ asset('assets/css/config/default/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="{{ asset('assets/css/config/default/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

<link href="{{ asset('assets/css/config/default/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
<link href="{{ asset('assets/css/config/default/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled="disabled" />

<!-- icons -->
<link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
 </head>
 <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages my-5">
            <div class="container">
                 @yield('content')
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>