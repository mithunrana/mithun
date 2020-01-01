<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
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

}
