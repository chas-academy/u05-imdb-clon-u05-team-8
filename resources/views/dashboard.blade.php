<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    @auth
    <?php $userAuth = Auth::user(); ?>
    @endauth

    @if ( $userAuth->role->id == 1)
    <!-- 1 = Administrator -->

    {{-- <div class="py-12"> --}}
    <div class="mt-6 max-w-5xl mx-auto sm:px-6 lg:px-8">

        @if(session()->has('message'))
        <div class="alert alert-success p-6 bg-green-50">
            {{ session()->get('message') }}
        </div>
        @endif


        <div class="bg-white my-6 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6  border border-red-400">
                <h1>Admin panels</h1>
                <br />
                {{$userAuth->name}} - You're logged in with role "{{$userAuth->role->name}}"
                <br />
                <p>You have admin rights - Admin panels follows...</p>
                <br />
                <p>{{$userAuth->name}}'s personal panels <a href="#pp">here</a></p>

            </div>
        </div>

        <div class="bg-white e myt-6 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6  border border-red-400">
                <h2>Add new users</h2>
                <br />


                <div class="text-sm">
                    <a href="{{action([App\Http\Controllers\UserController::class, 'create'])}}" class="text-sm text-green-700 underline">[Create]</a> new User.
                </div>
                <br />
            </div>

        </div>

        <div class="bg-white e my-6 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6  border border-red-400">
                <h2>Approval of reviews</h2>
                <br />

                @php $count = 0; @endphp

                @foreach ($reviews as $review)

                @if ( $review->approve == 1 )
                @continue
                @endif

                @php $count++ @endphp

                @if ( $count == 1 )
                <h4>List of all non-approved reviews below</h4>
                <br>
                @endif

                Review of "{{$review->title()->get()->first()->name}}"
                by {{$review->user()->get()->first()->name}}
                <br />
                <textarea>{{$review->body}}</textarea><br>
                <form action="/reviews/{{$review->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <button name="approve" value="1" class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">
                        Approve review</button>
                </form>
                <br /><br />
                <hr /><br />

                @endforeach

                @if ( $count == 0 )
                <h4>No reviews to approve at the moment</h4>
                @endif

                <br />
            </div>
        </div>

        <div class="bg-white e myt-6 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6  border border-red-400">
                <h2>Assign administrator privileges</h2>
                <br />

                @php $count = 0; @endphp

                @foreach ($users as $u)

                @if ( $u->role_id == 1 )
                @continue
                @endif

                @php $count++ @endphp

                @if ( $count == 1 )
                <h4>List of all non-admin users</h4>
                <br>
                @endif

                User: {{$u->name}}
                <br />

                <form action="/users/{{$u->id}}/permit" method="POST">
                    @csrf
                    @method('PUT')
                    <button name="role_id" value="1" class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">
                        Permit admin rights</button>
                </form>
                <br /><br />
                <hr /><br />

                @endforeach

                @if ( $count == 0 )
                <h4>No users to assign administrative rights to at the moment</h4>
                @endif

                <br />

            </div>
        </div>
    </div>
    @endif
    <!-- Personal panels starts here -->
    <div id="pp" class="max-w-5xl mx-auto mt-6">


        <div class="  sm:px-6 lg:px-8">


            @if ( $userAuth->role->id != 1)

            @if(session()->has('message'))
            <div class="alert alert-success p-6 bg-green-50">
                {{ session()->get('message') }}
            </div>
            <br>
            @endif
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border border-green-400">

                    <h1>Personal panel</h1>
                    <br>
                    Welcome {{$userAuth->name}}!
                    <br><br>
                    Logged in User's personal panels goes here: <br /><br />
                    <ul class="list-disc">
                        <li>Manage My Account (not implemented)</li>
                        <li>Manage My Reviews (not implemented)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Manage Lists -->
    <div id="lists" class="mt-6 max-w-5xl mx-auto ">

        <div class="sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border border-green-400">

                    <h1>Manage Lists</h1>
                    <br>
                    @php $counter=0 @endphp

                    @foreach ($listings as $list)
                    @if( $list->user_id == $userAuth->id)
                    <hr /><br />
                    @php $counter++ @endphp


                    <!--  Rename List -->

                    <form id="{{$list->id}}" class="my-1" action="/listings/{{$list->id}}" method="POST">

                        @csrf
                        @method('PUT')

                        <input type="hidden" name="oldname" value="{{$list->name}}">
                        <input type="text" name="name" value="{{$list->name}}">
                        <button class="my-1 bg-green-500 hover:bg-green-700 text-white  py-1 px-2 rounded">Rename</button>

                    </form>

                    <!--  Delete List (and all list items) -->
                    <form id="remove-{{$list->id}}" action="{{ action([App\Http\Controllers\ListingController::class, 'destroy'], ['listing'=>$list])}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('Do you really want to delete this list? ({{$list->name}})');" class="mb-1 bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">Delete List</button>
                    </form>

                    <!--  Delete Listitem -->
                    <ul class="list-disc">

                        @foreach ($list->listitems()->get() as $item)

                        @php $name = $item->title()->get()->first()->name @endphp
                        <form id="{{$item->id}}" class="text-sm font-medium" onsubmit="return confirm('Do you really want to delete this list item? ({{$name}})');" action="{{ action([App\Http\Controllers\ListitemController::class, 'destroy'], ['listitem'=>$item])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <li>
                                <span class="text-sm text-gray-700">
                                    {{$item->title()->get()->first()->name}}
                                    <button type="submit" class="mx-1 focus:outline-none text-red-500  hover:bg-red-700 underline">[Delete]</button>
                                </span>
                            </li>
                        </form>

                        @endforeach
                        <br>
                    </ul>

                    @endif
                    @endforeach
                    @if ( $counter==0)
                    No lists to manage for logged in user.
                    @endif

                </div>
            </div>
        </div>
        <br />
    </div>
    <br />
</x-app-layout>
