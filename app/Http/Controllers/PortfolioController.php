<?php

namespace App\Http\Controllers;

use App\AboutProfile;
use App\Blog;
use App\Category;
use App\Comment;
use App\Service;
use Illuminate\Http\Request;
use App\Portfolio;
use App\PortfolioCategory;
class PortfolioController extends Controller
{
    public function index(){
        $Portfolios = Portfolio::get()->where('Active_Status',1);
       return view('UI.portfolio',compact('Portfolios'));
    }

    public function singlePortfolio($url){
        $Comments = Comment::where('Active_Status',1)->get();
        $about = AboutProfile::first();
        $Portfolio = Portfolio::where('permalink',$url)->first();
        return view('UI.portfolio single',compact('Portfolio','about','Comments'));
    }

    public function create(){
        return view('Admin.portfolio add');
    }

    public function store(Request $request){
        $this->validate($request,[
            'featured_image' => 'required',
        ]);
     Portfolio::Create($request->all());
     return redirect()->to('portfolio-manage')->with('message','Portfolio Delete Successfully');
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


    public function portfolioDelete($id){
        $Portfolio = Portfolio::find($id);
        $Portfolio->delete();
        return redirect()->to('portfolio-manage')->with('message','Portfolio delete Successfully');
    }

    public function portfolioActiveDeactive($id,$portfolioid){
        $portfolioId = $portfolioid;
        $status = $id;
        if($status==0){
            $Portfolio =  Portfolio::findOrFail($portfolioId);
            $CategoryId = $Portfolio->category;
            if($CategoryId==0){
                return redirect()->to('portfolio-manage')->with('message','Please Set Before Active Category');
            }else{
                $Portfolio =  Portfolio::findOrFail($portfolioId);
                $Portfolio->Active_Status = '1';
                $Portfolio->save();
                return redirect()->to('portfolio-manage')->with('message','Portfolio Active Successfully');
            }
        }else{
            $Portfolio =  Portfolio::findOrFail($portfolioId);
            $Portfolio->Active_Status = '0';
            $Portfolio->save();
            return redirect()->to('portfolio-manage')->with('message','Portfolio Deactive Successfully');
        }
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


    public function portfolioCategoryDelete(Request $r){
        $Category =  PortfolioCategory::findOrFail($r->id);
        if(Portfolio::where('category',$r->id)->first()){
            $Portfolio = Portfolio::where('category',$r->id)->first();
            $Portfolio->Active_Status = '0';
            $Portfolio->category = '0';
            $Portfolio->save();
            $Category->delete();
        }else{
            $Category->delete();
        }
        return response()->json(['success'=>'Category delete Successfully...']);
    }
}
