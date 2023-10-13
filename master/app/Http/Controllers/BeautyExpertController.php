<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BeautyExpert;

use App\Models\Service;
class BeautyExpertController extends Controller
{

    public function indexbeauty()
    {
        $experts = BeautyExpert::all(); // Replace "Expert" with your actual model name for experts
        $services =Service::all(); // Replace "Category" with your actual model name for categories

        return view('home.index-2', compact('experts', 'services'));
    }
    public function shop($id)
    {

        // Use $service_id to filter experts from the database based on the selected service
        $experts = BeautyExpert::where('service_id', $id)->get();
        $services =Service::all();
        return view('home.shop', compact('experts','services'));
    }
    public function viewDetails($id) {
        $expert = BeautyExpert::find($id);
        $services = Service::all();
        $workingDays = [];
        $workinghours=[];
        if ($expert) {
            // Decode JSON data from the working_hours column into an array
            $workingDays = json_decode($expert->working_hours, true);
            $workinghours = json_decode($expert->availability, true);

            // Ensure that $workingDays is an array
            if (!is_array($workingDays)) {
                $workingDays = [];


            }
            if (!is_array( $workinghours)) {
                $workinghours = [];


            }
        }

        return view('home.product-details-sticky', compact('expert', 'services', 'workingDays','workinghours'));
    }



    public function index()
    {
        $data = BeautyExpert::all();
        return view('dashboardbage.BeautyExpert')->with('data', $data);
    }

    public function create()
{
    $services = Service::all(); // Fetch the services from the database
    return view('dashboardbage.creatbeauty', compact('services'));
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'phone' => 'required|numeric',
        'password' => 'required|min:6',
        'availability' => 'required',
        'service_area' => 'required',
        'services_offered' => 'required',
        'description' => 'required',
        'average_rating' => 'required|numeric',
        'image1' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        'image2' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        'image3' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        'image4' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        'image5' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
    ]);



    $imagePaths = [];

    // Define the image field names
    $imageFields = ['image1', 'image2', 'image3', 'image4', 'image5'];

    foreach ($imageFields as $fieldName) {
        if ($request->hasFile($fieldName)) {
            $imagePaths[$fieldName] = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->$fieldName->extension();
            $request->$fieldName->move(public_path('/assets/img/'), $imagePaths[$fieldName]);
        }
    }

    BeautyExpert::create([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'phone' => $request->phone,
        'password' => bcrypt($request->password),
        'availability' => $request->availability,
        'service_id' => $request->input('service_id'),
        'service_area' => $request->service_area,
        'services_offered' => $request->services_offered,
        'description' => $request->description,
        'average_rating' => $request->average_rating,
        // Assign each image path to its respective field
        'image1' => $imagePaths['image1'] ?? null,
        'image2' => $imagePaths['image2'] ?? null,
        'image3' => $imagePaths['image3'] ?? null,
        'image4' => $imagePaths['image4'] ?? null,
        'image5' => $imagePaths['image5'] ?? null,
    ]);

    return redirect('BeautyExpert')->with('success', 'Beauty Expert Added!');
}
    public function edit($id)
    {
        $data = BeautyExpert::find($id);
        return view('dashboardbage.editbeauty',);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
            'password' => 'required|min:6',
            'availability' => 'required',
            'service_area' => 'required',
            'services_offered' => 'required',
            'description' => 'required',
            'average_rating' => 'required|numeric',
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

        BeautyExpert::where(['id' => $id])->update($data);

        return redirect('BeautyExpert')->with('success', 'Beauty Expert Updated!');
    }

    public function destroy($id)
    {
        BeautyExpert::destroy($id);
        return redirect('BeautyExpert')->with('flash_message', 'Beauty Expert deleted!');
    }
}
