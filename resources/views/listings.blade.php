@php
global $html_title;
$html_title = "Listings";
@endphp

@include('header')
<br />
<br />

<div class="flex flex-wrap justify-start content-center">

    @if ( $listings->count() > 1)
    <div>
        <label class="my-1" for="listings">Select a </label> {{-- window.location='{{ url('/').'/genres/'}}'+this.selectedIndex --}}
        <select class="border rounded mx-2 my-1" name="listings" id="listings" onchange="const url=location.href; location.href = ' #'+this.options[this.selectedIndex].value; history.replaceState(null,null,url); ">

            <option disabled selected>listing</option>
            @foreach($listings as $listing)
            <option value="{{$listing['id']}}"> {{$listing['name']}}</option>
            @endforeach
        </select>
    </div>
    @endif
    <div class="text-base  sm:ml-auto">

        <form action="{{action([App\Http\Controllers\ListingController::class, 'create'])}}" method="get">
            {{-- @csrf --}}
            <button name="listing" class="bg-green-500 hover:bg-green-700 text-white  my-1 sm:my-0 py-1 px-2  rounded">Create a new Listing</button>

        </form>
    </div>
</div>

<br />

@if ($listings->count() == 0)
<hr>
<br>
No listings
@else



@php $first=false; /* use when no top-of-page at t-o-p. */ @endphp
@foreach($listings as $list)

<h2 id="{{$list->id}}" class="text-sm sm:text-base md:text-base lg:text-lg -mt-20 pt-20">

    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">
        {{$list->name}}&nbsp;
        <a class="font-normal no-underline hover:underline" href="{{ url('/dashboard#').$list->id }}">(Manage)</a></span>


    @if( !$first)
    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#top">Top of Page</a></span>
    @endif
    @php $first=false; @endphp

</h2>
<hr />

<br />
@php $counter=0 @endphp

<div class="grid grid-cols-1 gap-3 content-center sm:grid-cols-2 sm:gap-3 md:grid-cols-3 md:gap-4 lg:grid-cols-4 lg:gap-6">

    @foreach($list->listitems()->get() as $listitem)
    @php ++$counter; @endphp


    <div class=" text-center text-sm sm:text-base md:text-base lg:text-lg">
        <a class="" href=" {{ url('/').'/titles/'.$listitem->title()->get()->first()->id}}">
            <img alt="Image of {{$listitem->title()->get()->first()->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$listitem->title->poster)}} />
        </a>
        {{$listitem->title->name}}
        <br />
    </div>

    @endforeach
    @if ( $counter==0)
    No movies in this list.
    @endif
</div>


<br />
<br />


@endforeach
@endif
@include('footer')
