@include('UI.inc.headersource');
<body>
@include('UI.inc.menubar');

<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                   TEST
                </h1>
                <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>
                    <span class="lnr lnr-arrow-right"></span><a href="{{$Category->CategoryUrl}}">{{$Category->CategoryName}}</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start post-content Area -->
<section style="margin-top: 70px;" class="post-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <section class="top-category-widget-area pb-90 ">
                    <div class="row">
                        @foreach($Blogs as $Blog)
                            @php
                                $video_id = explode("?v=", $Blog->video_url);
                                $video_id = $video_id[1];
                                $thumbnail="http://img.youtube.com/vi/".$video_id."/mqdefault.jpg";
                            @endphp
                            <div style="margin-top:20px;" class="col-lg-6 col-6">
                                <div style="background-color: #d8d8d8;">
                                    <div style="text-align:center;" class="single-cat-widget">
                                        <div style="margin-bottom: 10px;" class="content relative">
                                            <div class="overlay overlay-bg"></div>
                                            <a href="{{url('tutorial',[$Blog->permalink])}}" >
                                                <div class="thumb">
                                                    <img class="content-image img-fluid d-block mx-auto" src="{{$thumbnail}}" alt="">
                                                </div>
                                                <div class="content-details">
                                                    <img  style="height:40px;width:40px;" src="{{asset('UI')}}/img/download.png">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <h2 style="padding:5px;font-size: 16px;font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif !important;">
                                        <a style="color:black;" href="{{url('tutorial',[$Blog->permalink])}}" style="text-decoration: none;font-size: 18px;text-align: left;">{{$Blog->blog_title}}</a>
                                    </h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>


            <div class="col-lg-4 sidebar-widgets">
                <div  class="widget-wrap">
                    <div class="single-sidebar-widget post-category-widget">
                        <h4 style="background-color: red;" class="category-title">Post Catgories</h4>
                        <ul class="cat-list">
                            <ul class="cat-list">
                                @foreach($Categories as $Category)
                                    <li>
                                        <a href="/{{$Category->CategoryUrl}}" class="d-flex justify-content-between">
                                            <p style="text-transform: capitalize;">{{$Category->CategoryName}}</p>
                                            <p>@php
                                                    echo count(App\Blog::where('category',$Category->id)->get());
                                                @endphp
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </ul>
                    </div>
                    <div class="single-sidebar-widget ads-widget">
                        <a href="#"><img class="img-fluid" src="{{asset('UI')}}/img/blog/ads-banner.jpg" alt=""></a>
                    </div>
                    <div class="single-sidebar-widget popular-post-widget">
                        <h4 style="background-color: red;" class="popular-title">Popular Posts</h4>
                        <div class="popular-post-list">
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="single-post-list d-flex flex-row align-items-center">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp4.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="blog-single.html"><h6>Asteroids telescope</h6></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End post-content Area -->

<!-- start footer Area -->
@include('UI.inc.footer-bar');
<!-- end footer Area -->

@include('UI.inc.footersource');