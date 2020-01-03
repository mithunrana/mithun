<?php

namespace App\Http\Controllers;

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
       Comment::Create($request->all());
        return redirect()->to('manage-comment')->with('message','Comment Added Successfully');
    }

    public function edit($id){
        $Comment = Comment::findOrFail($id);
        return view('Admin.comment-edit',compact('Comment'));
    }

    public function update($id)
    {
        $Comment = Comment::findOrFail($id);
        $Comment->Name = request('Name');
        $Comment->Designation = request('Designation');
        $Comment->Image = request('Image');
        $Comment->Comment = request('Comment');
        $Comment->save();
        return redirect()->to('manage-comment')->with('message','Comment update Successfully');
    }

    public function delete($id){
        $Comment = Comment::find($id);
        $Comment->delete();
        return redirect()->to('manage-comment')->with('message','Comment delete Successfully');
    }
}
