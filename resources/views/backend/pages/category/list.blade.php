@extends('backend.master')


@section('content')


<h1>View All Category</h1>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Category Name</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Image</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $category)
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{$category->categoryName}}</td>
            <td>{{$category->brandName}}</td>
            <td><img src="{{url('/app/category', $category->image)}}" alt=""></td>

        </tr>
        @endforeach

    </tbody>
</table>



@endsection