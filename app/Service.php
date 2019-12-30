<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\images;
class Service extends Model
{
    protected $guarded=[];

    public function featuredimage(){
        return $this->belongsTo(images::class,'featured_image');
    }

    public function icon(){
        return $this->belongsTo(images::class,'ServiceIcon');
    }

}
