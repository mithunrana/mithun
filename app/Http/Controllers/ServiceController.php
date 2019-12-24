<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
    public function index(){
        return view('UI.service');
    }

    public function serviceCreate(){
        return view('Admin.service add');
    }

    public function serviceStore(Request $request){
        Service::create($request->all());
    }
}
