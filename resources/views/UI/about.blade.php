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
                        <img class="img-fluid" src="/{{$Profile->profileImage2->imageurl}}" alt="">
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

        <!-- Start brands Area -->
        <section class="brands-area">
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
        <!-- End brands Area -->	

        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About Me</h4>
                            <p>
                                We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                            </p>
                            <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>Stay updated with our latest trends</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <span class="lnr lnr-arrow-right"></span>
                                            </button>    
                                        </div>
                                        <div class="info"></div>  
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h4>Follow Me</h4>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->		
@include('UI.inc.footersource');