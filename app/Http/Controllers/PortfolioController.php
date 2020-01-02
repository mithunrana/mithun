<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Portfolio;
use App\PortfolioCategory;
class PortfolioController extends Controller
{
    public function index(){
        $Portfolios = Portfolio::get()->where('Active_Status',1);
       return view('UI.portfolio');
    }

    public function create(){
        return view('Admin.portfolio add');
    }

    public function store(Request $request){
     Portfolio::Create($request->all());
        //echo "hello world";
    }

    public function portfolioManage(){
        $PortfolioList = Portfolio::get();
        return view('Admin.portfoliomanage',compact('PortfolioList'));
    }


    public function portfolioEdit($id){
        $Portfolio = Portfolio::findOrFail($id);
        return view('Admin.portfolio-update',compact('Portfolio'));
    }

    public function portfolioUpdate($id){
        $Portfolio = Portfolio::findOrFail($id);
        $Portfolio->Portfolio_title = request('Portfolio_title');
        $Portfolio->BrowserTitle = request('BrowserTitle');
        $Portfolio->permalink = request('permalink');
        $Portfolio->category = request('category');
        $Portfolio->featured_image = request('featured_image');
        $Portfolio->SeoKeyword = request('SeoKeyword');
        $Portfolio->SeoDescription = request('SeoDescription');
        $Portfolio->FeaturedImageAltText = request('FeaturedImageAltText');
        $Portfolio->FeaturedImageTitleText = request('FeaturedImageTitleText');
        $Portfolio->MainContent = request('MainContent');
        $Portfolio->OpenContent = request('OpenContent');
        $Portfolio->save();
        return redirect()->to('portfolio-manage')->with('message','Portfolio Update Successfully');
    }




    public function portfolioCategory(){
        return view('Admin.portfolio category');
        //echo "hello world";
    }


    public function getAllCategory(){
        $categoryList =  PortfolioCategory::all();
        return response()->json($categoryList);
    }

    public function portfolioCategoryStore(Request $request){
            $Category = new PortfolioCategory([
                'CategoryName' => $request->input('CategoryName'),
                'CategoryUrl' => $request->input('CategoryUrl'),
                'CategorySeoKeyword' => $request->input('CategorySeoKeyword'),
                'CategorySeoDescription' => $request->input('CategorySeoDescription'),
                'CategoryBrowserTitle' => $request->input('CategoryBrowserTitle'),
            ]);
            $Category->save();
            return response()->json(['success'=>'Category Added Successfully...']);
    }

    public function portfolioCategoryUpdate(Request $r){
        if($r->has('id')){
            PortfolioCategory::find($r->input('id'))->update($r->all());
            return response()->json(['success'=>'Category Update Successfully...']);
        }
    }


}
