@php
global $is_admin;
$is_admin = false;

global $html_title;
$html_title = "Home";
@endphp
@include('header')
<br /><br />
<h2 class="text-xs lg:text-xl md:text-base -mt-20 pt-20">

    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">New Movies</span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#toprated">Top Rated Movies</a></span>
    <span>|</span>

    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#newtvshows">New TV-Shows</a></span>
</h2>

<hr />
<br />
<div class="grid grid-cols-1 gap-3 content-center md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6 ">

    @foreach($titles->slice(0,6) as $title)

    <div class="text-center text-xs lg:text-xl md:text-base">

        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />
        </a>

        {{$title->name}}
    </div>
    @endforeach
</div>

<br />
<br />

<h2 id="toprated" class=" text-xs lg:text-xl md:text-base -mt-20 pt-20">
    <span class="font-semibold lg:px-4 md:px-2 sm:px-1">Top Rated Movies</span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#top">Top of Page</a></span>
</h2>

<hr />
<br />
<div class="grid grid-cols-1 gap-2 content-center md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6 ">


    @foreach($titles->slice(2,10) as $title)

    <div class="text-center text-xs md:text-base lg:text-xl">


        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />
        </a>
        {{$title->name}}
    </div>

    @endforeach

</div>
<br />
<br />
<h2 id="newtvshows" class=" text-xs lg:text-xl md:text-base -mt-20 pt-20">

    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">New TV-shows</span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#top">Top of Page</a></span>
</h2>
<hr />
<br />

<div class="grid grid-cols-1 gap-3 content-center md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6 ">


    @foreach($titles->sortDesc() as $title)

    <div class="text-center text-xs lg:text-xl md:text-base">

        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />

        </a>
        {{$title->name}}
    </div>

    @endforeach

</div>
<br />
<br />



@include('footer')
