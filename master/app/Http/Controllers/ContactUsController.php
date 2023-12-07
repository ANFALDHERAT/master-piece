<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use RealRashid\SweetAlert\Facades\Alert;
class ContactUsController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('home.contact-us');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUs::create($request->all());
        Alert::success('Success', 'Thank you for contact us. we will contact you shortly.')->persistent(true)->autoClose(3000);
         return redirect()->back()
                          ;
    }
}
