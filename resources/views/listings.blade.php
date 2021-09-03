@php
global $html_title;
$html_title = "Lists";
@endphp

@include('header')


<!-- Display Create button for authenticated users  -->
@if ( Auth::user() )

<div class="text-sm">
    <a href="{{action([App\Http\Controllers\ListingController::class, 'create'])}}" class="text-sm text-green-700 underline">[Create]</a> new Watchlist.
</div>
<br />

@endif
@foreach($listings as $list)

<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$list->name}}</h3>
        {{--<p class="mt-1 max-w-2xl text-sm text-gray-500">

            Id: {{$list->id}}<br />
        User: {{$list->user()->get()->first()->name}}
        </p> --}}
        <br />
        @php $counter=1 @endphp
        @foreach($list->listitems()->get() as $listitem)

        {{$counter++}} : <a class=" text-blue-700 underline" href="{{ url('/').'/title/'.$listitem->title()->get()->first()->id}}">{{$listitem->title()->get()->first()->name}}</a> <br />

        @endforeach
        @if ( $counter==0)
        No movies in this list.
        @endif
    </div>

</div>
<br />

@endforeach
@include('footer')
