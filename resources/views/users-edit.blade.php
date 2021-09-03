@php
global $html_title;
$html_title = "Edit User";
@endphp

@include('header')


<div class="mt-5  md:mt-0 md:col-span-2">
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="shadow border border-green-200  overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">

                        <label for="name" class="block text-sm font-medium text-gray-700">User</label>
                        <input type="text" name="name" id="name" value="{{ $user->name }}" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">
                    </div>
                </div>
            </div>
            <div class="flex justify-end">

                <div class="text-sm">
                    <button type="submit" class=" focus:outline-none text-green-700 underline">[Save]</button>
                </div>
                &nbsp;&nbsp;
                <div class="text-sm">
                    <a class=" text-blue-700 underline" href="{{ route('user.index') }}">[Back]</a>
                </div>
                &nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </form>
</div>

<br />

<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{$user['name']}}
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Id:{{$user['id']}}
        </p>
    </div>
</div>
@include ('footer');
