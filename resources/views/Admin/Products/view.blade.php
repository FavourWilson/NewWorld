@extends('layout.Admin.app')
@section('content')
<div class="container-fluid"> 

<form class="form-horizontal" method="POST" action="{{url('Admin/Products/update', $product->id)}}">
<div class="row">
        `<div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <!-- 4:3 aspect ratio -->
                    <div class="ratio ratio-4x3">
                    <video width="320" height="240" controls autoplay>
                        <source src="{{$product->video}}" type="video/mp4">
                    </video>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h4 class="header-title">{{$product->productName}}</h4>
                    </div>
                    
                    <div class="mb-3">
                        <p class="header-title">{{$product->brandname}}</p>
                    </div>
                    
                    <div class="mb-3">
                        <p class="header-title">{{$product->price}}</p>
                    </div>
                    
                    <div class="mb-3">            
                       @foreach ($images as $i)
                       <img src="{{$i}}" style="height:80px; width:80px"/>
                       @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>`
</div>
</form>
@endsection

