@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <!-- cross side request forgery: creates a token to make sure to protect form request to make sure registeration is intended -->
            <div class="mb-4 ">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">
                <!-- above: it keeps the last input in session with value="old('')" -->
                @error('name')
                <div class="text-red-400 mt-2 text-sm">
                    <!-- this message variable below exist in laravel -->
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4 ">
                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('username')}}">
                @error('username')
                <div class="text-red-400 mt-2 text-sm">
                    <!-- this message variable below exist in laravel -->
                    {{$message}}
                </div>
                @enderror
            </div>
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
                <label for="password_confirmation"></label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('password_confirmation')

                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white border-2 w-full px-4 py-3 rounded ">Register</button>
            </div>

        </form>

    </div>
</div>


@endsection