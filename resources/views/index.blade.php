@php
global $is_admin;
$is_admin = false;

global $html_title;
$html_title = "Home";
@endphp
@include('header')
<br />
<br />
<form action="{{ route('titles.index') }}">

    <label for="tsearch">Search Titles:</label>
    <input class="border p-1" type="search" id="tsearch" placeholder="Title name" name="tsearch">
    <input class="border py-1  bg-green-500 hover:bg-green-700 text-white px-2 rounded" value="Search" type="submit">
</form>
<br />
<h2 class="text-sm sm:text-base md:text-base lg:text-lg -mt-20 pt-20">


    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">New Movies</span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#toprated">Top Rated Movies</a></span>
    <span>|</span>

    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#newtvshows">TV-Shows</a></span>
</h2>

<hr />
<br />
<div class="grid grid-cols-1 gap-3 content-center sm:grid-cols-2 sm:gap-3 md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6 ">


    @foreach($titles->slice(0,6) as $title)

    <div class="text-center text-sm sm:text-base md:text-base lg:text-lg">


        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />
        </a>

        {{$title->name}}
        <br />
    </div>
    @endforeach
</div>

<br />
<br />

<h2 id="toprated" class="text-sm sm:text-base md:text-base lg:text-lg -mt-20 pt-20">

    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">Top Rated Movies</span>


    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#top">Top of Page</a></span>
</h2>
@php $topRated = $titles->sortByDesc('rate');@endphp
<hr />
<br />
<div class="grid grid-cols-1 gap-2 content-center  sm:grid-cols-2 sm:gap-3 md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6 ">



    @foreach($topRated as $title)


    <div class="text-center text-sm sm:text-base md:text-base lg:text-lg">



        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />
        </a>
        {{$title->name}}
        <br />

    </div>

    @endforeach

</div>
<br />
<br />
<h2 id="newtvshows" class="text-sm sm:text-base md:text-base lg:text-lg -mt-20 pt-20">


    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">New TV-shows</span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1">
        <a class="no-underline hover:underline" href="#top">Top of Page</a></span>
</h2>
<hr />
<br />

<div class="grid grid-cols-1 gap-3 content-center  sm:grid-cols-2 sm:gap-3 md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6 ">



    @foreach($titles->sortDesc() as $title)

    <div class="text-center text-sm sm:text-base md:text-base lg:text-lg">


        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />

        </a>
        {{$title->name}}
        <br />

    </div>

    @endforeach

</div>
<br />
<br />



@include('footer')
