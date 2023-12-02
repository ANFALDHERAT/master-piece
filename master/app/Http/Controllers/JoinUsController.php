<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinUs;
use App\Models\BeautyExpert;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class JoinUsController extends Controller
{
    public function showForm()
    {
        return view('home.joinus'); // Create a Blade view for the form
    }

    public function submitForm(Request $request)
    {
        // $user = User::findOrFail($request->user_id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:join_us,email',
            'phone' => 'required|string',
            'image' => 'image|nullable',
            'cv' => 'file|mimes:pdf|nullable', // Corrected validation rule for CV file
            'description' => 'required', // Assuming description is still required
            'location' => 'required', // Assuming location is still required
            'years_of_experience' => 'required|integer', // Added validation for years_of_experience
            'age' => 'required|integer', // Added validation for age
            'price' => 'numeric', // Changed to numeric for price (no longer required)
            'service_id' => 'required',
            'working_hours'=>'required',
            'availability'=>'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img'), $imageName);

        $pdfFile = $request->file('cv');
        $CV = time() . '.' . $pdfFile->getClientOriginalExtension();
        $pdfFile->move(public_path('cv'), $CV);
        $user = Auth::user();
        // Create a new Professional with the image filename
        JoinUs::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'description' => $request->description,
            'email' => $request->email,
            'location' => $request->location,
            'years_of_experience' => $request->years_of_experience,
            'phone'=>$request->phone,

            'cv' => $CV,
            'price' => $request->price,

            'working_hours' => $request->working_hours,
            'availability' => $request->availability,
            'age' => $request->age,
            'password'=>$request->password,

            'service_id' => $request->service_id,
        ]);





        // Redirect to a thank you page or another suitable page
        return redirect()->route('join-us.show')->with('success', 'Form submitted successfully.');
    }

    public function acceptJoinRequest($id)
    {
        $joinRequest = JoinUs::findOrFail($id);

        $imagePath = public_path('storage/' . $joinRequest->image);
        $cvPath = public_path('storage/' . $joinRequest->cv);

        // Update user type to 'beautyexperts'
        $user = User::findOrFail($joinRequest->user_id);
        $user->update(['user_type' => 'beautyexperts']);

        // Create a new BeautyExpert instance
        $beautyExpert = new BeautyExpert([
            'name' => $joinRequest->name,
            'description' => $joinRequest->description,
            'email' => $joinRequest->email,
            'address' => $joinRequest->location,
            'expertise' => $joinRequest->years_of_experience,


            'image1' => $imagePath,

            'price' => $joinRequest->price,
            'password'=>$joinRequest->password,

            'working_hours' => $joinRequest->working_hours,
            'availability' => $joinRequest->availability,

            'service_id' => $joinRequest->service_id,

            'user_id' => $joinRequest->user_id,
        ]);

        // Save the new BeautyExpert instance
        $beautyExpert->save();
// Delete the join request
$joinRequest->delete();

        // Move image file
        // $newImagePath = public_path('img') . '/' . time() . '.' . pathinfo($joinRequest->image, PATHINFO_EXTENSION);
        // copy($imagePath, $newImagePath);
        // $beautyExpert->image = $newImagePath;
        // $beautyExpert->save();

        // // Move CV file
        // $newCVPath = public_path('cv') . '/' . time() . '.' . pathinfo($joinRequest->cv, PATHINFO_EXTENSION);
        // copy($cvPath, $newCVPath);
        // $beautyExpert->cv = $newCVPath;
        // $beautyExpert->save();

        // Delete the join request

        return redirect('/JoinUs')->with('success', 'Join request accepted successfully');
    }


    public function index()
    {
        $data = JoinUs::all();
        return view('dashboardbage.JoinUs', compact('data'));
    }

    public function destroy($id)
    {
        $joinUs = JoinUs::findOrFail($id); // Find the record by its ID
        $joinUs->delete(); // Delete the record

        return redirect('/JoinUs')->with('success', 'Record deleted successfully');
    }
}
