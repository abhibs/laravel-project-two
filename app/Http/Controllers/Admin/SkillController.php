<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Carbon;

class SkillController extends Controller
{
    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'number' => 'required|min:1|max:100',
        ]);

        Skill::insert([
            'name' => $request->name,
            'number' => $request->number,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Skill Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill')->with($notification);

    }

    public function index()
    {
        $datas = Skill::latest()->get();
        return view('admin.skill.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('data'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'number' => 'required|min:1|max:100',

        ]);
        $id = $request->id;
        Skill::findOrFail($id)->update([
            'name' => $request->name,
            'number' => $request->number,
        ]);
        $notification = array(
            'message' => 'Skill Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('skill')->with($notification);

    }




    public function delete($id)
    {
        Skill::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Skill Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Skill::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Skill Inacative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Skill::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Skill Acative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
