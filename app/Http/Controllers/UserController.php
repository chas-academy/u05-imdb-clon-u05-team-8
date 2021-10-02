<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo(User::all());
        $user = Auth::user();
        if ($user) {
            if ($user->role()->get()->first()->id == 1) { // 1 = Administrator

                $users = User::all();
                return view('users', compact('users'));
            }
            else{
                return back();
            }
        }
        else{
              return back();
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ($user) {
            if ($user->role()->get()->first()->id == 1) {  // 1 = Administrator

                $user = User::all();

                return view('users-create', compact('user'));
            } else {
                return back()->with('message', "You have to have administrative rights to create new Users");
            }
        } else {
            return back()->with('message', "You have to have be logged in to create new Users");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email:rfc,dns',
             'password' => 'required',
        ]);


        $user = Auth::user();

        if ($user) {
            if ($user->role()->get()->first()->id == 1) {  // 1 = Administrator
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->role_id = 2;

                               // $user->user_id = Auth::user()->id;
                $user->save();

                return redirect()->route('users.index')
                ->with('message', $request->input('name').' - created.');
            } else {
                return redirect()->route('users.index')
                ->with('message', "You have to be logged in with administrative rights when creating users");
            }
        } else {
            return back()->with('message', "You have to have be logged in to store users");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
         return view('users-show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $userAuth = Auth::user();

        if ($userAuth) {
            if ($userAuth->role()->get()->first()->id == 1) {  // 1 = Administrator
                return view('users-edit', compact('user'));
            } else {
                return redirect()->route('users.index')
                ->with('message', "You have to be logged in with administrative rights to edit Users");
            }
        } else {
            return back()->with('message', "You have to have be logged in to edit Users");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $user->update($request->all());

        if (strpos($request->server('HTTP_REFERER'), 'dashboard') !== false) {

               return redirect()->route('dashboard')
               ->with('message', "User \"".$request['oldname']."\" renamed to: \"" .$user->name. "\".");
        }
        else{
            return redirect()->route('users.index')
                            ->with('message', $user->name.' - updated.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user )
    {
        $userA = Auth::user();

        if ($userA) {
            if ($userA->role()->get()->first()->id == 1) {  // 1 = Administrator
                User::destroy($user->id);

                return redirect()->route('users.index')
                            ->with('message', $user->name.' - removed.');
            } else {
                return redirect()->route('users.index')
                ->with('message', "You have to be logged in with administrative rights when deleting records");
            }
        } else {
            return back()->with('message', "You have to have be logged in to delete Users");
        }
    }
    // Return all Users
    public static function allUsers()
    {
        return User::all();
    }


    public function permit(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'role_id' => 'required',
        ]);

        $user->role_id = 1;
        $user->save();

        return redirect()->route('dashboard')
                ->with('message', "User \"".$user->name.
                "\" - has been assigned administrative privileges.");
    }
}
