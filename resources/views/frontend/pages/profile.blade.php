@extends('frontend.master')


@section('content')

<form action="{{route('user.profile.edit',$userDetails->id)}}" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            @csrf
            @method('PUT')
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
                <label for="userName">User Name</label>
                <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" value="{{$userDetails->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$userDetails->email}}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter Address" value="{{$userDetails->address}}"></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$userDetails->phone}}">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date Of Birth" value="{{$userDetails->dob}}">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Age will be calculated automatically" readonly value="{{$userDetails->age}}">
            </div>
        </div>

        <div class="col-md-4">
            <img src="{{asset('app/users/'.$userDetails->image)}}" class="img-fluid" style="max-width: 200px; height: auto;" alt=""><br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{$userDetails->image}}">
            </div>
        </div>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection