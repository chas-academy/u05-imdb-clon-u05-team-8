@php
global $is_admin;
$is_admin = false;

global $html_title;
$html_title = "Users";
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

@foreach($users as $user)



<div class="bg-gray-300 border border-gray-600 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$user['name']}}
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Id:{{$user['id']}}&nbsp; ({{$user->role->name}})
        </p>
        <div class="flex flex-wrap justify-end">

            @if ( $is_admin )

            <!-- Display Permit or Revoke  admin rights buttons  -->

            @if ($user->role->id == 1)
            <!-- 1 = Admin -->

            <form action="/users/{{$user->id}}/revoke" method="POST">
                @csrf
                @method('PUT')
                <button name="role_id" value="1" class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">


                    Revoke admin rights</button>
            </form>

            @endif

            @if ($user->role->id == 2)
            <!-- 2 = Regular User -->

            <form action="/users/{{$user->id}}/permit" method="POST">
                @csrf
                @method('PUT')
                <button name="role_id" value="1" class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">


                    Permit admin rights</button>
            </form>

            @endif
            @endif

            <a href="{{action([App\Http\Controllers\UserController::class, 'show'], ['user'=>$user])}}" class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">Read</a>



            <!-- Display Edit and Delete buttons for authenticated users with role Administrator -->

            @if ( $is_admin )


            <a href="{{action([App\Http\Controllers\UserController::class, 'edit'], ['user'=>$user])}}" class="border py-1 m-1  bg-green-500 hover:bg-green-700 text-white  px-2 rounded no-underline">Update</a>



            <form class="" onsubmit="return confirm('Do you really want to delete? ({{$user['name']}})');" action="{{ action([App\Http\Controllers\UserController::class, 'destroy'], ['user'=>$user])}}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit" class="border py-1 m-1  bg-red-500 hover:bg-red-700 text-white  px-2 rounded no-underline">Delete</button>


            </form>

            @endif
            <!-- end if admin -->

        </div>
    </div>
    <div class="border-t border-gray-400">
        <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Email:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$user['email']}}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    About:
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Created titles ({{ $user->titles()->get()->count()}}):
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    @if ($user->titles()->get()->first())

                    @if ( count($user->titles()->get()) > 1)
                    @php $counter = 0; $delim = ""; @endphp

                    @foreach ($user->titles()->get() as $title )
                    @if ($counter > 0 ) @php $delim = "| ";@endphp @endif

                    {{-- {{$delim}}{{Str::of($title->name)->trim()}} --}}
                    {{$delim}}<a class=" text-blue-700 underline" href="{{ url('/').'/titles/'.$title->id}}">{{$title->name}}</a>

                    @php $counter++; @endphp
                    @endforeach
                    @else
                    {{-- {{ $user->titles()->get()->first()->name }} --}}
                    <a class=" text-blue-700 underline" href="{{ url('/').'/titles/'.$user->titles()->get()->first()->id}}">{{$user->titles()->get()->first()->name}}</a>

                    @endif
                    @endif
                </dd>
            </div>



        </dl>
    </div>
</div>
<br /><br />
@endforeach
@include('footer')
