@php
global $html_title;
$html_title = "Create a Title";
@endphp
@include('header')
<br /><br />
<hr>
<br />
<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{ route('titles.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-6 gap-6">

            <div class="col-span-6 sm:col-span-3">
                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">

                <label for="name" class="block  text-gray-700">Title</label>

                <input type="text" name="name" id="name" value="" autocomplete="" placeholder=" Enter Title name" class="border block w-full  border-gray-400 rounded">

            </div>


            <select class="border rounded col-span-3 sm:col-span-2" name="genres" id="genres">



                <option disabled selected>genre</option>
                @foreach($genres as $genre)

                <option value="{{$genre['id']}}"> {{$genre['name']}}</option>

                @endforeach
            </select>

        </div>

        <div class="flex justify-start content-start align-bottom">


            <button type="submit" class=" bg-green-500 hover:bg-green-700 text-white mt-1 py-1  px-2 rounded">Save</button>
            &nbsp;
            <a class="bg-green-500 hover:bg-green-700 text-white no-underline mt-1 py-1 px-2 rounded" href=" {{ url()->previous() }}">Back</a>

        </div>
    </form>
</div>
@include ('footer')
