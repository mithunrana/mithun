@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');
    <!-- start banner Area -->
    <section class="about-banner">
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Services				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.html"> Services</a></p>
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
                    <div style="margin-top: 20px;" class="col-sm-4">
                        <div style="box-shadow: 0 1px 3px white;overflow: hidden;border-radius: 5px;background-color: white;" class="con-section">
                            <div style="max-width: 360px;" class="featured-image">
                                <a href="{{asset('')}}service/{{$service->permalink}}">
                                <img style="width: 100%;height:230px" src="/{{$service->featuredimage->imageurl}}">
                                </a>
                            </div>
                            <div class="service-name">
                                <h4 style="color:black;padding: 5px;text-transform: capitalize"><a style="color:black;" href="{{asset('')}}service/{{$service->permalink}}">{{$service->service_title}}</a></h4>
                                <p style="margin-top: 20px;padding: 5px;font-size:19px;">
                                    <a style="color:black;" href="{{asset('')}}service/{{$service->permalink}}">{{str_limit($service->MainContent, $limit = 100, $end = '...')}} </a>
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



    <!-- start footer Area -->
    @include('UI.inc.footer-bar');
    <!-- End footer Area -->

    @include('UI.inc.footersource');