@php
global $html_title;
$html_title = "Reviews";
@endphp

@include('header')
<br /><br />

<h2 class="text-sm sm:text-base md:text-base lg:text-lg -mt-20 pt-20">


    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">Latest Reviews</span>

    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#upcoming">Upcoming Reviews</a></span>

</h2>
<hr />
<br />

@if ($reviews->count())
@php $sortedReviews = $reviews->where('approve','1')->sortByDesc('created_at') @endphp

@if ($sortedReviews->count() )


@foreach ( $sortedReviews as $review)

{{-- @if($review->approve == true) --}}
<div class="border border-gray-100 container flex flex-col sm:flex-row sm:flex-wrap">
    <div class="border border-gray-100 p-4 ">

        <a class="" href=" {{ url('/').'/titles/'.$review->title->id}}">

            <img alt="Image of {{$review->title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$review->title->poster)}} />
        </a>
    </div>

    <div class="p-4">

        <b>Title:</b> {{ $review->title->name }}
        <br />
        <b>Release date:</b> {{ $review->title->publ_date }}
        <br />
        <b>Reviewer:</b> {{$review->user->name}}
        <br />
        <b>Review created:</b> {{ date_format($review->created_at,"Y-m-d H:i") }}

    </div>

    <div class=" md:col-span-2 p-4">

        {{ $review->body }}

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum quidem voluptates quaerat eaque,
            id asperiores sint odit? Eos esse odio harum error aliquid recusandae repellendus nobis earum minus incidunt.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum quidem voluptates quaerat eaque,
            id asperiores sint odit? Eos esse odio harum error aliquid recusandae repellendus nobis earum minus incidunt.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum quidem voluptates quaerat eaque,
            id asperiores sint odit? Eos esse odio harum error aliquid recusandae repellendus nobis earum minus incidunt.
        </p>
        </p>
    </div>
</div>
<br />
<br />
@endforeach
@else
<p>
    There are no reviews yet
</p>
<br />
<br />


@endif

{{-- Not yet approved reviews  --}}

<h2 id="upcoming" class=" text-sm sm:text-base md:text-base lg:text-lg -mt-20 pt-20">


    <span class="font-semibold lg:pr-4 md:pr-2 sm:pr-1">Upcoming reviews</span>
    <span>|</span>
    <span class="lg:px-4 md:px-2 sm:px-1"><a class="no-underline hover:underline" href="#top">Top of Page</a></span>
</h2>
<hr />
<br />
@php

$notApproved = $reviews->where('approve','0');

@endphp
@if ($notApproved->count() > 0)

@foreach ($notApproved as $review)

<div class="border border-gray-100 container flex flex-col sm:flex-row sm:flex-wrap">
    <div class="border border-gray-100 p-4 ">

        <a class="" href=" {{ url('/').'/titles/'.$review->title->id}}">

            <img alt="Image of {{$review->title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$review->title->poster)}} />
        </a>
    </div>

    <div class="p-4">

        <b>Title:</b> {{ $review->title->name }}
        <br />
        <b>Release date:</b> {{ $review->title->publ_date }}
        <br />
        <b>Reviewer:</b> {{$review->user->name}}
        <br />
        <b>Review created:</b> {{ $review->created_at }}
    </div>

    <div class="md:col-span-2 p-4">

        <p class="text-gray-300">

            @php
            $txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum quidem voluptates quaerat eaque, id asperiores sint odit? Eos esse odio harum error aliquid recusandae repellendus nobis earum minus incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum quidem voluptates quaerat eaque, id asperiores sint odit? Eos esse odio harum error aliquid recusandae repellendus nobis earum minus incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum quidem voluptates quaerat eaque, id asperiores sint odit? Eos esse odio harum error aliquid recusandae repellendus nobis earum minus incidunt.";
            echo (str_shuffle($txt));

            @endphp

        </p>
    </div>
</div>

<br />
<br />


@endforeach
@else
<p>
    There are no upcoming reviews at the moment.
</p>
@endif
@else
<p>
    There are no reviews yet.
</p>
@endif
<br />
@include('footer')
