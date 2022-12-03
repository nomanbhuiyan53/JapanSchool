<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AllInfoController extends Controller
{
    public function InfoEditView($id){
          $data['editData'] = Info::find($id);
        return view('admin.page.info_edit_view',$data);
    }
    public function InfoDelete($id){
        Info::find($id)->delete();
        return redirect()->back();
    }
    Public function InfoUpdate(Request $request, $id){
        $data = Info::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->copyright = $request->copyright;
        $data->address = $request->address;
        $data->fb = $request->fb;

        if(!empty($request->file('logo'))){
            $file = $request->file('logo');
            @unlink(public_path('uploads/'.$data->logo));
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            // $file->move(public_path('uploads/'), $filename);
            $img = Image::make($file->getRealPath());
            // resize the image to a height of 200 and constrain aspect ratio (auto width)
            $img->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('uploads/'.$filename));
            $data['logo']= $filename;
        }
        $data->save();
        return redirect()->route('all.data');
    }



}
