@php
    $title = "Bangla Video Tutorial | Android Apps Development | Web Design";
    $keywords =  "bangla video tutorial, web design bangla video tutorial, web development bangla video tutorial, android apps development bangla video tutorial, seo bangla video tutorial";
    $description =  "Bangla video tutorial, web design bangla video tutorial, web development bangla video tutorial, seo bangla video tutorial, android apps development bangla video tutorial";
@endphp


@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');

    <!-- start banner Area -->
    <section class="relative about-banner">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 style="font-size:32px" class="text-white">
                        Bangla Video Tutorial
                    </h1>
                    <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>
                        <span class="lnr lnr-arrow-right"></span><a href="/bangla-video-tutorial">Tutorials</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start top-category-widget Area -->
    <section style="padding-top: 10px;" class="top-category-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($New as $Blog)
                        @php
                            $video_id = explode("?v=", $Blog->video_url);
                            $video_id = $video_id[1];
                            $thumbnail="https://img.youtube.com/vi/".$video_id."/mqdefault.jpg";
                        @endphp
                        <div style="background-color: #d8d8d8">
                        <div style="text-align:center;" class="single-cat-widget">
                            <div style="margin-bottom: 10px;" class="content relative">
                                <div class="overlay overlay-bg"></div>
                                <a href="tutorial/{{$Blog->permalink}}">
                                    <div class="thumb">
                                        <img style="max-height:350px;" class="content-image img-fluid d-block mx-auto" src="{{$thumbnail}}" alt="">
                                    </div>
                                    <div class="content-details">
                                        <img  style="height:60px;width:60px;" src="{{asset('UI')}}/img/download.png" alt="{{$Blog->imageAltText}}" title="{{$Blog->imageTitleText}}">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h2 style="padding:5px;font-size: 16px;font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif !important;">
                            <a href="tutorial/{{$Blog->permalink}}" style="text-decoration: none;font-size: 18px;color:black;">{{$Blog->blog_title}}</a>
                        </h2>
                        </div>
                        @endforeach
                </div>

                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 style="background-color: red;" class="category-title">Post Catgories</h4>
                            <ul class="cat-list">
                                <ul class="cat-list">
                                    @foreach($Categories as $Category)
                                        <li>
                                            <a style="color:black;" href="/{{$Category->CategoryUrl}}" class="d-flex justify-content-between">
                                                <p style="text-transform: capitalize;color:black;font-weight: bold;">{{$Category->CategoryName}}</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-category-widget Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <section class="top-category-widget-area pb-90 ">
                            <div class="row">
                                @foreach($Blogs as $Blog)
                                    @php
                                        $video_id = explode("?v=", $Blog->video_url);
                                        $video_id = $video_id[1];
                                        $thumbnail="https://img.youtube.com/vi/".$video_id."/mqdefault.jpg";
                                    @endphp
                                <div style="margin-top:20px;" class="col-lg-4 col-6">
                                    <div style="background-color: #d8d8d8;">
                                        <div style="text-align:center;" class="single-cat-widget">
                                            <div style="margin-bottom: 10px;" class="content relative">
                                                <div class="overlay overlay-bg"></div>
                                                <a  href="{{url('tutorial',[$Blog->permalink])}}">
                                                    <div class="thumb">
                                                       <img class="content-image img-fluid d-block mx-auto" src="{{$thumbnail}}" alt="{{$Blog->imageAltText}}" title="{{$Blog->imageTitleText}}">
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
            </div>
        </div>
    </section>
    <!-- End post-content Area -->

    <!-- start footer Area -->
    @include('UI.inc.footer-bar')
    <!-- end footer Area -->	

    @include('UI.inc.footersource')