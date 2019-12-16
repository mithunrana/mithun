<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;
class ImageUploadController extends Controller
{
    public function imageUpload(Request $request){
        $name  =  $request->image->getClientOriginalName();
        $findimages = 'images/'.$name;
        $check  = images::where('imageurl',$findimages)->first();
        if(!empty($check)){
            return response()->json(['success'=>'This name image already inserted.']);
        }else{
            images::create(['imageurl'=> $findimages]);
            $request->image->move(public_path('images'),$name);
            return response()->json(['success'=>'You have successfully upload image.']);
        }
    }

    public function imagelist(){
       $allimages =  images::all();
        return response()->json($allimages);
    }
}
