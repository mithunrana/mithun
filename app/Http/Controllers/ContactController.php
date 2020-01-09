<?php

namespace App\Http\Controllers;

use App\AboutProfile;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index(){
       $About = AboutProfile::first();
       return view('UI.contact',compact('About'));
   }
}
