<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIHomeController extends Controller
{
    public function index(){
        return view('UI.index');
    }
}
