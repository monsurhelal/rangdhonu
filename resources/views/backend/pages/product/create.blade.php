@extends('backend.layout.master')
@section('admin_title','product page')
@push('admin_style')
<!-- asColorpicker -->
<link href="{{ asset('assets/backend/') }}/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
<!-- Material color picker -->
<link href="{{ asset('assets/backend/') }}/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
@endpush
<style>

.color_hex {
    width: 50px;
    margin-top: 29px;
    margin-left: -86px;
}

.color_btn {
    margin-top: 0px;
    margin-left: -19px;
}

</style>
@section('admin_content')
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <section class="content-header">					
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Product</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="products.html" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">								
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" name="product_title" id="title" class="form-control @error('product_title') is-invalid @enderror" placeholder="Title">	
                                    </div>
                                    @error('product_title')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <label for="floatingTextarea2">description</label>
                                            <textarea class="form-control @error('product_description') is-invalid @enderror" name="product_description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    @error('product_description')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>                                            
                            </div>
                        </div>	                                                                      
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Media</h2>	
                            <div class="mb-3">
                                <input class="form-control @error('product_image') is-invalid @enderror" name="product_image" type="file" id="formFile">
                            </div>
                            @error('product_image')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        </div>	                                                                      
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Pricing</h2>								
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="price">Price</label>
                                        <input type="text" name="product_price" id="price" class="form-control @error('product_price') is-invalid @enderror" placeholder="Price">	
                                    </div>
                                    @error('product_price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="compare_price">Compare at Price</label>
                                        <input type="text" name="product_compare_price" id="compare_price" class="form-control @error('product_compare_price') is-invalid @enderror" placeholder="Compare Price">	
                                    </div>
                                    @error('product_compare_price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>                                            
                            </div>
                        </div>	                                                                      
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Inventory</h2>								
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sku">SKU (Stock Keeping Unit)</label>
                                        <input type="text" name="product_sku" id="sku" class="form-control @error('product_sku') is-invalid @enderror" placeholder="sku">	
                                    </div>
                                    @error('product_sku')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="barcode">Barcode</label>
                                        <input type="text" name="product_barcode" id="barcode" class="form-control @error('product_barcode') is-invalid @enderror" placeholder="Barcode">	
                                    </div>
                                    @error('product_barcode')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>                                         
                            </div>
                        </div>	                                                                      
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">	
                            <h2 class="h4 mb-3">Product status</h2>
                            <div class="mb-3">
                                <select name="product_status" id="status" class="form-control @error('product_status') is-invalid @enderror">
                                    <option value="1">Active</option>
                                    <option value="0">Block</option>
                                </select>
                            </div>
                            @error('product_status')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-body">	
                            <h2 class="h4  mb-3">Product category</h2>
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">Selete Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                    
                                </select>
                            @error('category_id')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category">Sub category</label>
                                <select name="sub_category_id" id="sub_category" class="form-control @error('sub_category_id') is-invalid @enderror">
                                    <option value="">Select Sub Category</option>
                                </select>
                                @error('sub_category_id')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div> 
                    <div class="card mb-3">
                        <div class="card-body"  id="colour_container">	
                            <h2 class="h4 mb-3">product Colour</h2>
                            <div class="row">
                                <div class="col-md-8 color_name">
                                    <div class="form-group">
                                        <input type="text" class="form-control colour_name_field @error('clr_name[]') is-invalid @enderror" placeholder="colour name">
                                    </div>
                                </div>
                                <div class="col-md-2 color_btn">
                                    <div class="form-group">
                                        <input type="button" id="color_btn_add" class="btn btn-success" value="add">
                                    </div>
                                </div>
                        </div> 
                        @error('clr_name[]')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror  
                       </div>   
                    </div> 
                    <div class="card mb-3">
                        <div class="card-body"  id="size_container">	
                            <h2 class="h4 mb-3">product Size</h2>
                            <div class="row">
                                <div class="col-md-8 color_name">
                                    <div class="form-group">
                                        <input type="text" class="form-control size_field" placeholder="colour name">
                                    </div>
                                </div>
                                <div class="col-md-2 color_btn">
                                    <div class="form-group">
                                        <input type="button" id="size_btn_add" class="btn btn-success" value="add">
                                    </div>
                                </div>
                        </div>   
                       </div>   
                    </div> 
                    <div class="card mb-3">
                        <div class="card-body">	
                            <h2 class="h4 mb-3">Featured product</h2>
                            <div class="mb-3">
                                <select name="product_featured_status" id="status" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>                                                
                                </select>
                            </div>
                        </div>
                    </div>                                 
                </div>
            </div>
            
            <div class="pb-5 pt-3">
                <button class="btn btn-primary">Create</button>
                <a href="products.html" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </div>
        <!-- /.card -->
    </section>
</form>
    <script>   
     $(document).ready(function() {
        $('.summernote').summernote();
    });
    </script>
@endsection

@push('admin_script')
<!-- momment js is must -->
<script src="{{ asset('assets/backend/') }}/vendor/moment/moment.min.js"></script>
<script src="{{ asset('assets/backend/') }}/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- asColorPicker -->
<script src="{{ asset('assets/backend/') }}/vendor/jquery-asColor/jquery-asColor.min.js"></script>
<script src="{{ asset('assets/backend/') }}/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
<script src="{{ asset('assets/backend/') }}/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
<!-- Material color picker -->
<script src="{{ asset('assets/backend/') }}/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- asColorPicker init -->
<script src="{{ asset('assets/backend/') }}/js/plugins-init/jquery-asColorPicker.init.js"></script>
<!-- Material color picker init -->
<script src="{{ asset('assets/backend/') }}/js/plugins-init/material-date-picker-init.js"></script>
<script>

$(document).ready(function(){

    

    $('#color_btn_add').click(function(){
        
        var colour_name = $('.colour_name_field').val();
        $('#colour_container').append(`
            <div class="row">
                <div class="col-md-8 color_name">
                    <div class="form-group">
                        <input type="text" name="clr_name[]" class="form-control" value="${colour_name}">
                    </div>
                </div>
                <div class="col-md-2 color_btn_remove">
                    <div class="form-group">
                        <input type="button" name="color_btn_remove" class="btn btn-success" value="&#10008;">
                    </div>
                </div>
            </div> 
        
        `);
        $('.colour_name_field').val('');
    });
    $('#size_btn_add').click(function(){
        
        var size = $('.size_field').val();
        $('#size_container').append(`
            <div class="row">
                <div class="col-md-8 color_name">
                    <div class="form-group">
                        <input type="text" name="product_size[]" class="form-control" value="${size}">
                    </div>
                </div>
                <div class="col-md-2 color_btn_remove">
                    <div class="form-group">
                        <input type="button" name="size_btn_remove" class="btn btn-success" value="&#10008;">
                    </div>
                </div>
            </div> 
        
        `);
        $('.size_field').val('');
    });

    $('#category').change(function(){
       var category_id = $(this).val();

       if(category_id){
        $.ajax({
            url:'{{ url("admin/category/sub-categoy") }}/'+category_id,
            type:'GET',
            datatype:'json',
            success:function(response){
                var sub_category = $('#sub_category').empty();
                $.each(response,function(key,value){
                    $('#sub_category').append(`
                        <option value="${value.id}">${value.sub_category_name}</option>
                    `);
                });
                
            }
        });
       };
       
        
    })

    



});
            

</script>
@endpush