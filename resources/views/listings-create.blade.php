@php
global $html_title;
$html_title = "Create List";
@endphp

@include('header')
<br /><br />


<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{ route('listings.store') }}" method="POST">
        @csrf

        <div class="shadow border border-gray-300 overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">
                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">

                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" value="" autocomplete="" placeholder="Enter name of listing" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">


                    </div>

                </div>
            </div>
            <div class="flex justify-start content-start align-bottom">

                &nbsp;

                <button type="submit" class=" bg-green-500 hover:bg-green-700 text-white mt-1 py-1  px-2 rounded">Save</button>
                &nbsp;

                <a class="bg-green-500 hover:bg-green-700 text-white no-underline mt-1 py-1 px-2 rounded" href=" {{ url()->previous() }}">Back</a>



            </div>
            <br />
        </div>
    </form>
</div>
@include('footer');
