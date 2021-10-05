<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;
use App\Models\Title;
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
    // Return all reviews without a view
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
         $user = Auth::user();

        if ($user) {

                return view('reviews-create');//, compact('title')
        } else {

            return back()->with('message', "You have to have be logged in to write Reviews");
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

        if (Auth::check()) {

           Review::create( $request->validate([ 'body' => 'required', 'user_id' =>'required','title_id'=>'required' ,]));

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
        $review->approve = 0;
        return redirect()->route('dashboard')
                              ->with('message', "Review of \"".$review->title->name."\" by ".$review->user->name.' - has been updated, and has to be approved again.');
    }

    /**
    * Approve the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function approve(Request $request, $id)
    {
      $review = Review::find($id);
      $review->approve = 1;
      $review->save();

      return redirect()->route('dashboard')->with('message', "Review of \"".$review->title->name."\" by ".$review->user->name.' - has been approved.');
    }

 /**
    * Approve the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function reviews(Request $request, $id)
    {
      $review = Review::find($id);
      $review->approve = 1;
      $review->save();

      return redirect()->route('dashboard')->with('message', "Review of \"".$review->title->name."\" by ".$review->user->name.' - has been approved.');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addReview($title_id)
    {
         $user = Auth::user();

        if ($user) {

                $title = Title::where('id',$title_id)->get()->first();
                return view('reviews-create', compact('title'));// ['title' => $title]);

        } else {
            return back()->with('message', "You have to have be logged in to write Reviews");
        }

    }

}
