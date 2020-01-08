<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Qualification;
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
        return redirect()->to('service-manage')->with('message','Service Update Successfully');
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


    public function delete($id){
        $Qualification = Service::find($id);
        $Qualification->delete();
        return redirect()->to('service-manage')->with('message','Service delete Successfully');
    }

    public function activeDeactive($status,$serviceId){
        $portfolioId = $serviceId;
        $status = $status;
        if($status==0){
            $Portfolio =  Service::findOrFail($portfolioId);
            $Portfolio->Active_Status = '1';
            $Portfolio->save();
            return redirect()->to('service-manage')->with('message','Service Active Successfully');
        }else{
            $Portfolio =  Service::findOrFail($portfolioId);
            $Portfolio->Active_Status = '0';
            $Portfolio->save();
            return redirect()->to('service-manage')->with('message','Service Deactive Successfully');
        }
    }
}
