<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="zxx">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Titles</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mx-auto px-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <br>
                        <h1 class="text-2xl">Titles</h1>
                        @include('menu')


                        @if(session()->has('message'))
                            <div class="alert alert-success p-6 bg-green-50">
                                {{ session()->get('message') }}
                            </div>
                        @endif


                        {{-- @if ( session('status') == 'success_delete')
                            <div class="p-6 bg-green-50">
                                {{ __('Title successfully deleted')}}

                            </div>
                        @endif --}}
<br />
@php
    $is_admin = false;
@endphp

@auth  <!-- Only check role for Authenticated users -->
@php
    $userAuth = Auth::user();

    if ($userAuth->role->id == 1) {
        $is_admin = true;
    }
@endphp
@endauth
    <!-- Display Create button for authenticated users with role Administrator -->
    @if ( $is_admin )

        <div class="text-sm">
            <a href="{{action([App\Http\Controllers\TitleController::class, 'create'])}}"
                class="text-sm text-green-700 underline">[Create]</a> new Title.
        </div>
        <br />

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
            <a href="{{action([App\Http\Controllers\TitleController::class, 'edit'], ['title'=>$title])}}"
                class="text-sm text-blue-700 underline">[Update]</a>
        </div>
        &nbsp;&nbsp;
        <form  class="text-sm font-medium"
                onsubmit="return confirm('Do you really want to delete? ({{$title['name']}})');"
                action="{{ action([App\Http\Controllers\TitleController::class, 'destroy'], ['title'=>$title])}}"
                method="POST">
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
            @php $counter = 0; $delim = "";  @endphp

            @foreach  ($title->genres()->get() as $genre )
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
<br /><br />


{{-- A form that only shows when logged in, to write a review --}}
<div>
  <h1 class="text-center m-12">Write a review for {{ $title->name }}</h1>
  @if(auth()->user())
  <form class="flex flex-col justify-center" action="/reviews" method="POST">
    @csrf

    <input type="hidden" id="title_id" name="title_id" value="{{ $title->id }}">
    <textarea class="w-1/2 mx-auto px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" name="body" rows="4" cols="100" type="text" placeholder="Enter review"></textarea>

    <button class="w-36 mx-auto mt-4 bg-blue-600 text-gray-200 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none" type="submit">Submit</button>

  </form>
</div>
@else
<h3 class="text-center m-12">To write a review about {{ $title->name }}, you have to <a class=" text-blue-700 underline" href="http://u05.test/register">Register</a> or be <a class=" text-blue-700 underline" href="http://u05.test/login">Logged in</a></h3>
@endif


                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
