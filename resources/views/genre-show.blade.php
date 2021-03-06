<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="zxx">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Genre</title>

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
                        <h1 class="text-2xl">Genre</h1>
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
{{-- <br />
<div class="text-sm">
    <a href="{{action([App\Http\Controllers\GenreController::class, 'create'])}}"
        class="text-sm text-green-700 underline">[Create]</a> new Genre.
</div> --}}
<br />

<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      {{$genre['name']}}
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
     Id:{{$genre['id']}}
    </p>

    <div class="flex justify-end">
{{--
        <div class="text-sm">
            <a href="{{action([App\Http\Controllers\GenreController::class, 'edit'], ['genre'=>$genre])}}"
                class="text-sm text-blue-700 underline">[Update]</a>
        </div>
        &nbsp;&nbsp;
        <form  class="text-sm font-medium"
                onsubmit="return confirm('Do you really want to delete? ({{$genre['name']}})');"
                action="{{ action([App\Http\Controllers\GenreController::class, 'destroy'], ['genre'=>$genre])}}"
                method="POST">
                @method('DELETE')
                @csrf
                <span class=" text-sm text-gray-700">
                    <button type="submit" class="focus:outline-none   text-red-700 underline">[Delete]</button>
                </span>
        </form>
          &nbsp;&nbsp; --}}
        <div class="text-sm">
                <a class=" text-blue-700 underline" href="{{ route('genre.index') }}">[Back]</a>
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
            @php $counter = 0; $delim = "";  @endphp

            @foreach  ($genre->titles()->get() as $title )
                @if ($counter > 0 ) @php $delim = "| ";@endphp @endif

               {{-- {{$delim}}{{Str::of($title->name)->trim()}} --}}
 {{$delim}}<a class=" text-blue-700 underline" href="{{ url('/').'/title/'.$title->id}}">{{$title->name}}</a>

                @php $counter++; @endphp
            @endforeach
        @else
            {{-- {{ $genre->titles()->get()->first()->name }} --}}
            <a class=" text-blue-700 underline" href="{{ url('/').'/title/'.$genre->titles()->get()->first()->id}}">{{$genre->titles()->get()->first()->name}}</a>

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
</div>
<br /><br />


                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
