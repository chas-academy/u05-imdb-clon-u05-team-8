<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Genres</title>

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
                        <h1 class="text-2xl">Genres</h1>
                        @include('menu')


@foreach($genres as $genre)


<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      {{$genre['name']}}
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
     Id:{{$genre['id']}}
    </p>

  </div>
  <div class="border-t border-gray-400">
    <dl>


      <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Titles ({{ $genre->titles()->get()->count()}}):
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


    </dl>
  </div>
</div>
<br /><br />
  @endforeach


                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
