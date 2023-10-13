<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\ServicePrice;


class BookingController extends Controller
{
    public function saveBooking(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'selected_day' => 'required',
            'selected_time' => 'required',
        ]);

        // Create a new Booking instance and fill it with form data
        $booking = new Booking();

        $booking->name = $request->input('expert_service_name');
        $booking->working_hours = $request->input('selected_day');
        $booking->availability = $request->input('selected_time');
        $booking->price = $request->input('expert_price');
        $booking->nameExpert = $request->input('nameExpert');
        $booking->user_id = auth()->user()->id;

        // Save the booking
        $booking->save();

        // Redirect to a confirmation page or a checkout page
        // return view('home.checkout');
         return redirect()->route('checkout')->with('success', 'Booking successful.');
    }















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






    // public function store(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'services' => 'required|array', // An array of selected services
    //         'quantities' => 'required|array', // An array of service quantities
    //         'date' => 'required|date',
    //         'time' => 'required',
    //         'service_id' => 'required', // Service ID from your form
    //     ]);

    //     // Get the user and expert information (you may adjust how you retrieve these IDs)
    //     $userId = auth()->user()->id; // Assuming you're using authentication
    //     $expertId = $request->input('expert_id'); // You'll need to include this in your form

    //     // Create a new booking record
    //     $booking = new Booking([
    //         'date' => $validatedData['date'],
    //         'time' => $validatedData['time'],
    //     ]);

    //     // Save the booking
    //     $booking->save();

    //     // Attach selected services and their quantities to the booking
    //     foreach ($validatedData['services'] as $servicePriceId) {
    //         $quantity = $validatedData['quantities'][$servicePriceId];

    //         // You should validate that $servicePriceId exists in your service_prices table
    //         // and is associated with the provided service_id
    //         $servicePrice = ServicePrice::find($servicePriceId);

    //         if ($servicePrice) {
    //             $booking->services()->attach($servicePrice, ['quantity' => $quantity]);
    //         }
    //     }

    //     // Set the user, expert, and service for the booking
    //     $booking->user_id = $userId;
    //     $booking->expert_id = $expertId;
    //     $booking->service_id = $validatedData['service_id'];

    //     // Save the booking with related data
    //     $booking->save();

    //     // You can add additional logic here, such as sending a confirmation email to the user

    //     // Redirect the user or show a success message
    //     return redirect()->route('booking.success');
    // }

}
