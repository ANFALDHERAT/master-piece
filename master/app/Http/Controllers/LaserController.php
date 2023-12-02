<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laser;

class LaserController extends Controller
{
    public function indexlaser()
    {
        $experts = Laser::all();

        return view('home.laserexperts', compact('experts'));
    }

    public function LaserDetails($id)
    {
        $laser = Laser::find($id);

        return view('home.Laseredetail', compact('laser'));
    }
}
