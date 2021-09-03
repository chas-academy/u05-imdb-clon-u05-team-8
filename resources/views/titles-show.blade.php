@php
global $html_title;
$html_title = "Show Title";
@endphp

@include('header')

<!-- Display Create button for authenticated users with role Administrator -->
@php
global $is_admin;
@endphp

@if ( $is_admin )

<div class="text-sm">
    <a href="{{action([App\Http\Controllers\TitleController::class, 'create'])}}" class="text-sm text-green-700 underline">[Create]</a> new Title.
</div>
@endif

<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
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
                    <button type="submit" class="focus:outline-none   text-red-700 underline">[Delete]</button>
                </span>
            </form>
            &nbsp;&nbsp;

            @endif

            <div class="text-sm">
                <a class=" text-blue-700 underline" href="{{ route('title.index') }}">[Back]</a>
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
                    <a class=" text-blue-700 underline" href="{{ url('/').'/genre/'.$genre->id}}">{{$genre->name}}</a>


                    @php $counter++; @endphp
                    @endforeach
                    @else
                    {{-- {{ $title->genres()->get()->first()->name }} --}}
                    <a class=" text-blue-700 underline" href="{{ url('/').'/genre/'.$title->genres()->get()->first()->id}}">{{$title->genres()->get()->first()->name}}</a>

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
@if(auth()->user())
{{-- Add {{$title['name']}} to Watchlist: --}}

@foreach (auth()->user()->listings()->get() as $listing )
<br />
<form action="/listing/{{$listing->id}}/title/{{$title->id}}" method="POST">
    @csrf
    @method('PUT')
    <button name="listing" value="1" class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">Add to "{{$listing->name}}"</button>
</form>

@endforeach
{{-- <br />
    <form action="/review" method="GET">
        <button name="review" value="1"
            class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">Write a review</button>
    </form> --}}


<br />
<div class="text-base">
    <form action="/reviews/{{$title->id}}" method="POST">
        {{-- <a href="{{action([App\Http\Controllers\ReviewController::class, 'addReview'])}}"
        class="btn bg-green-500 hover:bg-greeen-700 text-white text-base font-bold py-1 px-2 rounded no-underline">Write a review</a> --}}
        {{-- class="text-sm text-green-700 underline">[Write a reviw]</a> --}}

        @csrf

        <button name="listing" value="1" class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">Add Review</button>
    </form>

</div>
@endif

@include('footer')
