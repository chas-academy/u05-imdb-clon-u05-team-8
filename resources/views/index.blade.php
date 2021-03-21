<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>U05</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        {{-- @include('layouts.navigation') --}}
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <a class="pl-6 mr-4 text-sm text-gray-700 underline" href="{{ url('/start') }}">Home</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif


        <h1>IMDB-CLONE-LOGO</h1>


        <h2 class="text-4xl mt-40 text-center">Coming soon</h2>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-28">
                <h3 class="text-4xl pb-6 bg-white border-b border-gray-400">New Movies</h3>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles->slice(0, 5) as $title)
                        <div>
                            <h3>{{$title->name}}&nbsp;({{$title->id}})</h3>                           
                            <a class=" text-blue-500 underline" href="{{ url('/').'/genre/'.$title->id}}">Read more</a>
                        </div>   
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-28">
                <h3 class="text-4xl pb-6 bg-white border-b border-gray-400">New TV-Shows</h3>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles ->slice(0, 5) as $title)
                        <div>
                            <h3>{{$title->name}}&nbsp;({{$title->id}})</h3>                           
                            <a class=" text-blue-500 underline" href="{{ url('/').'/genre/'.$title->id}}">Read more</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-28">
                <h3 class="text-4xl pb-6 bg-white border-b border-gray-400">Top 5 Movies</h3>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles->slice(0, 5) as $title)
                        <div>
                            <h3>{{$title->name}}&nbsp;({{$title->id}})</h3>                           
                            <a class=" text-blue-500 underline" href="{{ url('/').'/genre/'.$title->id}}">Read more</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-28">
                <h3 class="text-4xl pb-6 bg-white border-b border-gray-400">Top 5 TV-Shows</h3>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles->slice(0, 5) as $title)
                        <div>
                            <h3>{{$title->name}}&nbsp;({{$title->id}})</h3>                           
                            <a class=" text-blue-500 underline" href="{{ url('/').'/genre/'.$title->id}}">Read more</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


 




    </body>
</html>