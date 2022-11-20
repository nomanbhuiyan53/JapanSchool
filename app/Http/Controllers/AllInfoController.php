<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

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



}
