@extends('frontend.master')


@section('content')
<div class="col-md-6 offset-md-3">
  <h2 class="text-center">Login</h2>
  
<form action ="{{route('login')}}" method="post" >
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
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>

  <div class="d-grid gap-2 col-6 mx-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form>
</div>
@endsection