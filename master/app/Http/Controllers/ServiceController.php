<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{

    public function index()
    {
        $data= Service::all();
        return view('dashboardbage.Service')->with('data', $data);
    }
    public function create()
    {
        return view('dashboardbage.creatservice');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',


        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
        ]);

        return redirect('Service')->with('success', 'Service Added!');
     }



    public function edit($id)
    {
        $data=Service::find($id);
        return view('dashboardbage.editservice')->with('data',$data);
    }



    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        Service::where(['id' => $id])->update($data);
        return redirect('Service')->with('success', 'Service Updated!');

    }

    public function destroy($id)
    {

        Service::destroy($id);
    return redirect('Service')->with('flash_message','Service deleted!');

    }
}
