@extends('layouts.auth-master')

@section('content')
<form method="post" action="{{ route('login.perform') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <img class="mb-5 mt-2" src="assets/Bootstrap_logo.svg.png" alt="logo" width="65" height="50">

    <h1 class="h3 mb-3 fw-normal">Login</h1>


    <div class=" container form-group form-floating mb-3 col-md-4 col-md-offset-4 align-center">
        <input type="text" class="  form-control  " name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
        <label for="floatingName">Email or Username</label>
        @if ($errors->has('username'))
        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
        @endif
    </div>

    <div class=" container form-group form-floating mb-3 col-md-4 col-md-offset-4 align-center">
        <input type="password" class=" form-control  " name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        <label for="floatingPassword">Password</label>
        @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
    </div>

    <button class=" btn btn-lg btn-primary" type="submit">Login</button>

    @include('auth.partials.copy')
</form>
@endsection