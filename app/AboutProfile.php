<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\images;
class AboutProfile extends Model
{
    public function profileImage1(){
        return $this->belongsTo(images::class,'image1');
    }

    public function profileImage2(){
        return $this->belongsTo(images::class,'image2');
    }

    protected $guarded=[];
}
