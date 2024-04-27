<!-- @extends('backend.master') -->


@section('content')


<h1>View All Products</h1>


@foreach($data as $d)
<div class="card bg-dark text-light">
    <div class="card-body">
        <div class="row">
            <h5 class="card-title text-light col-sm">Card title</h5>
            <a class="btn btn-outline-primary  col-sm-2" href="">Edit</a>
        </div>
        <br>
        <img class="card-img" src="{{asset('app/uploads/banner/'.$d->image)}}" alt="Card image">
        <label class="m-2 mx-auto">Description:</label>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
</div>
<br>
@endforeach



@endsection