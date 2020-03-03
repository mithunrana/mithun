@php
$title = $BlogDetails->browser_title;
$keywords =  $BlogDetails->seo_keyword;
$description =  $BlogDetails->seo_description;
$image = $BlogDetails->featuredimage->imageurl;
@endphp

@include('UI.inc.headersource');
    <body>
    <!--===================== Facebook Share Api SDK START HERE=================================-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=308590786521219&autoLogAppEvents=1"></script>
    <!--===================== Facebook Share Api SDK START HERE=================================-->

        @include('UI.inc.menubar');
        <!-- start banner Area -->
        <section class="relative about-banner">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 style="font-size:32px" class="text-white">
                            {{$BlogDetails->blog_title}}
                        </h1>
                        <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>
                            <span class="lnr lnr-arrow-right"></span>
                            <a href="{{url('bangla-video-tutorial')}}">Tutorial</a>
                            <span class="lnr lnr-arrow-right"></span>
                            <a href="{{$BlogDetails->permalink}}">{{$BlogDetails->blog_title}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start post-content Area -->
        <section class="post-content-area single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                {!!html_entity_decode($BlogDetails->embedded_video)!!}
                            </div>
                            <div class="col-lg-3  col-md-3 meta-details">
                                <ul class="tags">
                                    <li><a href="#">{{$BlogDetails->Category->CategoryName}}</a></li>
                                </ul>
                                <div class="user-details row">
                                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$BlogDetails->aboutProfile->name}}</a> <span class="lnr lnr-user"></span></p>
                                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$BlogDetails->created_at->diffForHumans()}}</a> <span class="lnr lnr-calendar-full"></span></p>

                                    <div style="margin-bottom: 10px;" class="youtube-subscribe-button">
                                        <script src="https://apis.google.com/js/platform.js"></script>
                                        <div class="g-ytsubscribe" data-channelid="UCdS11xOc5ymsmBjGM5lN2qA" data-layout="full" data-count="hidden"></div>
                                    </div>

                                    <div class="fb-like"
                                         data-href="@php echo url()->current(); @endphp"
                                         data-layout="standard"
                                         data-action="like"
                                         data-size="large "
                                         data-show-faces="true">
                                    </div>
                                    <div class="fb-share-button"
                                         data-href="@php echo url()->current(); @endphp"
                                         mobile_iframe="true"
                                         data-layout="button_count">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <h3 class="mt-20 mb-20">{{$BlogDetails->blog_title}}</h3>
                                <p style="text-align: justify;">
                                    {!!html_entity_decode($BlogDetails->blog_details)!!}
                                </p>
                            </div>
                        </div>
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
                                    @foreach($PopularPosts as $PopularPost)
                                        @php
                                            $video_id = explode("?v=", $PopularPost->video_url);
                                            $video_id = $video_id[1];
                                            $thumbnail="https://img.youtube.com/vi/".$video_id."/mqdefault.jpg";
                                        @endphp
                                        <div class="single-post-list d-flex flex-row align-items-center">
                                            <div class="thumb">
                                                <img class="img-fluid" src="{{$thumbnail}}" alt="{{$PopularPost->imageAltText}}" title="{{$PopularPost->imageTitleText}}">
                                            </div>
                                            <div class="details">
                                                <h4 style="font-size:1.17em">
                                                    <a style="color:black;" href="{{url('tutorial',[$PopularPost->permalink])}}" style="text-decoration: none;font-size: 18px;text-align: left;">{{str_limit($PopularPost->blog_title,45)}}</a></h4>
                                                <p>{{$PopularPost->created_at->diffForHumans()}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End post-content Area -->

        <!-- start footer Area -->
        @include('UI.inc.footer-bar')
        <!-- end footer Area -->

@include('UI.inc.footersource')