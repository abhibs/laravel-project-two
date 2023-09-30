<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class CertificateController extends Controller
{
    public function create()
    {
        return view('admin.certificate.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required',
        ], [

            'image.required' => 'Certificate Image is Required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

        Image::make($image)->resize(1197, 777)->save('storage/certificate/' . $name_gen);
        $save_url = 'storage/certificate/' . $name_gen;

        Certificate::insert([
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Certificate Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('certificate')->with($notification);

    }

    public function index()
    {
        $datas = Certificate::latest()->get();
        return view('admin.certificate.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Certificate::findOrFail($id);
        return view('admin.certificate.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

            Image::make($image)->resize(1197, 777)->save('storage/certificate/' . $name_gen);
            $save_url = 'storage/certificate/' . $name_gen;

            Certificate::findOrFail($id)->update([
                'name' => $request->name,
                'image' => $save_url,
                'url' => $request->url,
            ]);
            $notification = array(
                'message' => 'Certificate Updated  Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('certificate')->with($notification);

        }

    }


    public function delete($id)
    {

        $data = Certificate::findOrFail($id);
        $img = $data->image;
        unlink($img);

        Certificate::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Certificate Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function inactive($id)
    {
        Certificate::findOrFail($id)->update(['status' => 0]);
        // dd($data);
        $notification = array(
            'message' => 'Certificate Inacative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        Certificate::findOrFail($id)->update(['status' => 1]);
        // dd($data);
        $notification = array(
            'message' => 'Certificate Acative Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}