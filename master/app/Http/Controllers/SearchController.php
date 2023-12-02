<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeautyExpert;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); // Retrieve the search query

        // Perform your search logic using the query on your model data
        $results = BeautyExpert::where('name', 'LIKE', "%$query%")->get();

        return view('pageslayout.master', ['results' => $results, 'query' => $query]);
    }
}
