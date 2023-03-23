@extends('layouts.app-master')

@section('content')

<div style="padding-bottom: 15px;"></div>

<h1> Update By ID </h1>
    <form method="post" action="{{ route('update.preform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input class="form-control" name="id" value="{{ old('id') }}" placeholder="ID" required="required" autofocus>

        <h2 class="h3 mb-3 fw-normal">Update</h2>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email Address</label>
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
            <select class="form-select" aria-label="Default select example" name="gender" value="{{ old('gender') }}" placeholder="Gender" required="required">
            <label for="floatingGender"> <option selected>Gender</option></label>
            @if ($errors->has('gender'))
            <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
            @endif
            <option value="Nữ">Nữ</option>
            <option value="Nam">Nam</option>
            </select>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="placeofbirth" value="{{ old('placeofbirth') }}" placeholder="placeofbirth" required="required">
            <label for="floatingPlace">Place Of Birth</label>
            @if ($errors->has('placeofbirth'))
            <span class="text-danger text-left">{{ $errors->first('placeofbirth') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>

@endsection