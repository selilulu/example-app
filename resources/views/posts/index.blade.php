@extends('layouts.app')


@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route ('index')}}" method='post'>
            @csrf
            <div class="md-4">
                <label for="body" class="sr-only">Body</label>
                <!-- sr-only is except screen readers -->
                <textarea name="body" id="body" cols="30" rows="4" placeholder="type your message here" class="bg-gray-100 w-full border-2 rounded-lg p-4 @error('body') border-red-500 @enderror">
                </textarea>

                @error('body')
                <div class=" text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-font-medium ">Post</button>
        </form>
    </div>
</div>

@endsection