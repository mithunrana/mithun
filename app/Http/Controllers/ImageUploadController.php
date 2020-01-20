<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;
use Validator;
class ImageUploadController extends Controller
{
    public function imageUpload(Request $request){

        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['success'=>'Please Insert Valid Image']);
        } else {
            $name  =  $request->image->getClientOriginalName();
            $findimages = 'images/'.$name;
            $check  = images::where('imageurl',$findimages)->first();
            if(!empty($check)){
                return response()->json(['success'=>'This name image already uploaded']);
            }else{
                images::create(['imageurl'=> $findimages]);
                $request->image->move(public_path('images'),$name);
                return response()->json(['success'=>'image uploaded successfully']);
            }
        }

    }

    public function imagelist(){
       $allimages =  images::all();
        return response()->json($allimages);
    }
}
