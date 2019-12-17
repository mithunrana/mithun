<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
        return view('Admin.Category');
    }

    public function  getAll(){
        $categoryList =  Category::all();
        return response()->json($categoryList);
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
}
