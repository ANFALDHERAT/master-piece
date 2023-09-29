<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

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
}
