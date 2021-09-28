@php
global $html_title;
$html_title = "Create Title";
@endphp
@include('header')
<br /><br />

<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{ route('titles.store') }}" method="POST">
        @csrf

        <div class="shadow border border-green-200 overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">

                        <label for="name" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="name" id="name" value="" autocomplete="" placeholder="Enter Title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">

                    </div>

                </div>
            </div>
            <div class="flex justify-end">

                <div class="text-sm">
                    <button type="submit" class=" focus:outline-none text-green-700 underline">[Save]</button>
                </div>
                &nbsp;&nbsp;
                <div class="text-sm">
                    <a class=" text-blue-700 underline" href="{{ route('titles.index') }}">[Back]</a>
                </div>
                &nbsp;

            </div>
        </div>
    </form>
</div>
@include ('footer')
