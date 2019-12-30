<?php

namespace App\Http\Controllers;

use App\AboutProfile;
use Illuminate\Http\Request;
use App\Service;
class UIHomeController extends Controller
{
    public function index(){
        $services = Service::get();
        $about = AboutProfile::first();
        return view('UI.index',compact('about','services'));
    }
}
