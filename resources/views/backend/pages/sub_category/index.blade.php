@extends('backend.layout.master')
@section('admin_title','category list page')

@section('admin_content')

<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="md-3 d-flex justify-content-between">
            <h3 class="mb-3">Sub Category list</h3>
            <a class="md-3 btn btn-primary" href="{{ route('sub-category.create') }}">Add new</a>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Sub Category Slug</th>
                                <th>active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subCategories as $subCategory)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $subCategory->category->category_name }}</td>
                                    <td>{{ $subCategory->sub_category_name }}</td>
                                    <td>{{ $subCategory->sub_category_slug }}</td>
                                    <td>
                                        @if ( $subCategory->is_active == 1)
                                            active
                                        @else
                                            de active
                                        @endif
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