@extends('backend.layout.master')
@section('admin_title','category list page')

@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <div class="md-3 d-flex justify-content-between">
            <h3 class="mb-3">Category list</h3>
            <a class="md-3 btn btn-primary" href="{{ route('product.create') }}">Add new</a>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>product title</th>
                                <th>product image</th>
                                <th>product description</th>
                                <th>product price</th>
                                <th>product compare price</th>
                                <th>product sku</th>
                                <th>product barcode</th>
                                <th>product status</th>
                                <th>category </th>
                                <th>sub category</th>
                                <th>featured</th>
                                <th>colour</th>
                                <th>size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th>{{ $product->product_title }}</th>
                                    <td>
                                        <img width="70px" src="{{ asset('assets/backend/uploads/products') }}/{{ $product->product_image }}">
                                    </td>
                                    <td>{{ $product->product_description }}</td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->product_compare_price }}</td>
                                    <td>{{ $product->product_sku }}</td>
                                    <td>{{ $product->product_barcode }}</td>
                                    <td>{{ $product->product_status }}</td>
                                    <td>{{ $product->getCategory->category_name }}</td>
                                    <td>{{ $product->getSubCategory->sub_category_name }}</td>
                                    <td>{{ $product->product_featured_status }}</td>
                                    <td>
                                        @foreach ($product->getColour as $colour)
                                             <span>{{ $colour->color_name }}</span>
                                        @endforeach 
                                    </td>
                                    <td>
                                        @foreach ($product->getSize as $size)
                                            <span>{{ $size->product_size }}</span>
                                        @endforeach 
                                    </td>
                                    <td class="color-primary">
                                        <div class="d-flax ">
                                             <a class="btn btn-secondary" href="">Edit</a>
                                            <form class="d-inline" action="" method="POST">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                       
                                       
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- /# card -->
    </div>
</div>
    
@endsection