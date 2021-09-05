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

@endif

@foreach($listings as $list)
{{-- <div class="bg-green-400 border border-gray-200 min-w-full rounded-md ">

    <div class="px-4 py-5 sm:px-6 w-full  bg-red-800"> --}}


<div class="border w-80 mx-auto bg-red-700">

    <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{$list->name}}
    </h3>
    <br />
    @php $counter=0 @endphp
    @foreach($list->listitems()->get() as $listitem)

    {{++$counter}} : <a class=" text-blue-700 underline" href="{{ url('/').'/title/'.$listitem->title()->get()->first()->id}}">{{$listitem->title()->get()->first()->name}}</a>
    <br />

    @endforeach
    @if ( $counter==0)
    No movies in this list.
    @endif

</div>
{{-- </div>
</div> --}}
<br />
@endforeach
@include('footer')
