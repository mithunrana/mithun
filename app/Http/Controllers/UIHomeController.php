<?php

namespace App\Http\Controllers;

use App\AboutProfile;
use Illuminate\Http\Request;

class UIHomeController extends Controller
{
    public function index(){
        $about = AboutProfile::first();
        return view('UI.index',compact('about'));
    }
}
