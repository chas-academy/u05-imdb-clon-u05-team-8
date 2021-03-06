<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reviews = Review::all();

        return view('reviews', [
            'reviews' => $reviews
        ]);
    }
    // Return all reviews witout a view
    public static function allReviews()
    {
        return Review::all();
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
        $request->validate([
            'body' => 'required',
          //'user_id' =>'required',
        ]);

        // Title::create($request->all());

        if (Auth::check()) {
            $review = new Review;
            $review->body = $request->body;
            $review->user_id = Auth::user()->id;
            $review->title_id = $request->title_id;
            $review->save();

            return redirect('reviews')
                ->with('message', 'Review created! Waiting for an admin to approve it');
        } else {
            return redirect()->route('reviews')
                ->with('message', "You have to be logged in when creating reviews");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $review->update($request->all());

        return redirect()->route('dashboard')
                              ->with('message', "Review of \"".$review->title->name."\" by ".$review->user->name.' - has been approved.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
