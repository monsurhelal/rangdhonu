@extends('backend.layout.master')
@section('admin_title','category create page')

@section('admin_content')

<div class="row">
    <div class="col-md-2">
        <a href="{{ route('category.index') }}" class="btn btn-primary" href="">back</a>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('category.update',$category->category_slug) }}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input 
                                name="is_active" 
                                type="checkbox"
                                @if ($category->is_active == 1)
                                    {{ 'checked' }}
                                @else 
                                   {{' '}}
                                @endif 
                                > Active
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        
    </div>

</div>
    
@endsection