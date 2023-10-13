<?php
namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckoutForm()
{
    // Get the authenticated user
    $user = Auth::user();

    // Fetch the booking data for the user
    $bookings = Booking::where('user_id', auth()->user()->id)->get();

    return view('home.checkout', compact('user', 'bookings'));
}






    public function index()
    {
        $bookings = Checkout::all(); // Assuming you want to fetch all checkout records
        return view('dashboardbage.Checkout', compact('bookings'));
    }

    public function destroy($id)
    {
        $checkout = Checkout::findOrFail($id);
        $checkout->delete();

        return redirect('/Checkout')->with('success', 'Checkout record deleted successfully');
    }
}
