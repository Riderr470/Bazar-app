<div class="col-md-6" style="border:2px solid black; padding:10px;border-radius:15px;">

    <h2 class="text-center">Login</h2>

    <form action="{{route('admin.login')}}" method="post">
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
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn primary-btn">Submit</button>
        </div>

    </form>
</div>