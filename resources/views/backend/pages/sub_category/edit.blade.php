@extends('backend.layout.master')
@section('admin_title','category create page')

@section('admin_content')

<div class="row">
    <div class="col-md-2">
        <a href="{{ route('sub-category.index') }}" class="btn btn-primary" href="">back</a>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('sub-category.update',$subCategory->id) }}" method="POST">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label>Select list (select one):</label>
                            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="sel1">
                                @foreach ($categories as $category)
                                    <option 
                                    value="{{ $category->id }}"
                                    @if ($subCategory->category_id == $category->id)
                                        {{ 'selected' }}
                                    @endif
                                    >{{ $category->category_name }}</option>
                                @endforeach
                                
                            </select>
                            @error('category_id')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sub Category Name</label>
                            <input type="text" name="sub_category_name" class="form-control @error('sub_category_name') is-invalid @enderror" value="{{ $subCategory->sub_category_name }}">
                        </div>
                        @error('sub_category_name')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        <div class="checkbox">
                            <label>
                                <input 
                                name="is_active" 
                                type="checkbox"
                                @if ($subCategory->is_active == 1)
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