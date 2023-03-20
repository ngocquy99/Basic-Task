@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>

    <hr>

    <h1> Update </h1>
    <form method="post" action="{{ route('update') }}">   

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input  class="form-control" name="id" value="{{ old('email') }}" placeholder="id  " required="required" autofocus>
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h2 class="h3 mb-3 fw-normal">Update</h2>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required="required" autofocus>
            <label for="floatingNamee">Name</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div> 


        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="Phone Number" required="required">
            <label for="floatingPhonenumber">Phone Number</label>
            @if ($errors->has('phonenumber'))
                <span class="text-danger text-left">{{ $errors->first('phonenumber') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}" placeholder="Gender" required="required">
            <label for="floatingGender">Gender</label>
            @if ($errors->has('gender'))
                <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="placeofbirth" value="{{ old('placeofbirth') }}" placeholder="placeofbirth" required="required">
            <label for="floatingPlace">placeofbirth</label>
            @if ($errors->has('placeofbirth'))
                <span class="text-danger text-left">{{ $errors->first('placeofbirth') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        @include('auth.partials.copy')
    </form>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>

    
@endsection