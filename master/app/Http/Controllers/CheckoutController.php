<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
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
