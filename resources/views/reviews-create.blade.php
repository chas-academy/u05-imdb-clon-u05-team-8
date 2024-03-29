@php
global $html_title;
$html_title = $title['name'];
@endphp
@include('header')
<br /><br />

<h1 class="text-center m-12">Write a review.</h1>

@if(auth()->user() )
<form class="flex flex-col justify-center" action="/reviews" method="POST">
    @csrf

    <input type="hidden" id="title_id" name="title_id" value="{{ $title->id }}">
    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">


    <textarea class="mx-auto px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" name="body" rows="4" cols="100" type="text" placeholder="Enter review"></textarea>
    <button class="w-36 mx-auto mt-4 bg-blue-600 text-gray-200 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none" type="submit">Submit</button>
</form>

@else
<h3 class="text-center m-12">To write a review about {{ $title->name }}, you have to
    <a class=" text-blue-700 underline" href="{{ url('/').'/register'}}">Register</a>
    or be
    <a class=" text-blue-700 underline" href="{{ url('/').'/login'}}">Logged in</a></h3>

@endif
@include('footer')
