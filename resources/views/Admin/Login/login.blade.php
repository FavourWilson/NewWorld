@extends('layout.Admin.Login.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="text-center">   
            <a href="index.html">
                <img src="{{ asset('assets/images/logo-dark.png')}}" alt="" height="22" class="mx-auto">
            </a>
            <p class="text-muted mt-2 mb-4">Admin Login</p>

        </div>
        <div class="card">
            <div class="card-body p-4">
                
                <div class="text-center mb-4">
                    <h4 class="text-uppercase mt-0">Sign In</h4>
                </div>

                <form action="{{route('authenciate')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>


                    <div class="mb-3 d-grid text-center">
                        <button class="btn btn-primary" type="submit"> Log In </button>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

      
        <!-- end row -->

    </div> <!-- end col -->
</div>
@endsection