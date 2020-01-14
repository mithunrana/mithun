@include('UI.inc.headersource');
    <body>
        @include('UI.inc.menubar');
        <!-- start banner Area -->
        <section class="about-banner">
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div style="margin-top: 0px;padding: 76px 0px" class="about-content col-lg-12">
                        <h1 class="text-white">
                            About {{$Profile->Name}}
                        </h1>	
                        <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>
                            <span class="lnr lnr-arrow-right"></span>  <a href=""> About Me</a>
                        </p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        <!-- Start home-about Area -->
        <section class="home-about-area section-gap">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 home-about-left">
                        <img class="img-fluid" @isset($Profile->image2) src="/{{$Profile->profileImage2->imageurl}}" @endisset alt="">
                    </div>
                    <div class="col-lg-5 col-md-6 home-about-right">
                        <h6>About Me</h6>
                        <h1 class="text-uppercase">{{$Profile->Name}}</h1>
                        <p>
                            {{$Profile->ShortBrief}}
                        </p>
                        <a href="#" class="primary-btn text-uppercase">View Full Details</a>
                    </div>
                    <div class="col-lg-12 pt-60">
                        {{$Profile->Details}}
                        <h4 class="pt-30">Tools Expertness</h4>	
                    </div>
                </div>
                <div class="row skillbar-wraps">					
                    <div class="col-lg-12 skill-left">
                        <div class="row">
                            @foreach($Expertness as $Expert)
                            <div  class="single-skill col-sm-6">
                                <p>
                                   {{$Expert->Name}} {{$Expert->Percentage}}%
                                </p>
                                <div class="skill" data-width="{{$Expert->Percentage}}"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End home-about Area -->	

        <!-- Start timeline Area -->
        <section class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center">
                        <h1 class="mb-10">My Qualifications</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>				
            <ul>
                @foreach($Qualifications as $Qualification)
                <li>
                    <div class="content">
                        <h4>
                            <time>{{$Qualification->Degree}}</time>
                        </h4>
                        <p><b>Session: </b>{{$Qualification->Session}}</p>
                        <p style="color:white;"><b>Result: </b> {{$Qualification->Result}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>		

        <!-- End timeline Area -->


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
        <!-- end footer Area -->

@include('UI.inc.footersource');