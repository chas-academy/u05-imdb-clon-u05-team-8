 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @auth
        <?php $user = Auth::user(); ?>
        @if ( $user->role->name == "Administrator")
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <div class="bg-white my-4 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6  border border-blue-400">
                         <h1 class="text-2xl">Admin panels:</h1>
                            <br />
                                {{$user->name}} - You're logged in as {{$user->role->name}}
                            <br />
                                User have admin rights - Admin panels goes here...
                            <br />
                        </div>
                    </div>
                    <div class="bg-white e my-4 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6  border border-blue-200">
                            <h2 class="text-xl">Approve Reviews:</h2>
                                <br />
                        @foreach ($reviews as $review)

                            Review of "{{$review->title()->get()->first()->name}}" by {{$review->user()->get()->first()->name}}
                            <br />
                            <textarea>{{$review->body}}</textarea><br>
                            <button class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">Approve</button>
                            <br /><br /><hr /><br />
                         @endforeach
                                <br />
                            </div>
                     </div>
                    <div class="bg-white e my-4 overflow-hidden shadow-sm sm:rounded-lg">

                        <div class="p-6  border border-blue-200">

                                <br />
                                @foreach ($titles as $t)
                            {{-- User: {{$review->user()->get()->first()->name}}<br />
                            Title: {{$review->title()->get()->first()->name}}<br /> --}}
                            Title: {{$t->name}}<br>
                            <br /><br />
                         @endforeach
                                <br />
                        </div>

                    </div>
                </div>
            </div>
        @endif

        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        Logged in regular User's panels goes here: <br /><br />
                        <ul>
                            <li>Manage My Account</li>
                            <li>Manage MyLists</li>
                            <li>Manage My Reviews</li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>

    @endauth
</x-app-layout>
