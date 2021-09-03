@php
global $html_title;
@endphp
<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$html_title}}</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main class="h-full flex flex-col">
        <header class="flex-shrink">

            @if (Route::has('login'))

            <div class="fixed border-l border-b border-bottom border-gray-300  bg-gray-800 top-0 right-0 px-4 py-2">

                @auth

                <form method="POST" action="{{ route('logout') }}">
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-300 underline">Dashboard</a>
                    <span class="text-sm text-gray-300 no-underline">&thinsp;|&thinsp;</span>


                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-sm text-gray-300 underline">Logout</a>
                </form>


                @else


                <a href="{{ route('login') }}" class="text-sm text-gray-300 underline">Login</a>

                @if (Route::has('register'))
                <span class="text-sm text-gray-300 no-underline">&thinsp;|&thinsp;</span>

                <a href="{{ route('register') }}" class="text-sm text-gray-300 underline">Register</a>
                @endif

                @endauth
            </div>

            @endif

            <nav class="max-w-5xl mx-auto mt-12 rounded-full px-6 py-3 bg-gray-800">
                <ul class="flex items-center justify-between">
                    <li class="lg:mr-14 mr-2 ml-2 lg:text-2xl md:text-xl text-xs">
                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/">Home</a>
                    </li>
                    <li class="lg:mr-14 mr-2 lg:text-2xl md:text-xl text-xs">
                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/reviews">Reviews</a>
                    </li>
                    <li class="lg:mr-14 mr-2 lg:text-2xl md:text-xl text-xs">
                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/">New Movies</a>
                    </li>
                    <li class="lg:mr-14 mr-2 lg:text-2xl md:text-xl text-xs">
                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/">Top Movies</a>
                    </li>
                    <li class="lg:mr-14 mr-2 lg:text-2xl md:text-xl text-xs">
                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/listing">Watchlists</a>
                    </li>
                </ul>
            </nav>


            @if(session()->has('message'))
            <br />

            <p class="alert alert-success max-w-5xl text-center mx-auto rounded-full lg:text-2xl md:text-xl text-xs px-10 py-3 bg-green-50">
                <span>
                    {{ session()->get('message') }}
                </span>
            </p>

            @endif

            @if ($errors->any())
            <br />
            <div class="alert alert-danger max-w-5xl mx-auto rounded-full lg:text-2xl md:text-xl text-xs py-5 px-10 bg-red-50">
                <div class="text-center">
                    <strong>There were some problems with your input.</strong>
                    @if( $errors->count() == 1 )

                    <p>
                        {{ $errors->first() }}
                    </p>

                    @endif
                </div>

                @if( $errors->count() > 1 )

                <ul class="list-disc no-underline">
                    @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
                @endif

                @endif
        </header>

        <section class="max-w-5xl flex-grow mx-auto">
            <!-- Start of section - will be closed in footer.blade.php -->
            <div class="container bg-red-800 px-4">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <br />
                            <h1>{{$html_title}}</h1>
                            @php
                            global $is_admin;
                            $is_admin = false;
                            @endphp

                            @auth
                            <!-- Only check role for Authenticated users -->
                            @php
                            $userAuth = Auth::user();

                            if ($userAuth->role->id == 1) {
                            $is_admin = true;
                            }
                            @endphp
                            @endauth
