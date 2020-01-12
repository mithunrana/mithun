<?php

namespace App\Http\Controllers;

use App\AboutProfile;
use App\Comment;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Service;
use App\Blog;
class UIHomeController extends Controller
{
    public function index(){


        $services = Service::where('Active_Status',1)->skip(0)->take(5)->get();
        $about = AboutProfile::first();
        $Portfolios = Portfolio::where('Active_Status',1)->skip(0)->take(6)->get();
        $Blogs = Blog::where('Active_Status',1)->skip(0)->take(6)->get();
        $Comments = Comment::where('Active_Status',1)->get();
        return view('UI.index',compact('about','services','Portfolios','Blogs','Comments'));
    }
}
