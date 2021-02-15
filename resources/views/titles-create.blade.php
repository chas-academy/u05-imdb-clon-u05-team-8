<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}

<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Title</title>

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
                        <h1 class="text-2xl">Create Title</h1>
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
<div class="mt-5 md:mt-0 md:col-span-2">
     <form action="{{ route('title.store') }}" method="POST">
        @csrf

        <div class="shadow border border-green-200 overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">

              <div class="col-span-6 sm:col-span-3">

                <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="name" id="name" value="" autocomplete="" placeholder="Enter Title"
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
                <a class=" text-blue-700 underline" href="{{ route('title.index') }}">[Back]</a>
            </div>
            &nbsp;

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

    {{-- <form action="{{ route('title.update', $title->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="name" value="{{ $title->name }}" class="form-control" placeholder="Title">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form> --}}
{{-- @endsection --}}
{{-- @foreach($titles as $title) --}}
<br />


  {{-- @endforeach --}}

                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
