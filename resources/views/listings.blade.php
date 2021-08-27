<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Watchlists</title>

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
                        <h1 class="text-2xl">Watchlists</h1>
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
    <a href="{{action([App\Http\Controllers\ListingController::class, 'create'])}}"
        class="text-sm text-green-700 underline">[Create]</a> new Title.
</div> --}}
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

<!-- Display Create button for authenticated users  -->
@if (  Auth::user() )

<div class="text-sm">
    <a href="{{action([App\Http\Controllers\ListingController::class, 'create'])}}"
        class="text-sm text-green-700 underline">[Create]</a> new Watchlist.
</div>
<br />

@endif
@foreach($listings as $list)


    <div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$list->name}}</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            {{-- Id: {{$list->id}}<br />
            User: {{$list->user()->get()->first()->name}}
            </p> --}}
                <br />
                @php $counter=1 @endphp
                @foreach($list->listitems()->get()  as $listitem)

                     {{$counter++}} : <a class=" text-blue-700 underline"
                                   href="{{ url('/').'/title/'.$listitem->title()->get()->first()->id}}">{{$listitem->title()->get()->first()->name}}</a>   <br />

                @endforeach
                @if (  $counter==0)
                    No movies in this list.
                @endif
        </div>

    </div>
<br />
@endforeach

                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
