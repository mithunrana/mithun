<?php

namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Blog;
use App\Category;
class BlogController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function index(){
        $Blogs =  Blog::where('Active_Status',1)->orderBy('id', 'ASC')->get();
        $New =   Blog::where('Active_Status',1)->orderBy('id', 'DESC')->skip(0)->take(1)->get();
        $FeaturesVideo =   Blog::where('Active_Status',1)->orderBy('id', 'DESC')->skip(1)->take(2)->get();
        $Categories = Category::get();
        return view('UI.blog',compact('Blogs','New','FeaturesVideo','Categories'));
    }


    public function blogView(){
        return view('UI.blogView');
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
            'video_url'=> $request->video_url,
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
        return redirect()->to('blog-manage')->with('message','Blog Added Successfully');
    }

    public function manage(){
        $Blogs = Blog::get();
        return view('Admin.blog-manage',compact('Blogs'));
    }

    public function edit($id){
        $Blog = Blog::findOrFail($id);
        return view('Admin.blog update',compact('Blog'));
    }

    public function update($id){
        $Blog = Blog::findOrFail($id);
        $Blog->browser_title = request('browser_title');
        $Blog->blog_title = request('blog_title');
        $Blog->permalink = request('permalink');
        $Blog->video_url = request('video_url');
        $Blog->embedded_video = request('embedded_video');
        $Blog->blog_details = request('blog_details');
        $Blog->category = request('category');
        $Blog->featured_image = request('featured_image');
        $Blog->seo_keyword = request('seo_keyword');
        $Blog->seo_description = request('seo_description');
        $Blog->imageAltText = request('imageAltText');
        $Blog->imageTitleText = request('imageTitleText');
        $Blog->save();
        return redirect()->to('blog-manage')->with('message','Blog Update Successfully');
    }


    public function delete($id){
        $Blog = Blog::find($id);
        $Blog->delete();
        return redirect()->to('blog-manage')->with('message','Blog delete Successfully');
    }


    public function blogActiveDeactive($status,$blogId){
        $portfolioId = $blogId;
        $status = $status;
        if($status==0){
            $Portfolio =  Blog::findOrFail($portfolioId);
            $CategoryId = $Portfolio->category;
            if($CategoryId==0){
                return redirect()->to('blog-manage')->with('message','Please Set Before Active Category');
            }else{
                $Portfolio =  Blog::findOrFail($portfolioId);
                $Portfolio->Active_Status = '1';
                $Portfolio->save();
                return redirect()->to('blog-manage')->with('message','Portfolio Active Successfully');
            }
        }else{
            $Portfolio =  Blog::findOrFail($portfolioId);
            $Portfolio->Active_Status = '0';
            $Portfolio->save();
            return redirect()->to('blog-manage')->with('message','Portfolio Deactive Successfully');
        }
    }

}
