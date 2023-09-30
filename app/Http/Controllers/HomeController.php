<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Fact;
use App\Models\Name;
use App\Models\Photo;
use App\Models\Review;
use App\Models\Role;
use App\Models\Skill;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class HomeController extends Controller
{
    public function index()
    {
        $name = Name::find(1);
        $photo = Photo::find(1);
        $roles = Role::where('status', 1)->latest()->get();
        $socials = Social::where('status', 1)->get();
        $about = About::find(1);
        $fact = Fact::find(1);
        $skills = Skill::where('status', 1)->get();
        $educations = Education::where('status', 1)->get();
        $experiences = Experience::where('status', 1)->get();
        $certificates = Certificate::where('status', 1)->inRandomOrder()->get();
        $reviews = Review::where('status', 1)->get();


        return view('welcome', compact('name', 'photo', 'roles', 'socials', 'about', 'fact', 'skills', 'educations', 'experiences', 'certificates', 'reviews'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Name is Required',
            'email.required' => 'Email is Required',
            'subject.required' => 'Subject is Required',
            'message.required' => 'Message is Required',
        ]);
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Contact Form Submitted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}