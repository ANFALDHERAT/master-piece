<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::all();
        return view('dashboardbage.Admin')->with('data', $data);
    }

    public function create()
    {
        return view('dashboardbage.creatadmin');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'address' => 'required',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ], [
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, and one number.',
            'phone.regex' => 'The phone number must be a valid 10-digit number.',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        $admin = new Admin();
        $admin->username = $validatedData['username'];
        $admin->email = $validatedData['email'];
        $admin->password = Hash::make($validatedData['password']);
        $admin->address = $validatedData['address'];
        $admin->phone = $validatedData['phone'];
        $admin->image = $filename;
        $admin->save();

        return redirect('Admin')->with('success', 'Admin Added!');
    }


    // public function edit($id)
    // {
    //     $data = Admin::find($id);
    //     return view('dashboardbage.editbeauty')->with('data', $data);
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'address' => 'required',
    //         'phone' => 'required|numeric',
    //         'availability' => 'required',
    //         'service_area' => 'required',
    //         'services_offered' => 'required',
    //         'description' => 'required',
    //         'average_rating' => 'required|numeric',
    //         'image1' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
    //         'image2' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
    //         'image3' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
    //         'image4' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
    //         'image5' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
    //     ]);

    //     $data = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'address' => $request->address,
    //         'phone' => $request->phone,
    //         'availability' => $request->availability,
    //         'service_area' => $request->service_area,
    //         'services_offered' => $request->services_offered,
    // 'description' => $request->description,
    //         'average_rating' => $request->average_rating,
    //     ];

    //     // Check if images are uploaded and update them if needed
    //     for ($i = 1; $i <= 5; $i++) {
    //         $imageName = 'image' . $i;
    //         if ($request->hasFile($imageName)) {
    //             $imagePath = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->$imageName->extension();
    //             $request->$imageName->move(public_path('/assets/img/'), $imagePath);
    //             $data[$imageName] = $imagePath;
    //         }
    //     }

    //     Admin::where(['id' => $id])->update($data);

    //     return redirect('Admin')->with('success', 'Admin Updated!');
    // }

    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect('Admin')->with('flash_message', 'Admin deleted!');
    }


    public function profile($id)
    {
        $item = Admin::findOrFail($id);
        return view('dashboardbage.adminprofile', compact('item'));
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|numeric',
          'password'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $admin = Admin::findOrFail($id);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password'=>$request->password,

        ];

        // Check if images are uploaded and update them if needed
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $data['image'] = $imagePath;
        }

        $admin->update($data);

        return redirect()->route('admin.profile', $admin->id)->with('success', 'Profile updated successfully.');
    }
}
