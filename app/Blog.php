<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\images;
class Blog extends Model
{
  protected $guarded=[];

    public function featuredimage(){
        return $this->belongsTo(images::class,'featured_image');
    }

}
