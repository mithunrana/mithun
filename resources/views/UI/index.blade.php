
@php
    $title = "Mithun Rana | Software Engineer Bangladesh And Graphics Designer";
    $keywords =  "md mithun rana, mithun rana, software engineer mithun rana, software engineer in bangladesh, top ten software engineer in bangaldesh,
    who is mithun rana, mithun rana address, mtihun rana contact, how to contact with mithun rana,web developer mithun rana, web designer mithun rana, web designer in bangladesh";
    $description =  "Mithun Rana Software Engineer In Bangladesh, I am fullstack web developer i have 3year+ experience in web design and development, any body can hire me for web design and development
    Graphics designer bangaldesh, seo service provider bangladesh";
@endphp


@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');

    <!-- start banner Area -->
   <section style="margin-top: 60px;" class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h6>This is me</h6>
                    <h1 style="margin-bottom:5px;">{{$about->Name}}</h1>
                    <h2 class="sub typed" style="font-size: 18px;margin-bottom:5px;text-transform: uppercase;color:#5f5f5f;height:20px;"></h2>
                    <p>
                        {{$about->ShortBrief}}
                    </p>
                    <a style="margin:5px 0px;" href="{{asset('')}}{{$about->Discover_link}}" class="primary-btn text-uppercase">discover now</a>
                    <a style="margin:5px 0px;" href="{{asset('documents')}}/{{$about->Download_link}}" class="primary-btn text-uppercase" download>Download Resume</a>
                    <ul style="margin-top: 10px;">
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a target="_blank" href="{{$about->Facebook_Link}}"><i id="icon-design" class="fa fa-facebook"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a target="_blank" href="{{$about->Twitter_Link}}"><i id="icon-design" class="fa fa-twitter"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a target="_blank" href="{{$about->Pinterest_Link}}"><i id="icon-design" class="fa fa-pinterest"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a target="_blank" href="{{$about->Linkedin_Link}}"><i id="icon-design" class="fa fa-linkedin"></i></a></li>
                        <li style="list-style:none;display: inline-block;margin: 0 3px;"><a target="_blank" href="{{$about->Instagram_Link}}"><i id="icon-design" class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                    <img style="margin-top: 10px;margin-bottom: 10px;" class="img-fluid" @isset($about->profileImage1) src="/{{$about->profileImage1->imageurl}}" @endisset src="/images/default-image.png" title="{{$about->imageTitleText}}" alt="{{$about->imageAltText}}">
                </div>
            </div>
        </div>					
    </section>
    <!-- End banner Area -->




    <!-- Start services Area -->
    <section style="background-image:url({{asset('')}}images/service-background.jpg);background-repeat: no-repeat;
             background-size: 100% 100%;" class="services-area">
        <div style="background-color: rgba(0,0,0,0.5);padding: 120px 0px;" class="">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content  col-lg-7">
                        <div class="title text-center">
                            <h1 style="color:#FF5722" class="mb-10">My Offered Services</h1>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                                <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr">
                                    <a href="service/{{$service->permalink}}">
                                        <img src="{{$service->icon->imageurl}}" style="width:35px;height:35px;margin-bottom: 10px;" alt="{{$service->FeaturedImageAltText}}" title="{{$service->FeaturedImageTitleText}}">
                                    </a>
                                </span>
                                <a  href="service/{{$service->permalink}}"><h4 style="color:#ff5722;">{{$service->service_title}}</h4></a>
                                <p style="color:black;">
                                    {{str_limit($service->MainContent,100)}}
                                </p>
                                </div>
                        </div>
                    </div>
                    @endforeach
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
                    <h1 class="counter">{{$about->CompleateProject}}</h1>
                    <p>Compleated Project</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">{{$about->HappyClient}}</h1>
                    <p>Happy Client</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">{{$about->Experience}}</h1>
                    <p>Experience Of Year</p>
                </div>	
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">{{$about->TotalSkillOfWork}}</h1>
                    <p>Total Skill Of Work</p>
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
                        <h1 style="color:#FF5722;" class="mb-10">My Latest Featured Projects</h1>
                        <p style="color:#FF5722;">Here is my latest some compleated project.</p>
                    </div>
                </div>
            </div>

                <div class="row">
                    @foreach($Portfolios as $portfolio)
                        <div style="margin-bottom:20px;" class="col-sm-4">
                            <div class="work-box">
                                <div class="relative">
                                    <div class="thumb">
                                        <a data-magnify="gallery" href="{{asset('')}}{{$portfolio->featuredimage->imageurl}}" data-caption="{{$portfolio->Portfolio_title}}">
                                        <img style="height:250px;" class="image img-fluid" src="{{$portfolio->featuredimage->imageurl}}" alt="{{$portfolio->FeaturedImageAltText}}" title="{{$portfolio->FeaturedImageTitleText}}">
                                        </a>
                                    </div>
                                </div>
                                <div style="margin-top: 10px;" class="p-inner">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <h2 style="font-size:16px;"><a style="color:black;" href="portfolio/{{$portfolio->permalink}}">{{$portfolio->Portfolio_title}}</a></h2>
                                            <div class="w-more">
                                                <span style="color:red;">{{$portfolio->portfolioCategory->CategoryName}}</span>  <span style="float:right;" class="w-date">{{$portfolio->created_at->diffForHumans()}}</span>
                                            </div>
                                        </div>
                                        <div  class="col-sm-2">
                                            <div style="float: right;" class="w-like">
                                                <a data-magnify="gallery" href="{{asset('')}}{{$portfolio->featuredimage->imageurl}}" data-caption="{{$portfolio->Portfolio_title}}">
                                                    <div style="height:35px; width:35px;padding: 5px;border:2px solid #FF5722;border-radius: 50%;display:inline-block;">
                                                        <p style="text-align:center;"><i style="color:#FF5722;" class="fa fa-plus"></i></p>
                                                    </div>
                                                </a>
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
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Client’s Feedback About Me</h1>
                        <p>There are some testimonials from my clients i have got..</p>
                    </div>
                </div>
            </div>
            <div style="border: 2px solid #ff5722;" class="row">
                <div class="active-testimonial">
                    @foreach($Comments as $Comment)
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img style="width:85px;"  src="/{{$Comment->images->imageurl}}" alt="">
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
		




    <!-- Start recent-blog Area -->
    <section style="padding: 40px 0px;" class="recent-blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 pb-30 header-text">
                    <h1 style="color:#FF5722">Latest posts from My blog</h1>
                </div>
            </div>
            <div class="row">
                @foreach($Blogs as $Blog)

                @php
                   $video_id = explode("?v=", $Blog->video_url);
                   $video_id = $video_id[1];
                   $thumbnail="http://img.youtube.com/vi/".$video_id."/mqdefault.jpg";
                @endphp

                <div style="margin-top: 20px;" class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                       <!-- <img class="f-img img-fluid mx-auto" src="{{asset('UI')}}/img/b1.jpg" alt="">-->
                       <a href="tutorial/{{$Blog->permalink}}">
                           <img class="f-img img-fluid mx-auto" src="{{$thumbnail}}" alt="{{$Blog->imageAltText}}" title="{{$Blog->imageTitleText}}">
                       </a>
                    </div>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div>
                            <a href="{{$Blog->Category->CategoryUrl}}"><span>{{$Blog->Category->CategoryName}}</span></a>
                        </div>
                        <div class="meta">
                            {{$Blog->created_at->diffForHumans()}}
                        </div>
                    </div>							
                    <a href="#">
                        <h4><a href="tutorial/{{$Blog->permalink}}">{{$Blog->blog_title}}</a></h4>
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
    @include('UI.inc.footer-bar')
    <!-- end footer Area -->
    @include('UI.inc.footersource')
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
    <script>
        $('[data-magnify]').magnify({
            headToolbar: [
                'minimize',
                'maximize',
                'close'
            ],
            footToolbar: [
                'prev',
                'next',
                'zoomIn',
                'zoomOut',
                'fullscreen',
                'actualSize',
                'rotateLeft',
                'rotateRight'
            ],
            modalWidth: 400,
            modalHeight: 400
        });

    </script>
</body>
</html>