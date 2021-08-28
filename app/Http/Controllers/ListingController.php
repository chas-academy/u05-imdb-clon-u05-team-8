<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Title;
use App\Models\Listitem;

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


        $user = Auth::user();
        if ($user) {
            $listings =  Listing::where('user_id', $user->id)
               ->orderBy('name')
               ->get();

            return view('listings', [ 'listings' => $listings ]);
        }

         else {
            return back()->with('message', "Please login to see your Watchlists");
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

                $listing = Listing::where('user_id',$user->id);

                return view('listings-create', compact('listing'));

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


            $list = new Listing;
            $list->name = $request->name;
            $list->user_id = Auth::user()->id;
            $list->save();

                return redirect()->route('listing.index')
                ->with('message', $request->input('name').' - created.');
            } else {
                return redirect()->route('listing.index')
                ->with('message', "You have to be logged in when creating records");
            }

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
        $listings = Listing::all();
        return $listings;
    }


    public function addTitleToListing($id, $title_id)
    {

           $title = Title::find($title_id);
           $list = Listing::find($id);
           $item = Listitem::where('listing_id', $id)->where('title_id',$title_id )->get()->first();

           if( $item ){

                return back()->with('message', "\"".$title->name."\" already exists in Watchlist \"".$list->name."\"");

           }
           else{

            if (Listitem::create(
                    [
                        'listing_id' => $list->id,
                        'title_id' => $title_id,
                    ]
                )) {

                    return back()->with('message', "\"".$title->name."\" added to Watchlist \"".$list->name."\"");
                }
        }
    }
}
