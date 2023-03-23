@extends('layouts.app-master')

@section('content')
<div style="padding-bottom: 15px;"></div>

<h1>User Imformation</h1>

<form action="{{ route('users.search') }}" method="GET" >
    <input type="search" name="search" value="{{ request('search') }}" class="form-control form-control-dark" placeholder="Search ..." aria-label="Search">
</form>

<table class="table table-striped" action="{{ route('table.show') }}">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($users as $key => $user)
            <th scope="row">{{$key+1}}</th>
            <td >{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->gender}}</td>
        </tr>
            @endforeach
    </tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center ">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>

@endsection