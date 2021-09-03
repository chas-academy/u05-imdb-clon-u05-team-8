<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::all();
        return view('titles', compact('titles'));
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

                $title = Title::all();

                return view('titles-create', compact('title'));
            } else {
                return back()->with('message', "You have to have administrative rights to create new Titles");
            }
        } else {
            return back()->with('message', "You have to have be logged in to create new Titles");
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

        ]);



        $user = Auth::user();

        if ($user) {
            if ($user->role()->get()->first()->id == 1) {  // 1 = Administrator
                $title = new Title;
                $title->name = $request->name;
                $title->user_id = Auth::user()->id;
                $title->save();

                return redirect()->route('title.index')
                ->with('message', $request->input('name').' - created.');
            } else {
                return redirect()->route('title.index')
                ->with('message', "You have to be logged in with administrative rights when creating records");
            }
        } else {
            return back()->with('message', "You have to have be logged in to store Titles");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        return view('titles-show', compact('title'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        $user = Auth::user();

        if ($user) {
            if ($user->role()->get()->first()->id == 1) {  // 1 = Administrator
                return view('titles-edit', compact('title'));
            } else {
                return redirect()->route('title.index')
                ->with('message', "You have to be logged in with administrative rights to edit Titles");
            }
        } else {
            return back()->with('message', "You have to have be logged in to edit Titles");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $title->update($request->all());

        return redirect()->route('title.index')
                            ->with('message', $title->name.' - updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        $user = Auth::user();

        if ($user) {
            if ($user->role()->get()->first()->id == 1) {  // 1 = Administrator
                Title::destroy($title->id);

                return redirect()->route('title.index')
                            ->with('message', $title->name.' - removed.');
            } else {
                return redirect()->route('title.index')
                ->with('message', "You have to be logged in with administrative rights when deleting records");
            }
        } else {
            return back()->with('message', "You have to have be logged in to delete Titles");
        }
    }

    // Return all titles
    public static function allTitles()
    {
        return Title::all();
    }
}
