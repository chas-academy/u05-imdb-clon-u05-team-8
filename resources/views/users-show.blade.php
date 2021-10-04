@php
global $is_admin;
$is_admin = false;

global $html_title;
$html_title = "Show User";
@endphp

@include('header')
<br /><br />



<!-- Display Create button for authenticated users with role Administrator -->
@if ( $is_admin )
{{--
<div class="text-sm">
    <a href="{{action([App\Http\Controllers\UserController::class, 'create'])}}" class="text-sm text-green-700 underline">[Create]</a> new User.
</div> --}}

@endif
<div class="bg-gray-300 border border-gray-600 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$user['name']}}
        </h3>

        <p class="mt-1 max-w-2xl text-sm text-gray-400">
            Id:{{$user['id']}}
        </p>

        <div class="flex justify-end">

            <!-- Display Edit and Delete buttons for authenticated users with role Administrator -->
            @if ( $is_admin )


            <a href="{{action([App\Http\Controllers\UserController::class, 'edit'], ['user'=>$user])}}" class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">Update</a>




            <form class="" onsubmit="return confirm('Do you really want to delete? ({{$user['name']}})');" action="{{ action([App\Http\Controllers\UserController::class, 'destroy'], ['user'=>$user])}}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit" class="border py-1 m-1  bg-red-500 hover:bg-red-700 text-white  px-2 rounded no-underline">Delete</button>


            </form>

            @endif


            <a class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline" href="{{  url()->previous()  }}">Back</a>



        </div>
    </div>
</div>
@include('footer')
