@extends('frontend.frontMaster')


@section('content')

<form action="{{route('user.profile.edit',$userDetails->id)}}" method="post" enctype="multipart/form-data">
    <div class="row d-flex justify-content-center" style=" margin-top: 20px; margin-bottom:20px;">

        <div class="col-md-4" style="border:2px solid black; padding:10px;border-radius:15px;">
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
                <label for="userName">User Name: </label>
                <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" value="{{$userDetails->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$userDetails->email}}">
            </div>

            <div class="form-group">
                <label for="address">Address: </label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter Address" value="{{$userDetails->address}}"></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone: </label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$userDetails->phone}}">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth: </label>
                <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date Of Birth" value="{{$userDetails->dob}}">
            </div>
            <div class="form-group">
                <label for="age">Age: </label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Age will be calculated automatically" readonly value="{{$userDetails->age}}">
            </div>
        </div>

        <div class="col-md-4" style="border:2px solid black; padding:10px;border-radius:15px;">
            <img src="{{asset('app/users/'.$userDetails->image)}}" style="max-width: 200px; height: auto;" alt=""><br>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn secondary-btn">Submit</button>
    </div>
</form>
@endsection