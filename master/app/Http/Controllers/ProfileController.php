<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{



    public function index()
    {
        $data= Admin::all();
        return view('dashboardbage.adminprofile')->with('data', $data);
    }
    public function create()
    {
        return view('dashboardbage.adminprofile');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'address' => 'required',
            'phone' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',


        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'image' => $filename,
        ]);

        return redirect('profile')->with('success', 'profile Added!');
     }



    public function edit($id)
    {
        $data = Admin::findOrFail($id);
        return view('dashboardbage.adminprofile')->with('data',$data);
    }



    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        Admin::where(['id' => $id])->update($data);
        return redirect('profile')->with('success', 'profile Updated!');

    }

    public function destroy($id)
    {

        Admin::destroy($id);
    return redirect('profile')->with('flash_message','profile deleted!');

    }


}
