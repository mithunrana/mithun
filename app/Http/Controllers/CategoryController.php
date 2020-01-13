<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;
class CategoryController extends Controller
{
    public function index(){
        return view('Admin.Category');
    }

    public function  getAll(){
        $categoryList =  Category::all();
        return response()->json($categoryList);
    }

    public function categoryNameCheck(Request $request){
        $CategoryName = $request->get('name');
        if(Category::where('CategoryName',$CategoryName)->first()){
            return response()->json('get');
        }else{
            return response()->json('not get');
        }
    }

    public function store(Request $request){
        $Category = new Category([
            'CategoryName' => $request->input('CategoryName'),
            'CategoryUrl' => $request->input('CategoryUrl'),
            'CategorySeoDescription' => $request->input('CategorySeoDescription'),
            'CategorySeoKeyword' => $request->input('CategorySeoKeyword'),
            'CategoryBrowserTitle' => $request->input('CategoryBrowserTitle'),
        ]);
        $Category->save();
        return response()->json(['success'=>'Category Added Successfully...']);
    }

    public function categoryUpdate(Request $r){
        if($r->has('id')){
            Category::find($r->input('id'))->update($r->all());
            return response()->json(['success'=>'Category Update Successfully...']);
        }
    }

    public function categoryDelete(Request $r){
        $Category =  Category::findOrFail($r->id);
        if(Blog::where('category',$r->id)->first()){
            $Blog = Blog::where('category',$r->id)->first();
            $Blog->Active_Status = '0';
            $Blog->category = '0';
            $Blog->save();
            $Category->delete();
        }else{
            $Category->delete();
        }
        return response()->json(['success'=>'Category delete Successfully...']);
    }
}
