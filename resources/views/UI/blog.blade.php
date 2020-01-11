@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');

    <!-- Start top-category-widget Area -->
    <section class="top-category-widget-area pt-90">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    @foreach($New as $Blog)
                        @php
                            $video_id = explode("?v=", $Blog->video_url);
                            $video_id = $video_id[1];
                            $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
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
                                        <img  style="height:60px;width:60px;" src="{{asset('UI')}}/img/download.png">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h2 style="padding:5px;font-size: 16px;font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif !important;">
                            <a href="#" style="text-decoration: none;font-size: 18px;color:black;">{{$Blog->blog_title}}</a>
                        </h2>
                        </div>
                        @endforeach
                </div>

                <div class="col-lg-3">
                    <div class="row">
                        @foreach($FeaturesVideo as $FeatureVideo)
                            @php
                                $video_id = explode("?v=", $FeatureVideo->video_url);
                                $video_id = $video_id[1];
                                $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
                            @endphp
                        <div class="single-cat-widget col-sm-12">
                            <div class="content relative">
                                <a href="#">
                                    <div class="thumb">
                                        <img class="content-image img-fluid d-block mx-auto" src="{{$thumbnail}}" alt="">
                                    </div>
                                </a>
                                <h2 style="padding:5px;font-size: 16px;font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif !important;">
                                    <a>{{$FeatureVideo->blog_title}}</a>
                                </h2>
                            </div>
                        </div>
                        @endforeach
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
                                                <a href="#">
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

                    <div class="container">
                        <div class="row">
                            <nav style="margin-bottom: 15px;margin-top: 15px;" class="d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a href="#" class="page-link">01</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                                    <li class="page-item"><a href="#" class="page-link">09</a></li>
                                    <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                    </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 sidebar-widgets">
                    <div style="margin-top: 20px;" class="widget-wrap">
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Post Catgories</h4>
                            <ul class="cat-list">
                                @foreach($Categories as $Category)
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p> <a href="{{$Category->CategoryUrl}}">{{$Category->CategoryName}}</a></p>
                                            <!--<p>37</p>-->
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-sidebar-widget ads-widget">
                            <a href="#"><img class="img-fluid" src="{{asset('UI')}}/img/blog/ads-banner.jpg" alt=""></a>
                        </div>
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Posts</h4>
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

                        <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="newsletter-title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="col-autos">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
                                    </div>
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">
                                You can unsubscribe at any time
                            </p>
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