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


public function saveCheckout(Request $request)
{
    // Validate the form data
    $this->validate($request, [
        'booking_id' => 'required',
        'payment_method' => 'required',
        'notes' => 'nullable',
    ]);

    // Create a new Checkout instance and fill it with form data
    $checkout = new Checkout();

    $checkout->booking_id = $request->input('booking_id');
    $checkout->payment_method = $request->input('payment_method');
    $checkout->notes = $request->input('notes');
    $checkout->total_amount = $request->input('total_amount'); // Add this line

    // Save the checkout
    $checkout->save();

    // Redirect to a confirmation page or elsewhere
    // You can also display the "Order Successful" modal here
    return redirect()->route('checkout')->with('success', 'Order successful.');
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
