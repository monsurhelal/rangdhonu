@extends('backend.layout.master')
@section('admin_title','category list page')

@section('admin_content')

<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="md-3 d-flex justify-content-between">
            <h3 class="mb-3">Category list</h3>
            <a class="md-3 btn btn-primary" href="{{ route('category.create') }}">Add new</a>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->category_slug }}</td>
                                    <td>
                                        @if ( $category->is_active == 1)
                                            active
                                        @else
                                            de active
                                        @endif
                                    </td>
                                    <td class="color-primary">
                                        <div class="d-flax ">
                                             <a class="btn btn-secondary" href="{{ route('category.edit',$category->category_slug) }}">Edit</a>
                                            <form class="d-inline" action="{{ route('category.destroy',$category->category_slug) }}" method="POST">
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