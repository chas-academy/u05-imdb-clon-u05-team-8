@php
global $html_title;
$html_title = "Listings";
@endphp

@include('header')
@if ( $listings->count() > 1)

<label for="listings">&nbsp;-&thinsp;Choose a </label> {{-- window.location='{{ url('/').'/genres/'}}'+this.selectedIndex --}}
<select class="border rounded" name="listings" id="listings" onchange="const url=location.href; location.href = ' #'+this.options[this.selectedIndex].value; history.replaceState(null,null,url); ">

    <option disabled selected>listing</option>
    @foreach($listings as $listing)
    <option value="{{$listing['id']}}"> {{$listing['name']}}</option>
    @endforeach
</select>
@endif

<br /><br />

@foreach($listings as $list)

<h2 id="{{$list->id}}" class=" text-xs lg:text-xl md:text-base -mt-20 pt-20">
    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">
        {{$list->name}}&nbsp;
        <a class="font-normal no-underline hover:underline" href="/dashboard/#{{$list->id}}">(Manage)</a></span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#top">Top of Page</a></span>
</h2>
<hr />
<br />
@php $counter=0 @endphp

<div class="grid grid-cols-1 gap-3 content-center md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6">


    @foreach($list->listitems()->get() as $listitem)
    @php ++$counter; @endphp

    {{--


        : <a class=" text-blue-700 underline" href="{{ url('/').'/titles/'.$listitem->title()->get()->first()->id}}">{{$listitem->title()->get()->first()->name}}</a>
    <br /> --}}

    <div class=" text-center text-xs lg:text-xl md:text-base">


        <a class="" href=" {{ url('/').'/titles/'.$listitem->title()->get()->first()->id}}">


            <img alt="Image of {{$listitem->title()->get()->first()->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$listitem->title->poster)}} />

        </a>
        {{$listitem->title->name}}


    </div>



    @endforeach
    @if ( $counter==0)
    No movies in this list.
    @endif
</div>


<br />
<br />


@endforeach
@include('footer')
