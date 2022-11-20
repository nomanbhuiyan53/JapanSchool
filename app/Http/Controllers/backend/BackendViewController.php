<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BackendViewController extends Controller
{
    public function LoginPage(){
        return view('admin.page.admin_login');
    }

    public function SliderView(){
        $data['allData'] = Slider::get();
        return view('admin.page.slider',$data);
    }

    public function SliderAdd(Request $request){
        $data = new Slider();
        $data->title = $request->title;
        if (!empty($request->file('image'))) {
            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.' . $extension;
            $file->move(public_path('uploads/'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->back();
    }
    public function AlldataView(){
        $data['alldata'] = Info::get();
        return view('admin.page.all_info',$data);
    }
    public function AlldataAdd(){
        return view('admin.page.info_add');
    }
    // all information data insart ---
    public function InfoAdd(Request $request){

        // $validated = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required',
        //     'mobile' => 'required',
        //     'address' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:1048',
        // ]);
        $data = new Info();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->copyright = $request->copyright;
        $data->address = $request->address;
        $data->fb = $request->fb;

        if(!empty($request->file('logo'))){
            $file = $request->file('logo');
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
