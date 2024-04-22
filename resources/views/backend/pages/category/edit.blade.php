@extends('backend.master')

@section('content')

<h1>Create Category</h1>
<form action="{{route('category.create')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="categoryName">Category Name</label>
        <input type="text" name="categoryName" class="form-control" id="categoryName" placeholder="Enter Category Name" value="{{old('categoryName')}}">

    </div>
    <div class="form-group">
        <label for="brandName">Brand Name</label>
        <input type="text" name="brandName" class="form-control" id="brandName" placeholder="Enter Brand Name" value="{{old('brandName')}}">

    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id="image">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection