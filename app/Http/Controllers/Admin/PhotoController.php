<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        $data = Photo::find(1);
        return view('admin.photo.index', compact('data'));
    }

    public function update(Request $request)
    {

        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            // unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

            Image::make($image)->resize(1920, 1280)->save('storage/profile/' . $name_gen);
            $save_url = 'storage/profile/' . $name_gen;

            Photo::findOrFail($id)->update([
                'image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Profile Photo Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('photo')->with($notification);

        }

    }
}
