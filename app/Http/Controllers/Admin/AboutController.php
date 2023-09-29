<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::find(1);
        return view('admin.about.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'birthday' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'age' => 'required',
            'degree' => 'required',
            'hobbies' => 'required',
            'languages_know' => 'required',
        ], [
            'title.required' => 'About Title is Required',
            'birthday.required' => 'Birthday Date is Required',
            'email.required' => 'Email is Required',
            'phone.required' => 'Phone Number is Required',
            'city.required' => 'City is Required',
            'age.required' => 'Age is Required',
            'degree.required' => 'Degree is Required',
            'hobbies.required' => 'Hobbies is Required',
            'languages_know.required' => 'Languages Know is Required',
        ]);
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            // unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

            Image::make($image)->resize(600, 600)->save('storage/about/' . $name_gen);
            $save_url = 'storage/about/' . $name_gen;

            About::findOrFail($id)->update([
                'image' => $save_url,
                'title' => $request->title,
                'birthday' => $request->birthday,
                'email' => $request->email,
                'phone' => $request->phone,
                'city' => $request->city,
                'age' => $request->age,
                'degree' => $request->degree,
                'hobbies' => $request->hobbies,
                'languages_know' => $request->languages_know,
            ]);
            $notification = array(
                'message' => 'About Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('about')->with($notification);

        } else {

            About::findOrFail($id)->update([
                'title' => $request->title,
                'birthday' => $request->birthday,
                'email' => $request->email,
                'phone' => $request->phone,
                'city' => $request->city,
                'age' => $request->age,
                'degree' => $request->degree,
                'hobbies' => $request->hobbies,
                'languages_know' => $request->languages_know,
            ]);
            $notification = array(
                'message' => 'About Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('about')->with($notification);

        }

    }
}
