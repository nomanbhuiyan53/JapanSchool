<?php

use App\Models\Gallery;
use App\Models\Info;
use App\Models\Slider;

   
    function sliderData(){
        $data = Slider::get();
        return $data;
    }
    function MainData(){
        $data = Info::get()->first();
        return $data;
    }
    function getGalleryImage($id){
       return Gallery::where('gallary_name_id','=',$id)->get();
    }
    function imageGallery(){
        return Gallery::get();
    }

?>