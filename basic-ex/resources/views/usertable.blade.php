@extends('layouts.app-master')

@section('content')
<table class="table table-striped" action="{{ route('table.show') }}" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($users as $key => $user)
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->gender}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection