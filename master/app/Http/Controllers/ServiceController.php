<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category; // Add the Category model namespace
use App\Models\BeautyExpert; // Add the BeautyExpert model namespace

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::all();
        return view('dashboardbage.Service')->with('data', $data);
    }

    public function create()
    {
        $categories = Category::all(); // Retrieve all categories
        $experts = BeautyExpert::all(); // Retrieve all beauty experts
        return view('dashboardbage.creatservice', compact('categories', 'experts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'category_id' => 'required|exists:categories,id', // Ensure the category exists
            'expert_id' => 'required|exists:beauty_experts,id', // Ensure the beauty expert exists
        ]);

        $imageName = 'image.' . $request->file('image')->extension();
        $imagePath = $request->file('image')->storeAs('public/assets/img', $imageName);

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'expert_id' => $request->expert_id,
        ]);

        return redirect('Service')->with('success', 'Service Added!');
    }

    public function edit($id)
    {
        $data = Service::find($id);
        $categories = Category::all(); // Retrieve all categories
        $experts = BeautyExpert::all(); // Retrieve all beauty experts
        return view('dashboardbage.editservice', compact('data', 'categories', 'experts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'category_id' => 'required|exists:categories,id', // Ensure the category exists
            'expert_id' => 'required|exists:beauty_experts,id', // Ensure the beauty expert exists
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'expert_id' => $request->expert_id,
        ];

        // Check if a new image is uploaded and update it if needed
        if ($request->hasFile('image')) {
            $imageName = 'image.' . $request->file('image')->extension();
            $imagePath = $request->file('image')->storeAs('public/assets/img', $imageName);
            $data['image'] = $imagePath;
        }

        Service::where('id', $id)->update($data);

        return redirect('Service')->with('success', 'Service Updated!');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('Service')->with('flash_message', 'Service deleted!');
    }
}
