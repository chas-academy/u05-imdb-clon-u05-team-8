@php
global $is_admin;
$is_admin = false;

global $html_title;
$html_title = "Genres";
@endphp

@include('header')
<br /><br />

<label for="genres">Select a </label> {{-- window.location='{{ url('/').'/genres/'}}'+this.selectedIndex --}}
<select class="border rounded mx-2 my-1" name="genres" id="genres" onchange="const url=location.href; location.href = ' #'+this.options[this.selectedIndex].value; history.replaceState(null,null,url); ">

    <option disabled selected>genre</option>
    @foreach($genres as $genre)
    @if ( count($genre->titles()->get()) > 1)
    <option value="{{$genre['id']}}"> {{$genre['name']}}</option>
    @endif
    @endforeach
</select>
<br />
<br />
@foreach($genres as $genre)

@if ( count($genre->titles()->get()) > 1)

<h2 id="{{$genre->id}}" class=" text-sm sm:text-base md:text-base lg:text-lg -mt-20 pt-20">

    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">{{$genre->name}}</span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#top">Top of Page</a></span>
</h2>
<hr />
<br />
<div class="grid grid-cols-1 gap-2 content-center  sm:grid-cols-2 sm:gap-3 md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6 ">


    @if ($genre->titles()->get()->first())

    @foreach ($genre->titles()->get() as $title )
    <div class="text-center text-sm sm:text-base md:text-base lg:text-lg">

        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />
        </a>
        {{$title->name}}
        <br />
    </div>
    @endforeach
    @endif

</div>
<br />
<br />
@endif
@endforeach

@include('footer')
