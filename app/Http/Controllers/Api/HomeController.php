<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Fact;
use App\Models\Name;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Review;
use App\Models\Role;
use App\Models\Skill;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $namedata = Name::find(1);
        $photodata = Photo::find(1);
        $roledatas = Role::latest()->get();
        $socialmediadatas = Social::latest()->get();
        $aboutdata = About::find(1);
        $factdata = Fact::find(1);
        $skilldatas = Skill::latest()->get();
        $educationdatas = Education::latest()->get();
        $experiencedatas = Experience::latest()->get();
        $allprojectdata = Project::where('status', 1)->inRandomOrder()->get();

        $categories = Category::latest()->get();
        $catWiseProject = [];

        foreach ($categories as $category) {
            $catWiseProjectCategoryId = Project::where('status', 1)
                ->where('category_id', $category->id)
                ->inRandomOrder()
                ->get();

            $catWiseProject[$category->name] = $catWiseProjectCategoryId;
            foreach ($catWiseProjectCategoryId as $data) {
                $data->image = asset($data->image);
            }
        }
        $certificatedatas = Certificate::latest()->get();
        $reviewdatas = Review::latest()->get();

        $photodata->image = asset($photodata->image);
        $aboutdata->image = asset($aboutdata->image);

        foreach ($allprojectdata as $data) {
            $data->image = asset($data->image);
        }

        foreach ($certificatedatas as $data) {
            $data->image = asset($data->image);
        }

        foreach ($reviewdatas as $data) {
            $data->image = asset($data->image);
        }


        return response([
            'message' => 'Home Page API',
            'status' => 'success',
            'namedata' => $namedata,
            'photodata' => $photodata,
            'roledatas' => $roledatas,
            'socialmediadatas' => $socialmediadatas,
            'aboutdata' => $aboutdata,
            'factdata' => $factdata,
            'skilldatas' => $skilldatas,
            'educationdatas' => $educationdatas,
            'experiencedatas' => $experiencedatas,
            'allprojectdata' => $allprojectdata,
            'catWiseProject' => $catWiseProject,
            'certificatedatas' => $certificatedatas,
            'reviewdatas' => $reviewdatas,
            'code' => 200
        ], 200);


    }

    public function contactUs(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;


        $contact->save();

        return response([
            'message' => 'Contact Form Submited Successfully',
            'status' => 'success',
            'contact' => $contact,
            'code' => 200
        ], 200);
    }
}