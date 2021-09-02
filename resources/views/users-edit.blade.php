<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
@guest

@endguest

<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit User</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('menu')
        <div class="container mx-auto px-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <br>
                        <h1 class="text-2xl">Edit User</h1>
<br />
<div class="mt-5  md:mt-0 md:col-span-2">
     <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="shadow border border-green-200  overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 sm:col-span-3">

                <label for="name" class="block text-sm font-medium text-gray-700">User</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" autocomplete=""
                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">


              </div>

            </div>
          </div>
          <div class="flex justify-end">

            <div class="text-sm">
                <button type="submit" class=" focus:outline-none text-green-700 underline">[Save]</button>
            </div>
            &nbsp;&nbsp;
            <div class="text-sm">
                <a class=" text-blue-700 underline" href="{{ route('user.index') }}">[Back]</a>
            </div>
            &nbsp;&nbsp;&nbsp;

          </div>

        </div>
      </form>
    </div>
  </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<br />

<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      {{$user['name']}}
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
     Id:{{$user['id']}}
    </p>

  </div>
  <div class="border-t border-gray-400">
    <dl>
      {{-- <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
         <dt class="text-sm font-medium text-gray-500">
          Genre ({{ $title->genres()->get()->count() }}):
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

    @if ($title->genres()->get()->first())

        @if ( count($title->genres()->get()) > 1)
            @php $counter = 0; $delim = "";  @endphp

            @foreach  ($title->genres()->get() as $genre )
                @if ($counter > 0 ) @php $delim = "| ";@endphp @endif

               {{$delim}}{{Str::of($genre->name)->trim()}}

                @php $counter++; @endphp
            @endforeach
        @else
            {{ $title->genres()->get()->first()->name }}
        @endif
    @endif
        </dd>
      </div> --}}
      {{-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
      </div> --}}

    </dl>
  </div>
</div>
<br /><br />

  {{-- @endforeach --}}

                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
