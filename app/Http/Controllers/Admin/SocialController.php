<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use Illuminate\Support\Carbon;

class SocialController extends Controller
{
    public function create()
    {
        return view('admin.social.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'url' => 'required',
            'icon' => 'required',
        ], [

            'url.required' => 'Social Media URL is Required',
            'icon.required' => 'Social Media Icon is Required',
        ]);

        Social::insert([
            'url' => $request->url,
            'icon' => $request->icon,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Social Media Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('social')->with($notification);

    }

    public function index()
    {
        $datas = Social::latest()->get();
        return view('admin.social.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Social::findOrFail($id);
        return view('admin.social.edit', compact('data'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'url' => 'required',
            'icon' => 'required',

        ], [
            'url.required' => 'Social Media URL is Required',
            'icon.required' => 'Social Media Icon is Required',
        ]);
        $id = $request->id;


        Social::findOrFail($id)->update([
            'url' => $request->url,
            'icon' => $request->icon,
        ]);
        $notification = array(
            'message' => 'Social Media Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('social')->with($notification);

    }




    public function delete($id)
    {
        Social::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Social Media Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Social::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Social Media Inacative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Social::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Social Media Acative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
