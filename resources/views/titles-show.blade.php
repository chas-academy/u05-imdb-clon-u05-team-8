@php
global $html_title;
$html_title = $title['name'];

@endphp

@include('header')
<div class="flex flex-wrap justify-start content-center">

    @if ( $title->reviews->count() > 0)

    <div class="text-base  sm:ml-auto">
        {{-- <form action="https://google.com">
    <input type="submit" value="Go to Google" />
</form>

method="get"
 --}}
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

@if ( false )



@if ( $is_admin )


<div class="text-sm">
    <a href="{{action([App\Http\Controllers\TitleController::class, 'create'])}}" class="text-sm text-green-700 underline">[Create]</a> new Title.
</div>
@endif

<div class="bg-gray-400 border border-gray-200 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$title['name']}}
        </h3>

        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Id:{{$title['id']}}
        </p>

        <div class="flex justify-end">

            <!-- Display Edit and Delete buttons for authenticated users with role Administrator -->
            @if ( $is_admin )

            <div class="text-sm">
                <a href="{{action([App\Http\Controllers\TitleController::class, 'edit'], ['title'=>$title])}}" class="text-sm text-blue-700 underline">[Update]</a>
            </div>
            &nbsp;&nbsp;
            <form class="text-sm font-medium" onsubmit="return confirm('Do you really want to delete? ({{$title['name']}})');" action="{{ action([App\Http\Controllers\TitleController::class, 'destroy'], ['title'=>$title])}}" method="POST">
                @method('DELETE')
                @csrf
                <span class=" text-sm text-gray-700">
                    <button type="submit" class="focus:outline-none text-red-700 underline">[Delete]</button>
                </span>
            </form>
            &nbsp;&nbsp;

            @endif

            <div class="text-sm">
                <a class=" text-blue-700 underline" href="{{ url()->previous() }}">[Back]</a>

            </div>
            &nbsp;
        </div>

    </div>
    <div class="border-t border-gray-400">
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Genre ({{ $title->genres()->get()->count() }}):
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                    @if ($title->genres()->get()->first())

                    @if ( count($title->genres()->get()) > 1)
                    @php $counter = 0; $delim = ""; @endphp

                    @foreach ($title->genres()->get() as $genre )
                    @if ($counter > 0 ) @php $delim = "| ";@endphp @endif

                    {{-- {{$delim}}{{Str::of($genre->name)->trim()}} --}}
                    <a class=" text-blue-700 underline" href="{{ url('/').'/genres/'.$genre->id}}">{{$genre->name}}</a>


                    @php $counter++; @endphp
                    @endforeach
                    @else
                    {{-- {{ $title->genres()->get()->first()->name }} --}}
                    <a class=" text-blue-700 underline" href="{{ url('/').'/genres/'.$title->genres()->get()->first()->id}}">{{$title->genres()->get()->first()->name}}</a>

                    @endif
                    @endif
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Published
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    2020-01-01
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    About
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                </dd>
            </div>
        </dl>
    </div>
</div>
@endif
