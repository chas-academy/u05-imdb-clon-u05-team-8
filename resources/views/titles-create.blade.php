@php
global $html_title;
$html_title = "Create a Title";
@endphp
@include('header')
<br /><br />
<hr>
<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{ route('titles.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-6 gap-6">

            <div class="col-span-6 sm:col-span-3">
                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">

                <label for="name" class="block font-medium text-gray-700">Title</label>

                <input type="text" name="name" id="name" value="" autocomplete="" placeholder=" Enter Title name" class="border block w-full  border-gray-400 rounded">

            </div>

        </div>

        <div class="flex justify-start content-start align-bottom">


            <button type="submit" class=" bg-green-500 hover:bg-green-700 text-white mt-1 py-1  px-2 rounded">Save</button>
            &nbsp;
            <a class="bg-green-500 hover:bg-green-700 text-white no-underline mt-1 py-1 px-2 rounded" href=" {{ url()->previous() }}">Back</a>

        </div>
    </form>
</div>
@include ('footer')
