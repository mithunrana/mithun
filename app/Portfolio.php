<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function featuredimage(){
        return $this->belongsTo(images::class,'featured_image');
    }

    protected $guarded=[];
}
