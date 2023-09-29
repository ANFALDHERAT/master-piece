<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinUs;

class JoinUsController extends Controller
{
    public function index()
    {
        $data = JoinUs::all(); 
        return view('dashboardbage.JoinUs', compact('data'));
    }

    public function destroy($id)
    {
        $joinUs = JoinUs::findOrFail($id); // Find the record by its ID
        $joinUs->delete(); // Delete the record

        return redirect('/JoinUs')->with('success', 'Record deleted successfully');
    }
}
