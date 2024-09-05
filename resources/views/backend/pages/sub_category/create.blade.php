@extends('backend.layout.master')
@section('admin_title','sub category create')

@section('admin_content')

<div class="row">
    <div class="col-md-2">
        <a href="{{ route('sub-category.index') }}" class="btn btn-primary">back</a>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('sub-category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Select list (select one):</label>
                            <select name="category_id" class="form-control" id="sel1">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Category Name</label>
                            <input type="text" name="sub_category_name" class="form-control" placeholder="sub category name">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="is_active" type="checkbox"> Active
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