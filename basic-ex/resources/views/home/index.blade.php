@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Dashboard</h1>
    <p class="lead">Only authenticated users can access this section.</p>

    <hr>
        @include('auth.partials.copy')
    </form>

    <h2>Frameworks - Search Engine</h2>

    <p><b>Type the first letter of the PHP MVC Framework</b></p>

        <p><input type="text" size="40" id="txtHint" ></p>
        <div id="list_user">

        </div>
        <button id="btn-send"> send </button>


    <p><input type="text" id="email_check"></p>
    <div id="email_checked">
        </div>
        <button id="send-email"> email check </button>


    @endauth

    @guest
    <h1>Homepage</h1>
    <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
    @endguest
</div>


@endsection