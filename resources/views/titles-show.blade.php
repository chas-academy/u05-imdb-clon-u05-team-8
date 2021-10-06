@php
global $html_title;
$html_title = $title['name'];

@endphp

@include('header')
<div class="flex flex-wrap justify-start content-center">

    @if ( $title->reviews->count() > 0)

    <div class="text-base  sm:ml-auto">

        <form action="\titles\{{$title->id}}\reviews">
            {{-- @csrf --}}
            <button value="" class="bg-green-500 hover:bg-green-700 text-white  my-1 sm:my-0 px-2 rounded">View all Reviews</button>
        </form>
    </div>
    @endif

</div>
<br />
<hr>
<br />

<!-- Display Create button for authenticated users with role Administrator -->
@php
global $is_admin;
@endphp

<div class="container grid grid-cols-1 gap-2 sm:grid sm:grid-cols-2 ">

    <div class="sm:order-2">
        <a class="" href=" {{ url('/').'/titles/'.$title->id}}">

            <img alt="Image of {{$title->name}}" class="h-80 md:h-80 lg:h-80 w-auto mx-auto border-2 border-gray-400 hover:border hover:border-gray-800" src={{ URL::to('/posters/'.$title->poster)}} />
        </a>

    </div>
    <div class="sm:order-1">
        <div class="px-4">

            <b>Title:</b> {{ $title->name }}
            <br />
            <b>Release date:</b> {{ $title->publ_date }}
            <br />
            <b>Reviewer:</b> {{$title->user->name}}
            <br />
            <b>Review created:</b> {{ date_format($title->created_at,"Y-m-d H:i") }}

        </div>
    </div>


    <div class="sm:order-3 sm:col-span-2">

        <div class="p-4">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquid totam consectetur vel, aut ullam suscipit vitae laudantium! Nostrum omnis iure nisi deserunt praesentium, assumenda officiis esse magni dolor magnam?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, non ducimus hic, nihil deserunt earum consequatur ea architecto iusto ipsa doloribus nostrum nobis repellat vero sint debitis exercitationem ipsam? Voluptate.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, non ducimus hic, nihil deserunt earum consequatur ea architecto iusto ipsa doloribus nostrum nobis repellat vero sint debitis exercitationem ipsam? Voluptate.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, non ducimus hic, nihil deserunt earum consequatur ea architecto iusto ipsa doloribus nostrum nobis repellat vero sint debitis exercitationem ipsam? Voluptate.




        </div>
    </div>

</div>
<hr>
@if(auth()->user())

<div class="flex flex-row flex-wrap justify-start">

    @foreach (auth()->user()->listings()->get() as $listing )


    <form class="mr-2 my-2" action="/listings/{{$listing->id}}/titles/{{$title->id}}" method="POST">
        @csrf
        @method('PUT')
        <button name="listing" class="bg-green-500 hover:bg-green-700 text-white  px-2 rounded">Add to "{{$listing->name}}"</button>
    </form>
    @endforeach
</div>

<br />
<hr />
<br />
<div class="text-base">
    <form action="/reviews/{{$title->id}}" method="POST">

        @csrf
        <button name="listing" class="bg-green-500 hover:bg-green-700 text-white  px-2 rounded">Add a Review</button>
    </form>

</div>
@endif


@include('footer')
