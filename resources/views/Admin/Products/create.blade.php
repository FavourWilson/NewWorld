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
                            <form method="post" action="{{url('Admin/Products/store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="pname" class="form-label">Product Name</label>
                                    <input type="text" id="pname" name="pname" class="form-control" placeholder="Product Name">
                                </div>

                                <div class="mb-3">
                                    <label for="cate" class="form-label">Category</label>
                                    <select class="form-control" name="cate" id="cate" onclick="selectSubCategory()">
                                        <option>--Please select Category--</option>

                                        @foreach($data as $category)
                                            <option  value="{{ $category->id }}">{{ $category->companyname }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3" id="sub_cat_place">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">Quantity Available</label>
                                    <input type="text" id="quan" name="quan" class="form-control" placeholder="Quantity Available">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">Window Os</label>
                                    <input type="text" id="winos" name="winos" class="form-control" placeholder="Quantity Available">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">CPU</label>
                                    <input type="text" id="cpu" name="cpu" class="form-control" placeholder="Central Processing Unit">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">Processor</label>
                                    <input type="text" id="pro" name="pro" class="form-control" placeholder="Processor">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">RAM</label>
                                    <input type="text" id="ram" name="ram" class="form-control" placeholder="Random Access Memory">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">Color</label>
                                    <input type="text" id="color" name="color" class="form-control" placeholder="Color">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">Screen Size</label>
                                    <input type="text" id="screensize" name="screensize" class="form-control" placeholder="Screen Size">
                                </div>

                                <div class="mb-3">
                                    <label for="bname" class="form-label">storage</label>
                                    <input type="text" id="storage" name="storage" class="form-control" placeholder="Sytem Storage">
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" id="price" name="price" class="form-control" placeholder="Price">
                                </div>

                                <div class="mb-3 increment">
                                    <input type="file" id="photo[]" name="photo" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                    </div>
                                </div>

                                <div class="mb-3 clone hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                        <input type="file" name="photo[]" class="form-control">
                                        <div class="input-group-btn">
                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="video" class="form-label">Upload Video Link</label>
                                    <input type="file" id="video" name="video" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button class="btn input-group-text btn-dark waves-effect waves-light" type="submit">Save Products</button>
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