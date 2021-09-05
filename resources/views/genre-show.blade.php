@php
global $is_admin;
$is_admin = false;

global $html_title;
$html_title = "Genres";
@endphp

@include('header')
<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$genre['name']}}
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Id:{{$genre['id']}}
        </p>

        <div class="flex justify-end">

            <div class="text-sm">
                <a class=" text-blue-700 underline" href="{{ route('genres.index') }}">[Back]</a>
            </div>
            &nbsp;
        </div>

    </div>
    <div class="border-t border-gray-400">
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Titles ({{ $genre->titles()->get()->count() }}):
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                    @if ($genre->titles()->get()->first())

                    @if ( count($genre->titles()->get()) > 1)
                    @php $counter = 0; $delim = ""; @endphp

                    @foreach ($genre->titles()->get() as $title )
                    @if ($counter > 0 ) @php $delim = "| ";@endphp @endif

                    {{-- {{$delim}}{{Str::of($title->name)->trim()}} --}}
                    {{$delim}}<a class=" text-blue-700 underline" href="{{ url('/').'/titles/'.$title->id}}">{{$title->name}}</a>

                    @php $counter++; @endphp
                    @endforeach
                    @else
                    {{-- {{ $genre->titles()->get()->first()->name }} --}}
                    <a class=" text-blue-700 underline" href="{{ url('/').'/titles/'.$genre->titles()->get()->first()->id}}">{{$genre->titles()->get()->first()->name}}</a>

                    @endif
                    @endif
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Genre created
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
    @include('footer')
