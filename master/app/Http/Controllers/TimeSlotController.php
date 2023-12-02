<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeautyExpert;
class TimeSlotController extends Controller
{
    public function getTimeSlots($selectedDay)
    {
        // Retrieve time slots from the database for the selected day
        $timeSlots = BeautyExpert::where('working_hours', $selectedDay)
            ->pluck('availability')
            ->toArray();

        return response()->json($timeSlots);
    }
}
