@extends('frontend.frontMaster')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center" style=" margin-top: 20px; margin-bottom:20px;">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="border:2px solid black; padding:10px;border-radius:15px;">
            <h2 class="text-center">Registration</h2>
            <form action="{{route('register')}}" method="post">

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
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" value="{{old('userName')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirmation" placeholder="Confirm Password">
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn primary-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection