@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h6>This is me</h6>
                    <h1 style="margin-bottom:5px;">{{$about->Name}}</h1>
                    <h2 class="sub typed" style="font-size: 18px;margin-bottom:5px;text-transform: uppercase;color:#5f5f5f;height:20px;"></h2>
                    <p>
                        {{$about->ShortBrief}}
                    </p>
                    <a style="margin:5px 0px;" href="{{	$about->Discover_link}}" class="primary-btn text-uppercase">discover now</a>
                    <a style="margin:5px 0px;" href="{{asset('documents')}}/{{	$about->Download_link}}" class="primary-btn text-uppercase" download>Download Resume</a>
                    <ul style="margin-top: 10px;">
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a href="{{$about->Facebook_Link}}"><i id="icon-design" class="fa fa-facebook"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a href="{{$about->Twitter_Link}}"><i id="icon-design" class="fa fa-twitter"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a href="{{$about->Pinterest_Link}}"><i id="icon-design" class="fa fa-pinterest"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a href="{{$about->Linkedin_Link}}"><i id="icon-design" class="fa fa-linkedin"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a href="{{$about->Instagram_Link}}"><i id="icon-design" class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                    <img class="img-fluid" src="{{asset('UI')}}/img/hero-img.png" alt="">
                </div>
            </div>
        </div>					
    </section>
    <!-- End banner Area -->




    <!-- Start services Area -->
    <section style="background-image:url({{asset('UI')}}/img/about/service-background.jpg);background-repeat: no-repeat;
             background-size: 100% 100%;" class="services-area">
        <div style="background-color: rgba(0,0,0,0.5);padding: 120px 0px;" class="">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content  col-lg-7">
                        <div class="title text-center">
                            <h1 style="color:#FF5722" class="mb-10">My Offered Services</h1>
                            <p style="color:white;">At about this time of year, some months after New Year’s resolutions have been made and kept, or made and neglected.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr"><img src="{{$service->icon->imageurl}}" style="width:35px;height:35px;margin-bottom: 10px;"></span>
                                <a  href="#"><h4 style="color:#ff5722;">{{$service->service_title}}</h4></a>
                                <p style="color:black;">
                                    “It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.”
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-rocket"></span>
                                <a href="#"><h4 style="color:#ff5722;">Graphic Design</h4></a>
                                <p>
                                    You’ve heard the expression, “Just believe it and it will come.” Well, technically, that is true, however, ‘believing’ is not just thinking that.
                                </p>
                            </div>
                        </div>				
                    </div>														
                </div>	
            </div>
        </div>
    </section>
    <!-- End services Area -->	




    <!-- Start fact Area -->
    <section style="padding: 30px 0px;background-color:#FF5722 " id="facts-area">
        <div class="container">				
            <div class="row">
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">2536</h1>
                    <p>Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">6784</h1>
                    <p>Happy Clients</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">2239</h1>
                    <p>Cups of Coffee</p>
                </div>	
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">435</h1>
                    <p>Real Professionals</p>
                </div>												
            </div>
        </div>	
    </section>
    <!-- end fact Area -->	




    <!-- Start portfolio-area Area -->
    <section style="padding:30px 0px;" class="portfolio-area" id="portfolio">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div  class="title text-center">
                        <h1 style="color:#FF5722;" class="mb-10">Our Latest Featured Projects</h1>
                        <p style="color:#FF5722;">Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>

                <div class="row">
                    @foreach($Portfolios as $portfolio)
                        <div style="margin-bottom:20px;" class="col-sm-4">
                            <div class="work-box">
                                <div class="relative">
                                    <div class="thumb">
                                        <img class="image img-fluid" src="{{$portfolio->featuredimage->imageurl}}" alt="">
                                    </div>
                                </div>
                                <div style="margin-top: 10px;" class="p-inner">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h2 style="font-size:16px;">{{$portfolio->Portfolio_title}}</h2>
                                            <div class="w-more">
                                                <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                            </div>
                                        </div>
                                        <div  class="col-sm-2">
                                            <div style="float: right;" class="w-like">
                                                <div style="height:35px; width:35px;padding: 5px;border:2px solid black;border-radius: 50%;display:inline-block;">
                                                    <p style="text-align:center;"><i class="fa fa-plus"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom:20px;" class="col-sm-4">
                            <div class="work-box">
                                <div class="relative">
                                    <div class="thumb">
                                        <img class="image img-fluid" src="{{$portfolio->featuredimage->imageurl}}" alt="">
                                    </div>
                                </div>
                                <div style="margin-top: 10px;" class="p-inner">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h2 style="font-size:16px;">{{$portfolio->Portfolio_title}}</h2>
                                            <div class="w-more">
                                                <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                            </div>
                                        </div>
                                        <div  class="col-sm-2">
                                            <div style="float: right;" class="w-like">
                                                <div style="height:35px; width:35px;padding: 5px;border:2px solid black;border-radius: 50%;display:inline-block;">
                                                    <p style="text-align:center;"><i class="fa fa-plus"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom:20px;" class="col-sm-4">
                            <div class="work-box">
                                <div class="relative">
                                    <div class="thumb">
                                        <img class="image img-fluid" src="{{$portfolio->featuredimage->imageurl}}" alt="">
                                    </div>
                                </div>
                                <div style="margin-top: 10px;" class="p-inner">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h2 style="font-size:16px;">{{$portfolio->Portfolio_title}}</h2>
                                            <div class="w-more">
                                                <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                            </div>
                                        </div>
                                        <div  class="col-sm-2">
                                            <div style="float: right;" class="w-like">
                                                <div style="height:35px; width:35px;padding: 5px;border:2px solid black;border-radius: 50%;display:inline-block;">
                                                    <p style="text-align:center;"><i class="fa fa-plus"></i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>
    <!-- End portfolio-area Area -->	




    <!-- Start testimonial Area -->
    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Client’s Feedback About Me</h1>
                        <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">
                    @foreach($Comments as $Comment)
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img style="max-width:200px;"  src="/{{$Comment->images->imageurl}}" alt="">
                            </div>
                            <div class="desc">
                                <p>
                                    {{$Comment->Comment}}
                                </p>
                                <h4>{{$Comment->Name}}</h4>
                                <p>{{$Comment->Designation}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->
    <!-- End testimonial Area -->
		




    <!-- Start recent-blog Area -->
    <section style="padding: 40px 0px;" class="recent-blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 pb-30 header-text">
                    <h1 style="color:#FF5722">Latest posts from our blog</h1>
                    <p style="color:#FF5722">
                        You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
                    </p>
                </div>
            </div>
            <div class="row">

                @foreach($Blogs as $Blog)

                @php
                   $video_id = explode("?v=", $Blog->video_url);
                   $video_id = $video_id[1];
                   $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
                @endphp

                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                       <!-- <img class="f-img img-fluid mx-auto" src="{{asset('UI')}}/img/b1.jpg" alt="">-->
                       <img class="f-img img-fluid mx-auto" src="{{$thumbnail}}" alt="">
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <img class="img-fluid" src="{{asset('UI')}}/img/user.png" alt="">
                            <a href="#"><span>Mark Wiens</span></a>
                        </div>
                        <div class="meta">
                            13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>							
                    <a href="#">
                        <h4>Break Through Self Doubt And Fear</h4>
                    </a>
                </div>
                @endforeach
            </div>
        </div>	
    </section>
    <!-- end recent-blog Area -->		




    <!-- Start brands Area -->
    <!--<section style="padding:70px 0px;background-color: #ff5722">
        <div class="container">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('UI')}}/img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('UI')}}/img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('UI')}}/img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('UI')}}/img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('UI')}}/img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- End brands Area -->


    <!-- start footer Area -->
    @include('UI.inc.footer-bar');
    <!-- end footer Area -->
    @include('UI.inc.footersource');
    <script>
        $(document).ready(function(){
            var typed = new Typed('.typed', {
                strings: ['Web Developer','Web Designer','SEO Expert','Graphics Designer','Digital Marketer','Youtuber'],
                typeSpeed: 60,
                showCursor:false,
                loop:true
            });
        });
    </script>
</body>
</html>