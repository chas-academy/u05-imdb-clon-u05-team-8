@php
global $html_title;
$html_title = "Titles";
@endphp

@include('header')
<br /><br />

@php
global $is_admin;
@endphp

@foreach($titles as $title)

<div class="bg-gray-400 border border-gray-200 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$title['name']}}</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Id: {{$title['id']}}<br />
            Release date: {{$title->publ_date}}
        </p>

        <div class="flex flex-wrap justify-end">


            <a href="{{action([App\Http\Controllers\TitleController::class, 'show'], ['title'=>$title])}}" class="border py-1 m-1 bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">Read</a>



            <!-- Display Edit and Delete buttons for authenticated users with role Administrator -->

            @if ( $is_admin )

            <a href="{{action([App\Http\Controllers\TitleController::class, 'edit'], ['title'=>$title])}}" class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">Update</a>

            <form class="" onsubmit="return confirm('Do you really want to delete? ({{$title['name']}})');" action="{{ action([App\Http\Controllers\TitleController::class, 'destroy'], [$title])}}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit" class="border py-1 m-1 bg-red-500 hover:bg-red-700 text-white  px-2 rounded no-underline">Delete</button>


            </form>
            @endif
            <a class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline" href="{{  url()->previous()  }}">Back</a>


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
                    {{$delim}}<a class=" text-blue-700 underline" href="{{ url('/').'/genres/'.$genre->id}}">{{$genre->name}}</a>

                    @php $counter++; @endphp
                    @endforeach
                    @else
                    {{-- {{ $title->genres()->get()->first()->name }} --}}
                    <a class=" text-blue-700 underline" href="{{ url('/').'/genres/'.$title->genres()->get()->first()->id}}">{{$title->genres()->get()->first()->name}}</a>

                    @endif
                    @endif
                </dd>
            </div>

            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    About:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                </dd>
            </div>

        </dl>
    </div>
</div>
<br /><br />
@endforeach
@include('footer')
