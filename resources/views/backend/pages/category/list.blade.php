@extends('backend.master')


@section('content')


<h1>View All Category</h1>

<div class="container">
    <a class="btn btn-primary" href="{{url('category.create')}}">Create New Category</a>
</div>
<br>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{$category->categoryName}}</td>
            <td>{{$category->brandName}}</td>
            <td><img src="{{url('/app/category', $category->image)}}" alt=""></td>
            <td>
                <a class="btn btn-info" href="{{route('category.details', $category->id)}}">View</a>
                <a class="btn btn-secondary" href="{{route('category.edit', $category->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('category.edit', $category->id)}}">Delete</a>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>



@endsection