<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\BeautyExpert;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */


    /**
     * Update the user's profile information.
     */



     public function professionalUpdate(Request $request)
     {
         // Assuming you have a user_id associated with the professional info
         $user = $request->user();
         $professional = $user->professional; // Assuming a one-to-one relationship, adjust if needed

         if (!$professional) {
             // Handle the case where professional info doesn't exist for the user
             return redirect()->route('profile.edit')->with('status','Professional info not found');
         }
         if ($request->hasFile('image')) {
             // Validate and store the uploaded image
             $image = $request->file('image');
             $imageName = time() . '.' . $image->getClientOriginalExtension();
             $image->move(public_path('img/'), $imageName);

             $professional->image =  $imageName;
         }
         // Update the fields
         $professional->name = $request->name;
         $professional->description = $request->description;

         $professional->email = $request->email;
         $professional->service_area = $request->service_area;

         $professional->expertise = $request->expertise;

         $professional->price = $request->price;
        //  $professional->average_rating = $request->average_rating;
         $professional->working_hours = $request->working_hours;
         $professional->availability = $request->availability;
         $professional->phone = $request->phone;
         // Save the changes
         $professional->save();

         return redirect()->route('profile.edit')->with('status', 'professional-info-updated');
     }











    public function edit(Request $request): View
    {
        $user = $request->user();
        $professionalInfo = BeautyExpert::where('user_id', $user->id)->first(); // Adjust this based on your actual relationship

        return view('profile.edit', compact('user', 'professionalInfo'));
    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Update the user's profile data (name and email)
        $user->fill($request->only(['name', 'email']));

        // Check if the user uploaded a new image
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/'), $imageName);

            $user->image =  $imageName;
        }

        // Update the user's phone number
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        // Reset email verification if email is changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Save the user's updated profile
        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
