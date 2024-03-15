@extends('backend.master')


@section('content')
<h1>Register new User</h1>

<form action="{{route('user.create')}}", method="post">
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
        <label for="userName">User Name</label>
        <input type="text" class="form-control" id="userName" name= "userName" placeholder="User Name" value="{{old('userName')}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name= "email" placeholder="Email" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name= "password" placeholder="Password" value="{{old('password')}}">
    </div>
    <div class="form-group">
        <label for="password_confirm">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirm" name= "password_confirmation" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name= "address" placeholder="Address" value="{{old('address')}}"></textarea>
    </div>
    <div class="form-group">
        <label for="Phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name= "phone" placeholder="Phone Number" pattern="[0-9]{11}" value="{{old('phone')}}">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection