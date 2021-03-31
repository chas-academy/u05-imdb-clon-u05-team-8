 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @auth
        <?php $userAuth = Auth::user(); ?>

        @if ( $userAuth->role->name == "Administrator")


<div class="py-12">
    <div class="-mt-8  max-w-7xl mx-auto sm:px-6 lg:px-8">

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
                <form action="/review/{{$review->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <button  name="approve" value="1"
                             class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">
                             Approve review</button>
                 </form>
                <br /><br /><hr /><br />

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

                <form action="/user/{{$u->id}}/permit" method="POST">
                    @csrf
                    @method('PUT')
                    <button name="role_id" value="1"
                            class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">
                            Permit admin rights</button>
                 </form>
                <br /><br /><hr /><br />

            @endforeach

                @if ( $count == 0 )
                    <h4>No users to assign administrative rights to at the moment</h4>
                @endif

                <br />

            </div>
        </div>
    </div>
</div>

        @endif
        <br />

        <div id="pp" class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                @if ( $userAuth->role->name != "Administrator")

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
                            <li>Manage My Account</li>
                            <li>Manage My Reviews</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="lists" class="mt-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border border-green-400">
                        <h1>Manage Lists</h1>
                        <br>

        @foreach ($listings as $list)
            @if( $list->user_id == $userAuth->id)

            <form action="/listing/{{$list->id}}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="oldname" value="{{$list->name}}">
                    <input type="text" name="name" value="{{$list->name}}">&nbsp;
                <button class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-1 px-2 rounded">Rename</button>

            </form>
            <br>
            @endif
        @endforeach

                     </div>
                </div>
            </div>
        </div>
        <br />
        <br />
    @endauth
</x-app-layout>
