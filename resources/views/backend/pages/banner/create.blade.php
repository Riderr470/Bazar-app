@extends('backend.master')

@section('content')

<h1>Add new Image to the Banner</h1>
<form action="{{route('banner.create')}}" method="post" enctype="multipart/form-data">
    @csrf
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
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id="image" placeholder="Enter Image">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection