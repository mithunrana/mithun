<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('UI.blog');
    }


    public function blogView(){
        return view('UI.blogView');
    }

    public function manage(){
        return view('Admin.blog-manage');
    }

    public function create(){
        return view('Admin.blog-add');
    }

    public function store(Request $request){
        $userid = auth()->id();
        Blog::create([
            'browser_title' => $request->browser_title,
            'permalink' => $request->permalink,
            'blog_title' => $request->blog_title,
            'embedded_video' => $request->embedded_video,
            'category' => $request->category,
            'blog_details' => $request->blog_details,
            'seo_description' => $request->seo_description,
            'seo_keyword' => $request->seo_keyword,
            'featured_image' => $request->featured_image,
            'imageAltText' => $request->seo_description,
            'imageTitleText' => $request->imageTitleText,
            'featured_image' => $request->featured_image,
            'blog_poster' => $userid
        ]);
    }



}
