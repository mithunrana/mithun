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
}
