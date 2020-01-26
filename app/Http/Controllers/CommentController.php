<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
   public function index(){
       $Comments = Comment::get();
       return view('Admin.comment manage',compact('Comments'));
   }

    public function add(){
        return view('Admin.comment add');
    }

    public function store(Request $request){
        $this->validate($request,[
            'Image' => 'required',
        ]);

       Comment::Create($request->all());
        return redirect()->to('admin/manage-comment')->with('message','Comment Added Successfully');
    }

    public function edit($id){
        $Comment = Comment::findOrFail($id);
        return view('Admin.comment-edit',compact('Comment'));
    }

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'Image' => 'required',
        ]);

        $Comment = Comment::findOrFail($id);
        $Comment->Name = request('Name');
        $Comment->Designation = request('Designation');
        $Comment->Image = request('Image');
        $Comment->Comment = request('Comment');
        $Comment->save();
        return redirect()->to('admin/manage-comment')->with('message','Comment update Successfully');
    }

    public function delete($id){
        $Comment = Comment::find($id);
        $Comment->delete();
        return redirect()->to('admin/manage-comment')->with('message','Comment delete Successfully');
    }

    public function activeDeactiveComment($status,$commentId){
        $portfolioId = $commentId;
        $status = $status;
        if($status==0){
            $Portfolio =  Comment::findOrFail($portfolioId);
            $Portfolio->Active_Status = '1';
            $Portfolio->save();
            return redirect()->to('admin/manage-comment')->with('message','Comment Active Successfully');
        }else{
            $Portfolio =  Comment::findOrFail($portfolioId);
            $Portfolio->Active_Status = '0';
            $Portfolio->save();
            return redirect()->to('admin/manage-comment')->with('message','Comment Deactive Successfully');
        }
    }
}
