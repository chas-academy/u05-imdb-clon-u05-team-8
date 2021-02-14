@if (Route::has('login'))

    <div class="fixed border-l border-b border-bottom border-green-500  bg-green-200 top-0 right-0 px-4 py-2">
        <!-- added Home link // u05 -->
        <a class="pr-4 text-sm text-gray-700 underline"  href="{{ url('/') }}">Home</a>

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
<br>
