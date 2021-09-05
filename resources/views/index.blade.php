@php
global $is_admin;
$is_admin = false;

global $html_title;
$html_title = "Home";
@endphp
@include('header')

<div class="py-4 lg:mt-18 md:mt-12 mt-6">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 px-1">
        <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">New Movies</h3>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                @foreach($titles->slice(0, 5) as $title)
                <div class="lg:w-40 md:w-28 w-16">
                    <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                    <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/titles/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false">
                            <path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="py-4 lg:mt-36 md:mt-18 mt-10">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 px-1">
        <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">New Tv-Shows</h3>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                @foreach($titles->slice(0, 5) as $title)
                <div class="lg:w-40 md:w-28 w-16">
                    <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                    <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/titles/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false">
                            <path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="py-12 lg:mt-36 md:mt-18 mt-10">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 px-1">
        <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">Movie Tips</h3>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                @foreach($titles->slice(0, 5) as $title)
                <div class="lg:w-40 md:w-28 w-16">
                    <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                    <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/titles/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false">
                            <path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="py-12 lg:mt-36 md:mt-18 mt-10">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 px-1">
        <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">TV-Show Tips</h3>
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                @foreach($titles->slice(0, 5) as $title)
                <div class="lg:w-40 md:w-28 w-16">
                    <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                    <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/titles/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false">
                            <path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="py-12 lg:mt-36 md:mt-18 mt-10">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 px-4">
        <h3 class="lg:text-4xl text-center mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">Check out all reviews for some movie inspiration &nbsp;
            <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-3" href="{{ url('/').'/reviews/'}}">Go to all reviews <svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false">
                    <path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path>
                </svg>
            </a></h3>
    </div>
</div>

@include('footer')
