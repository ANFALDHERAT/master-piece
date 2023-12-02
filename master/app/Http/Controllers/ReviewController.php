<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\BeautyExpert;
use App\Models\Service;

class ReviewController extends Controller
{
    public function index()
{
    $reviews = Review::with('user', 'expert')->get();
    return view('dashboardbage.Review', compact('reviews'));
}

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect('/Review')->with('success', 'Review deleted successfully');
    }




    public function create($id)
    {
        $expert = BeautyExpert::find($id);
        return view('home.product-details-sticky', compact('expert'));
    }

    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'comment' => 'required',
        'rating' => 'required|integer|between:1,5',
    ]);

    // Create and save the review
    Review::create([
        'user_id' => auth()->user()->id,
        'expert_id' => $request->input('expert_id'),
        'comment' => $request->input('comment'),
        'rating' => $request->input('rating'),
    ]);

    // Fetch the expert and associated reviews
    $expert = BeautyExpert::with('reviews')->find($request->input('expert_id'));

    return view('home.product-details-sticky', compact('expert'))->with('success', 'Review submitted successfully');
}

}
