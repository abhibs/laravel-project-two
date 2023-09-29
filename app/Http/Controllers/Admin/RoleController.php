<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Carbon;

class RoleController extends Controller
{
    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ], [

            'name.required' => 'Role Name is Required',
        ]);

        Role::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Role Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('role')->with($notification);

    }

    public function index()
    {
        $datas = Role::latest()->get();
        return view('admin.role.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Role::findOrFail($id);
        return view('admin.role.edit', compact('data'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Role Name is Required',
        ]);
        $id = $request->id;


        Role::findOrFail($id)->update([
            'name' => $request->name,
        ]);
        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('role')->with($notification);

    }




    public function delete($id)
    {
        Role::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Role::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Role Inacative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Role::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Role Acative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
