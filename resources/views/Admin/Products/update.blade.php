@extends('layout.Admin.app')
@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

@endpush
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Create Products</h4>
                <p class="sub-header">
                </p>

                <div class="row">
                    <div class="col-lg-12">
                        <form  action="{{url('Admin/Products/update/', $products[0]->id) }}" method="post">

                        <div class="mb-3">
                            <label for="pname" class="form-label">Product Name</label>
                            <input type="text" id="pname" name="pname" class="form-control" placeholder="Product Name" value="{{$products[0]->productName}}">
                        </div>

                        <div class="mb-3">
                            <label for="cate" class="form-label">Category</label>
                            <select class="form-control" name="cate" id="cate" onclick="selectSubCategory()" value="{{$products[0]->categoriesid}}">
                                <option>--Please select Category--</option>

                                @foreach($details as $category)
                                    <option  value="{{ $category->id }}">{{ $category->companyname }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3" id="sub_cat_place">
                        </div>

                        <div class="mb-3">
                            <label for="bname" class="form-label">CPU</label>
                            <input type="text" id="cpu" name="cpu" class="form-control" placeholder="Central Processing Unit" value="{{$products[0]->CPU}}">
                        </div>

                        <div class="mb-3">
                            <label for="bname" class="form-label">RAM</label>
                            <input type="text" id="ram" name="ram" class="form-control" placeholder="Random Access Memory" value="{{$products[0]->RAM}}">
                        </div>

                        <div class="mb-3">
                            <label for="bname" class="form-label">Color</label>
                            <input type="text" id="color" name="color" class="form-control" placeholder="Color" value="{{$products[0]->Color}}">
                        </div>

                        <div class="mb-3">
                            <label for="bname" class="form-label">Screen Size</label>
                            <input type="text" id="screensize" name="screensize" class="form-control" placeholder="Screen Size" value="{{$products[0]->Screensize}}">
                        </div>

                        <div class="mb-3">
                            <label for="bname" class="form-label">storage</label>
                            <input type="text" id="storage" name="storage" class="form-control" placeholder="System Storage" value="{{$products[0]->storage}}">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" id="price" name="price" class="form-control" placeholder="Price" value="{{$products[0]->price}}">
                        </div>

                        <div class="mb-3 increment">
                            @foreach ($products as $img )
                            <input type="file" id="photo[]" name="photo" class="form-control" value="{{$img}}">
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                            @endforeach
                            
                        </div>

                        <div class="mb-3">
                            <label for="video" class="form-label">Upload Video Link</label>
                            <input type="file" id="video" name="video" class="form-control" value="{{$products[0]->video}}">
                        </div>

                        </form>
                    </div> <!-- end col -->

            
                </div>
                <!-- end row-->

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
</div>
@endsection

@push('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



<script type="text/javascript">
    $(document).ready(function() {

        $(".btn-success").click(function() {
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
        });

    });
</script>


<script>
    function selectSubCategory(){
        $(document).ready(function(){
            var initial = '';
            $('#cate').on('change',function(){
                var selectedValue = $(this).val();
                //alert(selectedValue);
                    $.ajax({
                        url: '/Admin/Product/getSubCateByID/'+selectedValue,
                        success: function(output) {
                            document.getElementById("sub_cat_place").innerHTML = output;
                            //console.log(output);
                        }
                    });
            })
        });
    }
</script>



@endpush