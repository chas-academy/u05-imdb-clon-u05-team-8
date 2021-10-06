@php
global $html_title;
$html_title = "Edit Title";
@endphp

@include('header')
<br /><br />



<div class="mt-5  md:mt-0 md:col-span-2">
    <form action="{{ route('titles.update', $title->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="shadow border bg-gray-300 border-gray-600  overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">

                        <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="name" id="name" value="{{ $title->name }}" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">


                    </div>

                </div>
            </div>
            <div class="flex flex-wrap justify-end">

                <button type="submit" class="border py-1 m-1 bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">Save</button>
                {{-- <a class="border py-1  m-1 bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline" href="{{  url()->previous()  }}">Back</a> --}}


            </div>
        </div>
    </form>
</div>

<br />

<div class="bg-gray-300 border border-gray-600 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$title['name']}}
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Id:{{$title['id']}}
        </p>

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

                    {{$delim}}{{Str::of($genre->name)->trim()}}

                    @php $counter++; @endphp
                    @endforeach
                    @else
                    {{ $title->genres()->get()->first()->name }}
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

            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
@include('footer')
