<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $listings = Listing::all();
        return view('listings', compact('listings'));
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
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);

        $listing->update($request->all());

        return redirect()->route('dashboard')
                            ->with('message', "List \"".$request['oldname']."\" renamed to: \"" .$listing->name. "\".");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $user = Auth::user();
        $name = $listing->name;

        if ($user) {
            Listing::destroy($listing->id);
            //   return redirect()->back()->with('message', $title->name.' - removed.');
            return redirect()->route('dashboard')
                            ->with('message', $name.' - removed.');
        } else {
            return back()->with('message', "You have to have be logged in to delete Lists");
        }
    }
    // Return all listings (lists)
    public static function allListings()
    {
        // var_dump(Listing::all());
        $listings = Listing::all();
        return $listings;
    }
}
