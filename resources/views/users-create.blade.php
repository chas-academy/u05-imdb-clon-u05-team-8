@php
global $html_title;
$html_title = "Create User";
@endphp

@include('header')
<br /><br />

<hr>
<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{ route('users.store') }}" method="POST">
        @csrf


        <div class="grid grid-cols-6 gap-6">

            <div class="col-span-6 sm:col-span-3">

                <label for="name" class="block text-sm font-medium text-gray-700">User name</label>
                <input type="text" name="name" id="name" value="" autocomplete="" placeholder="Enter User name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">
                <br>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" name="email" id="email" value="" autocomplete="" placeholder="Enter User email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">
                <br>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="text" name="password" id="password" value="" autocomplete="" placeholder="Enter User password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded">


            </div>

        </div>
</div>
<div class="flex justify-start content-start align-bottom">


    <button type="submit" class=" bg-green-500 hover:bg-green-700 text-white mt-1 py-1  px-2 rounded">Save</button>



    &nbsp;&nbsp;

    <a class="bg-green-500 hover:bg-green-700 text-white no-underline mt-1 py-1 px-2 rounded" href=" {{ url()->previous() }}">Back</a>





</div>


</form>
</div>
@include ('footer')
