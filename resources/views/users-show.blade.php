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

<div class="text-sm">
    <a href="{{action([App\Http\Controllers\UserController::class, 'create'])}}" class="text-sm text-green-700 underline">[Create]</a> new User.
</div>

@endif
<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$user['name']}}
        </h3>

        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Id:{{$user['id']}}
        </p>

        <div class="flex justify-end">

            <!-- Display Edit and Delete buttons for authenticated users with role Administrator -->
            @if ( $is_admin )

            <div class="text-sm">
                <a href="{{action([App\Http\Controllers\UserController::class, 'edit'], ['user'=>$user])}}" class="text-sm text-blue-700 underline">[Update]</a>
            </div>
            &nbsp;&nbsp;

            <form class="text-sm font-medium" onsubmit="return confirm('Do you really want to delete? ({{$user['name']}})');" action="{{ action([App\Http\Controllers\UserController::class, 'destroy'], ['user'=>$user])}}" method="POST">
                @method('DELETE')
                @csrf
                <span class=" text-sm text-gray-700">
                    <button type="submit" class="focus:outline-none   text-red-700 underline">[Delete]</button>
                </span>
            </form>
            &nbsp;&nbsp;
            @endif

            <div class="text-sm">
                <a class=" text-blue-700 underline" href="{{ route('users.index') }}">[Back]</a>
            </div>
            &nbsp;
        </div>
    </div>
</div>
@include('footer')
