<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BeautyExpert;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
class BeautyExpertController extends Controller
{


    public function indexbeauty()
    {
        $experts = BeautyExpert::all();
        $services = Service::all();
        $reviews = Review::all();
        return view('home.index-2', compact('experts', 'services','reviews'));
    }

    public function shop($id)
    {
        $experts = BeautyExpert::where('service_id', $id)->get();
        $services = Service::all();
        $yourData = Service::paginate(1);
        return view('home.shop', compact('experts', 'services','yourData'));
    }

    public function viewDetails($id)
    {
        $expert = BeautyExpert::find($id);
        $services = Service::all();
        $workingDays = [];
        $workinghours = [];



        if ($expert) {
            $workingDays = json_decode($expert->working_hours, true);
            $workinghours = json_decode($expert->availability, true);

            if (!is_array($workingDays)) {
                $workingDays = [];
            }

            if (!is_array($workinghours)) {
                $workinghours = [];
            }
        }

        // Fetch reviews for the expert
        $reviews = Review::where('expert_id', $id)->get();

        return view('home.product-details-sticky', compact('expert', 'services', 'workingDays', 'workinghours', 'reviews'));
    }

    public function submitReview(Request $request)
    {
        // Check if the user is authenticated (logged in)
        if (Auth::check()) {
            // Validate the form data
            $request->validate([
                'expert_id' => 'required|exists:beauty_experts,id',
                'name' => 'required',
                'email' => 'required|email',
                'rating' => 'required|integer|min:1|max:5',
                'comment' => 'required',

            ]);

            // Create a new review
            $review = new Review([
                'expert_id' => $request->input('expert_id'),
                'user_id' => Auth::id(), // Set the user_id from the authenticated user
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'rating' => $request->input('rating'),
                'comment' => $request->input('comment'),
            ]);

            // Save the review
            $review->save();

            // Redirect back or to a specific route
            return redirect()->back()->with('success', 'Review submitted successfully!');
        } else {
            // User is not logged in, handle accordingly (e.g., redirect to login)
            return redirect()->route('login')->with('error', 'You must be logged in to submit a review.');
        }
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
        'working_hours'=>'required',
        'description' => 'required',
        'average_rating' => 'required|numeric',
        'price'=>'required',
        'expertise'=>'required',
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
        'working_hours'=>$request->working_hours,
        'service_id' => $request->input('service_id'),
        'service_area' => $request->service_area,
        'services_offered' => $request->services_offered,
        'description' => $request->description,
        'average_rating' => $request->average_rating,
        'price'=>$request->price,
        'expertise'=>$request->expertise,
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
        return view('dashboardbage.editbeauty')->with('data',$data);
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
            'working_hours'=>'required',
            'service_area' => 'required',
            'services_offered' => 'required',
            'description' => 'required',
            'average_rating' => 'required|numeric',
            'price'=>'required',
            'expertise'=>'required',
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
            'working_hours'=>$request->working_hours,
            // 'service_id' => $request->service_id,
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
