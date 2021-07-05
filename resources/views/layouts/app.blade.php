<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selin's laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-pink-200">
    <nav class="bg-white p-6 mb-4 flex justify-between">
        <ul class="flex items-center">
            <li class="p-3">
                <a href="/">Home</a>
            </li>

            <li class="p-3">
                <a href=" {{ route('dashboard')}}">Dashboard</a>
            </li>

            <li class="p-3">
                <a href="{{route('index')}}">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @if (auth()->user())
            <li class="p-3">
                <a href="">Hey hey, {{auth()->user()->username}}</a>
            </li>
            <li class=" p-3">
                <a href="{{route('logout')}}">Log out</a>
            </li>
            @else


            <li class="p-3">
                <a href="{{ route('register')}}">Register</a>
            </li>
            <li class="p-3">
                <a href=" {{ route('login')}}">Login </a>
            </li>
            @endif
        </ul>


    </nav>
    @yield('content')
</body>

</html>