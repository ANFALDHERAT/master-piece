<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        // Retrieve bookings along with related information
        $bookings = Booking::with(['expert', 'user', 'service', 'servicePrice'])->get();

        return view('dashboardbage.Booking', compact('bookings'));
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect('/Booking')->with('success', 'Booking deleted successfully');
    }
}
