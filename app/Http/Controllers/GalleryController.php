<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $Galleries = Gallery::where('Active_Status',1)->get();
        return view('UI.gallery',compact('Galleries'));
    }


    public function create(){
        return view('Admin.gallery-create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'imageAltText' => 'min:2|max:120',
            'imageTitleText' => 'min:2|max:120',
            'image' => 'required',
        ]);
        Gallery::create([
            'image' => $request->image,
            'imageAltText' => $request->imageAltText,
            'imageTitleText' => $request->imageTitleText,
            'EventNameOFImage' => $request->EventNameOFImage,
        ]);
        return redirect()->to('admin/manage-gallery')->with('message','Image Added Successfully');
    }

    public function manage(){
        $Galleries = Gallery::get();
        return view('Admin.gallery-manage',compact('Galleries'));
    }

    public function delete($id){
        $Gallery = Gallery::find($id);
        $Gallery->delete();
        return redirect()->to('admin/manage-gallery')->with('message','Image Delete Successfully');
    }

    public function activeDeactive($status,$postid){
        if($status==0){
            $Gallery =  Gallery::findOrFail($postid);
            $Gallery->Active_Status = '1';
            $Gallery->save();
            return redirect()->to('admin/manage-gallery')->with('message','Image Active Successfully');
        }
        else{
            $Gallery =  Gallery::findOrFail($postid);
            $Gallery->Active_Status = '0';
            $Gallery->save();
            return redirect()->to('admin/manage-gallery')->with('message','Image Deactive Successfully');
        }
    }

}
