@php
global $html_title;
$html_title = "Reviews";
@endphp

@include('header')

@if ($reviews->count())
@foreach ($reviews as $review)
@if($review->approve == true)
<div class="border-t border-gray-400">
    <dl>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="lg:text-2xl text-sm font-medium text-gray-500">
                Movie:
            </dt>
            <dd class="mt-1 lg:text-2xl text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $review->title->name }}&nbsp;({{ $review->title->publ_date }})
            </dd>
        </div>

        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="lg:text-2xl text-sm font-medium text-gray-500">
                {{$review->user->name}}
                <p class="text-sm text-gray-500 mt-8">
                    Date: {{ $review->created_at->format('Y-m-d')}}
                </p>
            </dt>
            <dd class="mt-1 lg:text-2xl text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                {{$review->body}}

            </dd>
        </div>
    </dl>
</div>
<br />
<br />
@endif
@endforeach
@else
<p>
    There are no reviews yet
</p>
@endif
@include('footer')
