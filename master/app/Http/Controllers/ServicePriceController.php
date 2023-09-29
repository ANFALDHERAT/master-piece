<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicePrice;
use App\Models\Service; // Import the Service model if not already imported

class ServicePriceController extends Controller
{
    // Display a list of all service prices
    public function index()
    {
        $data = ServicePrice::all();
        return view('dashboardbage.ServicePrice')->with('data', $data);
    }

    // Show the form for creating a new service price
    public function create()
    {
        $services = Service::all(); // Retrieve all services
        return view('dashboardbage.creatServicePrice', compact('services'));
    }

    // Store a newly created service price in the database
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'type' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example image validation
        ]);

        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $imageName = 'image.' . $request->file('image')->extension();
            $imagePath = $request->file('image')->storeAs('public/assets/img', $imageName);
        }

        ServicePrice::create([
            'service_id' => $request->input('service_id'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'image' => $imagePath ?? null, // Store the image path if uploaded, otherwise null
        ]);

        return redirect('ServicePrice')->with('success', 'Service Price Added!');
    }

    // Show the form for editing a service price
    public function edit($id)
    {
        $data = ServicePrice::find($id);
        $services = Service::all(); // Retrieve all services
        return view('dashboardbage.editServicePrice', compact('data', 'services'));
    }

    // Update the specified service price in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'type' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example image validation
        ]);

        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $imageName = 'image.' . $request->file('image')->extension();
            $imagePath = $request->file('image')->storeAs('public/assets/img', $imageName);
        }

        $data = [
            'service_id' => $request->input('service_id'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
        ];

        // Check if a new image is uploaded and update it if needed
        if (isset($imagePath)) {
            $data['image'] = $imagePath;
        }

        ServicePrice::where('id', $id)->update($data);

        return redirect('ServicePrice')->with('success', 'Service Price Updated!');
    }

    // Remove the specified service price from the database
    public function destroy($id)
    {
        ServicePrice::destroy($id);
        return redirect('ServicePrice')->with('flash_message', 'Service Price deleted!');
    }
}
