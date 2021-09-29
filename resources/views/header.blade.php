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
    <main class="h-full flex flex-col container mx-auto max-w-5xl ">
        <!-- max 102px wide -->
        <header class="flex-shrink">

            @php
            $add_fixed_mini_menu=false;
            @endphp
            @if ($add_fixed_mini_menu)

            @if (Route::has('login') )

            <div class="fixed top-0 right-0 border-l border-b rounded-lg border-bottom border-gray-300  bg-gray-400 px-4 py-2">

                @auth

                <form method="POST" action="{{ route('logout') }}">
                    <a href="/" class="text-sm text-gray-300 underline">Home</a>
                    <span class="text-sm text-gray-300 no-underline">&thinsp;|&thinsp;</span>

                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-300 underline">Dashboard</a>
                    <span class="text-sm text-gray-300 no-underline">&thinsp;|&thinsp;</span>

                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="text-sm text-gray-300 underline">Logout</a>
                </form>

                @else
                <!-- not authed -->

                <a href="/" class="text-sm text-gray-300 underline">Home</a>
                <span class="text-sm text-gray-300 no-underline">&thinsp;|&thinsp;</span>

                <a href="{{ route('login') }}" class="text-sm text-gray-300 underline">Login</a>

                @if (Route::has('register'))
                <span class="text-sm text-gray-300 no-underline">&thinsp;|&thinsp;</span>
                <a href="{{ route('register') }}" class="text-sm text-gray-300 underline">Register</a>
                @endif

                @endauth
            </div>
            @endif
            @endif

            <nav class="fixed mx-auto w-full max-w-5xl mt-0 rounded-full px-1 py-3 bg-gray-800">



                <ul class="flex items-center justify-evenly text-xs sm:text-lg md:text-xl lg:text-xl">

                    <li class=" ">



                        <a class=" text-gray-300 hover:underline hover:text-gray-200" href="/">Home</a>
                    </li>
                    <li class="">


                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/reviews">Reviews</a>
                    </li>
                    <li class="">


                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/genres">Genres</a>
                    </li>
                    <li class="">


                        <a class="text-gray-300 hover:underline hover:text-gray-200" href="/listings">Listings</a>
                    </li>
                    <!-- Authenticated Users Menu -->
                    @auth
                    <li class="">


                        <a href="{{ url('/dashboard') }}" class=" text-gray-300 hover:underline hover:text-gray-200">Dashboard</a>
                    </li>

                    <li class="">



                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class=" text-gray-300 hover:underline hover:text-gray-200">Logout</a>
                        </form>
                    </li>

                    @else
                    <!-- Not Authenticated Users Menu -->

                    <li class="">



                        <a href="{{ route('login') }}" class="text-gray-300 hover:underline hover:text-gray-200">Login</a>
                    </li>
                    <li class="">



                        @if (Route::has('register'))

                        <a href="{{ route('register') }}" class="text-gray-300 hover:underline hover:text-gray-200">Register</a>

                        @endif

                    </li>

                    @endauth

                </ul>
            </nav>

            <br />
            <br />
            @if(session()->has('message'))
            <br />

            <p class="alert alert-success  max-w-5xl text-center mx-auto rounded-full lg:text-2xl md:text-xl text-xs px-10 py-3 bg-green-50">

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
            </div>
            @endif
        </header>
        <!-- This section is a container for respective view  max-w-5xl mx-auto-->


        <section class="flex-grow px-6">

            <br />
            <br />

            <h1 id="top" class="inline -mt-20 pt-20 underline">{{$html_title}}</h1>

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
