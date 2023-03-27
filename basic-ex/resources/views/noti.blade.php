@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Dashboard</h1>
    @endauth
    <p>Check mail for access</p>

</div>
    

@endsection