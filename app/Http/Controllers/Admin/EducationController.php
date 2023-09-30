<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Carbon;

class EducationController extends Controller
{
    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'percentage' => 'required|min:1|max:100',
            'collage' => 'required',
            'content' => 'required',
        ]);

        Education::insert([
            'name' => $request->name,
            'year' => $request->year,
            'percentage' => $request->percentage,
            'collage' => $request->collage,
            'content' => $request->content,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Education Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('education')->with($notification);

    }

    public function index()
    {
        $datas = Education::latest()->get();
        return view('admin.education.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Education::findOrFail($id);
        return view('admin.education.edit', compact('data'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'year' => 'required',
            'percentage' => 'required|min:1|max:100',
            'collage' => 'required',
            'content' => 'required',
        ]);
        $id = $request->id;
        Education::findOrFail($id)->update([
            'name' => $request->name,
            'year' => $request->year,
            'percentage' => $request->percentage,
            'collage' => $request->collage,
            'content' => $request->content,
        ]);
        $notification = array(
            'message' => 'Education Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('education')->with($notification);

    }




    public function delete($id)
    {
        Education::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Education Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Education::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Education Inacative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Education::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Education Acative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
