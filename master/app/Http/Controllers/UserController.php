<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('dashboardbage.user')->with('data', $data);
    }

    public function create()
    {
        return view('dashboardbage.creatuser');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'role' => 'required',


        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

            User::create([
                'name' => $request->name,
                'image' => $filename,
                'email' => $request->email, // Add the email field
                'password' => bcrypt($request->password), // Add the password field with encryption
                'address' => $request->address,
                'phone' => $request->phone,
                'city' => $request->city,
                'role' => $request->role,


        ]);

        return redirect('user')->with('success', 'User Added!');
     }




    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }
}
