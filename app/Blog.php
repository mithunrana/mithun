<?php

namespace App;

use App\images;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
class Blog extends Model
{
  protected $guarded=[];

    public function aboutProfile(){
        return $this->belongsTo(User::class,'blog_poster');
    }

    public function featuredimage(){
        return $this->belongsTo(images::class,'featured_image');
    }

    public function Category(){
        return $this->belongsTo(Category::class,'category');
    }

}
