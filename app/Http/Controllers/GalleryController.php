<?php

namespace App\Http\Controllers;

use App\Models\GallaryName;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    public function GalleyView()
    {
        $data['gname'] = GallaryName::get();
        $data['gimage'] = Gallery::get();

        return view('admin.page.gallaryview',$data);
    }

    public function GalleryAddView()
    {
        return view('admin.page.galley_add');
    }
    public function GalleryUpload(Request $request)
    {
        $info = new GallaryName();

        $info->gallary_title = $request->gallery_title;
        $info->batch_number = $request->batch_number;
        $startdate = date("Y-m-d", strtotime($request->start_date));
        $enddate = date("Y-m-d", strtotime($request->end_date));
        $info->batch_date = $startdate . ' to ' . $enddate;
        $info->save();

        return redirect()->back();
    }

    public function GalleryImageAdd()
    {
        $data = GallaryName::get();
        return view('admin.page.gallery_image', compact('data'));
    }


    public function ImageUpload(Request $request)
    {

        $name = [];
        foreach ($request->file('image') as $image) {
            $imagename = time() . $image->getClientOriginalName();
            $image->move(public_path('uploads/'), $imagename);
            $gallary_name_id = $request->batch;
            $new = ['gallary_name_id' => $gallary_name_id, 'image' => $imagename];

            array_push($name, $new);
        }

        Gallery::insert($name);
        Session::flash('message', 'Image Upload Successfull');

        return redirect()->route('gallery.view');
    }
    public function GalleryImg()
    {
        $img = Gallery::get();
        $pic = $img->image;
        $endc = json_decode($pic);
        dd($endc);
    }
}
