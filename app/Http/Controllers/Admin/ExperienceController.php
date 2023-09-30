<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Carbon;

class ExperienceController extends Controller
{
    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'location' => 'required',
            'content' => 'required',
        ]);

        Experience::insert([
            'name' => $request->name,
            'year' => $request->year,
            'location' => $request->location,
            'content' => $request->content,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Experience Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('experience')->with($notification);

    }

    public function index()
    {
        $datas = Experience::latest()->get();
        return view('admin.experience.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Experience::findOrFail($id);
        return view('admin.experience.edit', compact('data'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'location' => 'required',
            'content' => 'required',
        ]);
        $id = $request->id;
        Experience::findOrFail($id)->update([
            'name' => $request->name,
            'year' => $request->year,
            'location' => $request->location,
            'content' => $request->content,
        ]);
        $notification = array(
            'message' => 'Experience Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('experience')->with($notification);

    }




    public function delete($id)
    {
        Experience::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Experience Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Experience::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Experience Inacative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Experience::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Experience Acative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
