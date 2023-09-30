<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class ReviewController extends Controller
{
    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required',
            'company' => 'required',
            'ceo' => 'required',
            'content' => 'required',
        ], [
            'image.required' => 'Company Logo Required',
            'company.required' => 'Company Name is Required',
            'ceo.required' => 'Company CEO Name is Required',
            'content.required' => 'Content is Required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

        Image::make($image)->resize(400, 400)->save('storage/review/' . $name_gen);
        $save_url = 'storage/review/' . $name_gen;

        Review::insert([
            'image' => $save_url,
            'company' => $request->company,
            'ceo' => $request->ceo,
            'content' => $request->content,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Review Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('review')->with($notification);

    }

    public function index()
    {
        $datas = Review::latest()->get();
        return view('admin.review.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Review::findOrFail($id);
        return view('admin.review.edit', compact('data'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'company' => 'required',
            'ceo' => 'required',
            'content' => 'required',
        ], [
            'company.required' => 'Company Name is Required',
            'ceo.required' => 'Company CEO Name is Required',
            'content.required' => 'Content is Required',
        ]);
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

            Image::make($image)->resize(400, 400)->save('storage/review/' . $name_gen);
            $save_url = 'storage/review/' . $name_gen;

            Review::findOrFail($id)->update([
                'image' => $save_url,
                'company' => $request->company,
                'ceo' => $request->ceo,
                'content' => $request->content,
            ]);
            $notification = array(
                'message' => 'Review Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('project')->with($notification);

        } else {

            Review::findOrFail($id)->update([
                'company' => $request->company,
                'ceo' => $request->ceo,
                'content' => $request->content,
            ]);
            $notification = array(
                'message' => 'Review Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('review')->with($notification);

        }

    }


    public function delete($id)
    {

        $data = Review::findOrFail($id);
        $img = $data->image;
        unlink($img);

        Review::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Review Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Review::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Review Inactive Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Review::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Review Active Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}