<main class="h-full flex flex-col">
<header class="flex-shrink">
@if (Route::has('login'))


    <div class="fixed border-l border-b border-bottom border-green-500  bg-green-200 top-0 right-0 px-4 py-2">
        <!-- added Home link // u05 -->
        {{-- <a class="pr-4 text-sm text-gray-700 underline"  href="{{ url('/') }}">Home</a> --}}

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
<br />
@if(session()->has('message'))
        {{-- <p class="alert alert-success max-w-5xl mx-auto mt-16 rounded-full px-10 py-3 bg-green-50"> --}}
    <p class="alert alert-success max-w-5xl text-center mx-auto rounded-full lg:text-2xl md:text-xl text-xs px-10 py-3 bg-green-50">
        <span>
            {{ session()->get('message') }}
        </span>
    </p>
    <br>
@endif
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</header>
<section  class="flex-grow">

