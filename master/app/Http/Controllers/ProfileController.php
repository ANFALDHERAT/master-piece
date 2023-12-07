<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\BeautyExpert;
use App\Models\Booking;
use Illuminate\Support\Facades\Log;
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
            'password' => 'required|min:6',
            'availability' => 'required',
            'working_hours'=>'required',
            'service_area' => 'required',
            'services_offered' => 'required',
            'description' => 'required',
            'average_rating' => 'required|numeric',
            'price'=>'required',
            'expertise'=>'required',
            'image1' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'availability' => $request->availability,
            'working_hours'=>$request->working_hours,
            // 'service_id' => $request->service_id,
            'service_area' => $request->service_area,
            'services_offered' => $request->services_offered,
    'description' => $request->description,
            'average_rating' => $request->average_rating,
        ];

        // Check if images are uploaded and update them if needed
        for ($i = 1; $i <= 5; $i++) {
            $imageName = 'image' . $i;
            if ($request->hasFile($imageName)) {
                $imagePath = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->$imageName->extension();
                $request->$imageName->move(public_path('/assets/img/'), $imagePath);
                $data[$imageName] = $imagePath;
            }
        }

        // BeautyExpert::where(['id' => $id])->update($data);

             return redirect()->route('profile.edit')->with('status', 'professional-info-updated');

     }





    //  public function show_order(){

    //     $user = auth()->user();
    //     $orders = $user->orders()->paginate(10);

    //     // $orders = Order::with('user')->paginate(10);
    //     return view('profile.edit', compact('orders'));
    // }



    public function edit(Request $request): View
    {
        $user = $request->user();
        $professionalInfo = BeautyExpert::where('user_id', $user->id)->first(); // Adjust this based on your actual relationship
        $bookings = Booking::with('user')->get();
        return view('profile.edit', compact('user', 'professionalInfo','bookings'));
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
