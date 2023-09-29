<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeautyExpert;

class BeautyExpertController extends Controller
{
    public function index()
    {
        $data = BeautyExpert::all();
        return view('dashboardbage.BeautyExpert')->with('data', $data);
    }

    public function create()
    {
        return view('dashboardbage.creatbeauty');
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
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'image5' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $imagePaths = [];

        for ($i = 1; $i <= 5; $i++) {
            $imageName = 'image' . $i;
            if ($request->hasFile($imageName)) {
                $imagePaths[$imageName] = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->$imageName->extension();
                $request->$imageName->move(public_path('/assets/img/'), $imagePaths[$imageName]);
            }
        }

        BeautyExpert::create([
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
            'image1' => $imagePaths['image1'],
            'image2' => $imagePaths['image2'],
            'image3' => $imagePaths['image3'],
            'image4' => $imagePaths['image4'],
            'image5' => $imagePaths['image5'],
        ]);

        return redirect('BeautyExpert')->with('success', 'Beauty Expert Added!');
    }

    public function edit($id)
    {
        $data = BeautyExpert::find($id);
        return view('dashboardbage.editbeauty')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
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
