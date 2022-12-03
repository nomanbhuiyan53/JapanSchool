<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function galleryName(){
        return $this->belongsTo(GallaryName::class,'gallary_name_id','id');
    }
}
