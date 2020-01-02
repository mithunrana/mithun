<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
    public function index(){
        $service = Service::first();
        return view('UI.service',compact('service'));
    }

    public function serviceCreate(){
        return view('Admin.service add');
    }

    public function serviceStore(Request $request){
        Service::create($request->all());
    }

    public function serviceManage(){
       $ServiceList =  Service::get();
        return view('Admin.service manage',compact('ServiceList'));
    }

    public function edit($id){
        $Service =  Service::findOrFail($id);
        return view('Admin.service edit',compact('Service'));
    }

    public function update($id){
        $Service =  Service::findOrFail($id);
        $Service->BrowserTitle = request('BrowserTitle');
        $Service->permalink = request('permalink');
        $Service->featured_image = request('featured_image');
        $Service->ServiceIcon = request('ServiceIcon');
        $Service->SeoKeyword = request('SeoKeyword');
        $Service->SeoDescription = request('SeoDescription');
        $Service->FeaturedImageAltText = request('FeaturedImageAltText');
        $Service->FeaturedImageTitleText = request('FeaturedImageTitleText');
        $Service->MainContent = request('MainContent');
        $Service->OpenContent = request('OpenContent');
        $Service->save();
        return redirect()->to('service-manage')->with('message','Service Update Successfully');
    }
}
