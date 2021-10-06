<?php

namespace App\Http\Controllers;

use App\Models\Listitem;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class ListitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listitem  $listitem
     * @return \Illuminate\Http\Response
     */
    public function show(Listitem $listitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listitem  $listitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Listitem $listitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listitem  $listitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listitem $listitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listitem  $listitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listitem $listitem)
    {

        $name = $listitem->title()->get()->first()->name;

        if (Auth::user()) {
            Listitem::destroy($listitem->id);
            return redirect()->route('dashboard')->with('message', $name.' - removed from List.');
        } else {
            return back()->with('message', "You have to have be logged in to delete Listitems");
        }
    }
}
