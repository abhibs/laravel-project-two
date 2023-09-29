<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Name;

class NameController extends Controller
{
    public function index()
    {
        $data = Name::find(1);
        return view('admin.name.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Name is Required',
        ]);
        $id = $request->id;

        Name::findOrFail($id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Name Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('name')->with($notification);

    }
}
