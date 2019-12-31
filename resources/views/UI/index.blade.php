@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h6>This is me</h6>
                    <h1>{{$about->Name}}</h1>
                    <p>
                        You will begin to realise why this exercise is called the Dickens Pattern with reference to the ghost showing Scrooge some different futures.
                    </p>
                    <a href="{{	$about->Discover_link}}" class="primary-btn text-uppercase">discover now</a>
                    <a href="#" class="primary-btn text-uppercase">Download Resume</a>
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
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr"><img src="{{$service->icon->imageurl}}" style="width:30px;height: 20px"></span>
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
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-laptop-phone"></span>
                                <a href="#" style="color:#ff5722;"><h4 style="color:#ff5722;">Web Development</h4></a>
                                <p>
                                    If you are an entrepreneur, you know that your success cannot depend on the opinions of others. Like the wind, opinions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-camera"></span>
                                <a href="#" style="color:#ff5722;"><h4 style="color:#ff5722;">Photography</h4></a>
                                <p>
                                    Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;" class="lnr lnr-picture"></span>
                                <a href="#" style="color:#ff5722;"><h4 style="color:#ff5722;">Clipping Path</h4></a>
                                <p>
                                    Hypnosis quit smoking methods maintain caused quite a stir in the medical world over the last two decades. There is a lot of argument.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="background-color:white;">
                            <div class="single-services">
                                <span style="background-color:#FF5722;color: white;padding: 15px;"  class="lnr lnr-tablet"></span>
                                <a style="color:#ff5722;" href="#"><h4 style="color:#ff5722;">Apps Interface</h4></a>
                                <p>
                                    Do you sometimes have the feeling that you’re running into the same obstacles over and over again? Many of my conflicts.
                                </p>
                            </div>
                        </div>
                    </div>
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
                                    <img class="image img-fluid" src="{{asset('UI')}}/img/imagetest.jpg" alt="">
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 style="font-size: 1.2rem;">{{$portfolio->Portfolio_title}}</h2>
                                        <div class="w-more">
                                            <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-4">
                                        <div style="float: right;margin-right: 10px;" class="w-like">
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
                    <div style="margin-bottom:20px;" class="col-sm-4">
                        <div class="work-box">
                            <div class="relative">
                                <div class="thumb">
                                    <img class="image img-fluid" src="{{asset('UI')}}/img/imagetest.jpg" alt="">
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 style="font-size: 1.2rem;">Lorem impsum dolor</h2>
                                        <div class="w-more">
                                            <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-4">
                                        <div style="float: right;margin-right: 10px;" class="w-like">
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
                                    <img class="image img-fluid" src="{{asset('UI')}}/img/imagetest.jpg" alt="">
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 style="font-size: 1.2rem;">Lorem impsum dolor</h2>
                                        <div class="w-more">
                                            <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-4">
                                        <div style="float: right;margin-right: 10px;" class="w-like">
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
                                    <img class="image img-fluid" src="{{asset('UI')}}/img/imagetest.jpg" alt="">
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 style="font-size: 1.2rem;">Lorem impsum dolor</h2>
                                        <div class="w-more">
                                            <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-4">
                                        <div style="float: right;margin-right: 10px;" class="w-like">
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
                                    <img class="image img-fluid" src="{{asset('UI')}}/img/imagetest.jpg" alt="">
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 style="font-size: 1.2rem;">Lorem impsum dolor</h2>
                                        <div class="w-more">
                                            <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-4">
                                        <div style="float: right;margin-right: 10px;" class="w-like">
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
                                    <img class="image img-fluid" src="{{asset('UI')}}/img/imagetest.jpg" alt="">
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 style="font-size: 1.2rem;">Lorem impsum dolor</h2>
                                        <div class="w-more">
                                            <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-4">
                                        <div style="float: right;margin-right: 10px;" class="w-like">
                                            <div style="height:35px; width:35px;padding: 5px;border:2px solid black;border-radius: 50%;display:inline-block;">
                                                <p style="text-align:center;"><i class="fa fa-plus"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>
    <!-- End portfolio-area Area -->	

    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h1 style="color:#FF5722" class="mb-10">Client’s Feedback About Me</h1>
                        <p style="color:#FF5722">It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                    </div>
                </div>
            </div>
            <div style="border: 1px solid red;" class="row">
                <div class="active-testimonial">
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('UI')}}/img/elements/user1.png" alt="">
                        </div>
                        <div class="desc">
                            <p style="color:black;font-weight:500;">
                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                            </p>
                            <h4 style="color:black;">Harriet Maxwell</h4>
                            <p style="color:black;">CEO at Google</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('UI')}}/img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p style="color:black;font-weight:500;">
                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                            </p>
                            <h4>Carolyn Craig</h4>
                            <p>CEO at Facebook</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('UI')}}/img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p style="color:black;font-weight:500;">
                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                            </p>
                            <h4>Mithun Rana</h4>
                            <p>CEO at Tech Help Info</p>
                        </div>
                    </div>
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
                    <p>
                        Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
                    </p>
                </div>
                @endforeach

                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{asset('UI')}}/img/b2.jpg" alt="">	
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
                        <h4>Portable Fashion for
                            young women</h4>
                    </a>
                    <p>
                        You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving.
                    </p>
                </div>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{asset('UI')}}/img/b3.jpg" alt="">	
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
                        <h4>Do Dreams Serve As
                            A Premonition</h4>
                    </a>
                    <p>
                        So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work involved.
                    </p>
                </div>												


            </div>
        </div>	
    </section>
    <!-- end recent-blog Area -->		

    <!-- Start brands Area -->
    <section style="padding:70px 0px;background-color: #ff5722">
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
    </section>			

    <!-- start footer Area -->
    @include('UI.inc.footer-bar');
    <!-- end footer Area -->
    
    @include('UI.inc.footersource');