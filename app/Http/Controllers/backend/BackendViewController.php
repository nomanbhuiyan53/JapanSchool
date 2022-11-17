<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class BackendViewController extends Controller
{
    public function LoginPage(){
        return view('admin.page.admin_login');
    }

    public function SliderView(){
        $data['allData'] = Slider::get();
        return view('admin.page.slider',$data);
    }


}
