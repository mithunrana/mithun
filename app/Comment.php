<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\images;
class Comment extends Model
{
    public function images(){
        return $this->belongsTo(images::class,'Image');
    }

   protected  $guarded=[];
}
