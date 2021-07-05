@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <!-- this way with session status we get the input where we gave value to status in the controller page! -->
        @if(session('status'))
        <div class="flex justify-center bg-red-500 p-4 rounded-lg mb-6 font-semibold text-white">
            {{session('status')}}
        </div>
        @endif
        <form action="{{route('login')}}" method="post">
            @csrf
            <!-- cross side request forgery: creates a token to make sure to protect form request to make sure registeration is intended -->
            <div class="mb-4 ">
                <label for="email"></label>
                <input type="text" name="email" id="email" placeholder="Your e-mail" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('email')}}">
                @error('email')
                <div class="text-red-400 mt-2 text-sm">
                    <!-- this message variable below exist in laravel -->
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4 ">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('password')
                <div class="text-red-400 mt-2 text-sm">
                    <!-- this message variable below exist in laravel -->
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4 ">
                <div class="flex justify-left">
                    <input type="checkbox" name="remember" id="remember" class=" m-2">
                    <label for="remember">Remember me</label>


                </div>
            </div>


            <div>
                <button type="submit" class="bg-blue-500 text-white border-2 w-full px-4 py-3 rounded ">Login</button>
            </div>
            @endsection