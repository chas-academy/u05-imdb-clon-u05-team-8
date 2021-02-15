<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>

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
                        <h1 class="text-2xl">Users</h1>
                        @include('menu')
                        <!-- hidden fixed top-0 right-0 px-4 py-2 sm:block -->
                        {{-- @if (Route::has('login'))
                            <div class="fixed top-0 border-l border-b border-bottom border-green-500  bg-green-200 right-0 px-4 py-2">
                            <a class="pr-4 text-sm  text-gray-700 underline"  href="{{ url('/') }}">Home</a>
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                @endauth
                            </div>

                        @endif
                        <br> --}}

@foreach($users as $user)


<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      {{$user['name']}}
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
     Id:{{$user['id']}}
    </p>

    {{-- <div class="flex justify-end">


        <div class="text-sm">
            <a href="{{action([App\Http\Controllers\UserController::class, 'edit'], ['user'=>$user])}}"
             class="text-sm text-blue-700 underline">[Update]</a>
        </div>
        &nbsp;&nbsp;
        <form  class="text-sm font-medium"
                action="{{ action([App\Http\Controllers\UserController::class, 'destroy'], ['user'=>$user])}}"
                method="POST">
                @method('DELETE')
                @csrf
                <span class=" text-sm text-gray-700">
                    <button type="submit" class="focus:outline-none   text-red-700 underline">[Delete]</button>
                </span>
        </form>

    </div> --}}

  </div>
  <div class="border-t border-gray-400">
    <dl>
      <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{$user['email']}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
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
  @endforeach

{{--
                        <div class="shadow overflow-hidden border-b border-gray-300 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-blue-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                        Id
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                        Name
                                    </th>
                                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                        Email
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$user['id']}}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$user['name']}}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{$user['email']}}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
