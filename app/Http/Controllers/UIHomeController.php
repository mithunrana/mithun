<?php

namespace App\Http\Controllers;

use App\AboutProfile;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Service;
class UIHomeController extends Controller
{
    public function index(){
        $services = Service::where('Active_Status',1)->skip(0)->take(5)->get();
        $about = AboutProfile::first();
        $Portfolios = Portfolio::get()->where('Active_Status',1);
        return view('UI.index',compact('about','services','Portfolios'));
    }
}
