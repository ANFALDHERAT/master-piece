<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medical;
class MedicalController extends Controller
{
    public function indexMedical()
    {
        $experts =Medical::all();

        return view('home.medical', compact('experts'));
    }

    public function MedicalDetails($id)
    {
        $medical = Medical::find($id);

        return view('home.medicaldetail', compact('medical'));
    }
}
