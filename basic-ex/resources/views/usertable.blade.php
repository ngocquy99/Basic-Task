@extends('layouts.app-master')

@section('content')
<div style="padding-bottom: 15px;"></div>

<h1>User Imformation</h1>

<form action="{{ route('users.search') }}" method="GET" >
    <input id="searchUser" type="search" name="search" value="{{ request('search') }}" class="form-control form-control-dark" placeholder="Search By Username" aria-label="Search">
</form>

<table id="usertable" class="table table-striped" action="{{ route('table.show') }}">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Update</th>
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
            <td><a href="/user-edit?id={{$user->id}}"class="text-decoration-none text-white btn btn-primary">Update</a></td>
        </tr>
            @endforeach
    </tbody> 
</table>    
<nav id="pagination">
{{ $users->links() }}
</nav>
   
 
@endsection