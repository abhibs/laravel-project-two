<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fact;

class FactController extends Controller
{
    public function index()
    {
        $data = Fact::find(1);
        return view('admin.fact.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'happyclient' => 'required',
            'project' => 'required',
            'company' => 'required',
            'certificate' => 'required',

        ], [
            'happyclient.required' => 'Happy Client is Required',
            'project.required' => 'Project is Required',
            'company.required' => 'Company is Required',
            'certificate.required' => 'Certificate is Required',

        ]);
        $id = $request->id;

        Fact::findOrFail($id)->update([
            'happyclient' => $request->happyclient,
            'project' => $request->project,
            'company' => $request->company,
            'certificate' => $request->certificate,



        ]);

        $notification = array(
            'message' => 'Fact Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fact')->with($notification);

    }
}
