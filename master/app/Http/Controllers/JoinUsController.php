<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinUs;

class JoinUsController extends Controller
{
    public function showForm()
    {
        return view('home.joinus'); // Create a Blade view for the form
    }

    public function submitForm(Request $request)
    {
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
            'specialty' => 'required|string', // Added validation for specialty
        ]);

        $validatedData['profession'] = $validatedData['specialty'];
        unset($validatedData['specialty']); // Remove the "specialty" key from the array


        $cvFile = $request->file('cv');
        $cvFileName = time() . '_' . $cvFile->getClientOriginalName(); // You can customize the filename if needed
        $cvFile->storeAs('cv_files', $cvFileName); // Store the CV file in the 'cv_files' directory with a custom filename

        $validatedData['cv'] = 'cv_files/' . $cvFileName; // Save the file path in the database

        JoinUs::create($validatedData);

        

        // Redirect to a thank you page or another suitable page
        return redirect()->route('join-us.show')->with('success', 'Form submitted successfully.');
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
