<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function featuredimage(){
        return $this->belongsTo(images::class,'featured_image');
    }

    public function portfolioCategory(){
        return $this->belongsTo(PortfolioCategory::class,'category');
    }


    protected $guarded=[];
}
