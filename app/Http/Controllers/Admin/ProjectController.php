<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Category;
use App\Models\Project;

class ProjectController extends Controller
{
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.project.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(800, 600)->save('storage/project/' . $name_gen);
        $save_url = 'storage/project/' . $name_gen;

        Project::insert([

            'category_id' => $request->category_id,
            'name' => $request->name,
            'url' => $request->url,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Project Inserted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('project')->with($notification);

    }

    public function index()
    {
        $datas = Project::get();
        return view('admin.project.index', compact('datas'));
    }

    public function edit($id)
    {

        $categories = Category::latest()->get();
        $data = Project::findOrFail($id);
        return view('admin.project.edit', compact('categories', 'data'));
    }

    public function update(Request $request)
    {

        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 600)->save('storage/project/' . $name_gen);
            $save_url = 'storage/project/' . $name_gen;

            Project::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'url' => $request->url,
                'image' => $save_url,
                'updated_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Project Updated with Image Successfully',
                'alert-type' => 'success'

            );
            return redirect()->route('project')->with($notification);


        } else {

            Project::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'url' => $request->url,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Project Updated without Image Successfully',
                'alert-type' => 'success'

            );
            return redirect()->route('project')->with($notification);

        }

    }

    public function inactive($id)
    {
        Project::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Project InActive Successfully',
            'alert-type' => 'error'

        );
        return redirect()->back()->with($notification);

    }

    public function active($id)
    {
        Project::findOrFail($id)->update(['status' => 1]);

        $notification = array(
            'message' => 'Project Active Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }

    public function delete($id)
    {
        $data = Project::findOrFail($id);
        $img = $data->image;
        unlink($img);

        Project::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Project Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }
}
