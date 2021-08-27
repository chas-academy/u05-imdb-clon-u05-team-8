<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}

<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Review</title>

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
                        <h1 class="text-2xl">Create Review</h1>
                        @include('menu')

                        @if(session()->has('message'))
                            <div class="alert alert-success p-6 bg-green-50">
                                {{ session()->get('message') }}
                            </div>
                        @endif

<br />
{{-- <div class="mt-5 md:mt-0 md:col-span-2">
     <form action="{{ route('reviews.store') }}" method="POST">
        @csrf

        <div class="shadow border border-green-200 overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 sm:col-span-3">

                <label for="name" class="block text-sm font-medium text-gray-700">Review</label>
                <textarea cols="300"  rows="15" name="name" id="name" value="" autocomplete="" placeholder="Enter review"
                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">

              </textarea>
              </div>

            </div>
          </div>
          <div class="flex justify-end">

            <div class="text-sm">
                <button type="submit" class=" focus:outline-none text-green-700 underline">[Save]</button>
            </div>
            &nbsp;&nbsp;
            <div class="text-sm">
                <a class=" text-blue-700 underline" href="{{ route('title.index') }}">[Back]</a>
            </div>
            &nbsp;

          </div>

        </div>
      </form>
    </div>--}}


{{--
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

<div>
  <h1 class="text-center m-12">Write a review for {{ $title->id }}</h1>
  @if(auth()->user())
  <form class="flex flex-col justify-center" action="/reviews" method="POST">
    @csrf

    <input type="hidden" id="title_id" name="title_id" value="{{ $title->id }}">
    <textarea class="w-1/2 mx-auto px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" name="body" rows="4" cols="100" type="text" placeholder="Enter review"></textarea>

    <button class="w-36 mx-auto mt-4 bg-blue-600 text-gray-200 text-lg rounded hover:bg-blue-500 px-6 py-3 focus:outline-none" type="submit">Submit</button>

  </form>
</div>
@else
<h3 class="text-center m-12">To write a review about {{ $title->id }}, you have to <a class=" text-blue-700 underline" href="http://u05.test/register">Register</a> or be <a class=" text-blue-700 underline" href="http://u05.test/login">Logged in</a></h3>
@endif
<br />


                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
