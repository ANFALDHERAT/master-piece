<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use RealRashid\SweetAlert\Facades\Alert;
class CheckoutController extends Controller
{




    public function applyCoupon(Request $request)
    {
        // Retrieve the coupon code from the form submission
        $couponCode = $request->input('coupon_code');

        // Retrieve the coupon details based on the provided code
        $coupon = Coupon::where('code', $couponCode)->first();
        // dd($coupon);
        if ($coupon) {
            // Get the total price of all bookings related to the user's order
            $lastBooking = Booking::where('user_id', auth()->id())->latest()->first();

            if ($lastBooking) {
                // Get the price of the last booking
                $totalPrice = $lastBooking->price *$lastBooking->quantity  ;

                // Apply coupon logic here
                $discountAmount = $coupon->discount_amount;

                // Calculate the updated total price after applying the coupon
                $updatedTotalPrice = $totalPrice - ($totalPrice * $discountAmount);
                Alert::success('Coupon Applied!', 'Total Price Updated: ' . $updatedTotalPrice)->showConfirmButton('OK');
                return response()->json(['totalPrice' => $updatedTotalPrice]);
            }
            Alert::error('Error!', 'Booking not found for the user')->showConfirmButton('OK');
            return response()->json(['error' => 'Booking not found for the user'], 404);
        }
        Alert::error('Error!', 'Invalid coupon code')->showConfirmButton('OK');

        return response()->json(['error' => 'Invalid coupon code'], 422);
    }

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
        $bookings = Payment::all(); // Assuming you want to fetch all checkout records
        return view('dashboardbage.Checkout', compact('bookings'));
    }

    public function destroy($id)
    {
        $checkout = Payment::findOrFail($id);
        $checkout->delete();

        return redirect('/Checkout')->with('success', 'Checkout record deleted successfully');
    }
}
