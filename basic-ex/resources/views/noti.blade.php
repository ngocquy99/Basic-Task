@extends('layouts.unlogin-app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Dashboard</h1>
    @endauth
<h1> Check mail for access</h1>
</div>
    

@endsection