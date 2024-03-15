@extends('backend.master')


@section('content')
<h2>Show User Details</h2>
<div class="container">
    <div class="table-responsive">
        <table class="table table-dark">
        <thead>
            <tr>
            <th >Id</th>
            <th >User Name</th>
            <th >Email</th>
            <th >Password</th>
            <th >Address</th>
            <th >Phone</th>
            <th >Create Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
            <th >{{ $u->id }}</th>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td class="text-truncate" style="max-width: 150px;">{{$u->password}}</td>
            <td class="text-truncate" style="max-width: 150px;">{{$u->address}}</td>
            <td>{{$u->phone}}</td>
            <td>{{$u->created_at}}</td>
            </tr>
            @endforeach
            
        </tbody>
        </table>
    </div>
</div>

@endsection