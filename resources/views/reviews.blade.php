
<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reviews</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <nav class=" max-w-5xl mx-auto mt-16 rounded-full py-3 bg-gray-800">
        <ul class="flex items-center justify-between ">
            <li class="lg:mr-14 mr-2 ml-2 lg:text-3xl md:text-2xl text-xs">
            <a class="text-gray-300 hover:underline hover:text-gray-200" href="/">Home</a>
            </li>
            <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
            <a class="text-gray-300 hover:underline hover:text-gray-200" href="/reviews">Reviews</a>
            </li>
            <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
            <a class="text-gray-300 hover:underline hover:text-gray-200" href="#">New Movies</a>
            </li>
            <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
            <a class="text-gray-300 hover:underline hover:text-gray-200" href="#">Top Movies</a>
            </li>
            <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
            <a class="text-gray-300 hover:underline hover:text-gray-200" href="#">Watchlist</a>
            </li>
        </ul>
    </nav>




        <div class="container mx-auto px-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <br>
                        <h1 class="text-center lg:text-5xl text-2xl md:mb-56 mb-28 md:mt-40 mt-28">Reviews</h1>
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


@if ($reviews->count())
@foreach ($reviews as $review)
  @if($review->approve === 1)
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
          <p class="text-sm text-gray-500 mt-8">Date: {{ $review->created_at->format('Y-m-d')}}</p>
        </dt>
        <dd class="mt-1 lg:text-2xl text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{-- {{ $review->body }} --}}           
              {{$review->body}}          
        </dd>
      </div>

    </dl>
  </div><br /><br />
    @endif
  @endforeach
  <div>

  @else
      <p>There are no reviews yet</p>
  @endif
</div>
<br /><br />


                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
