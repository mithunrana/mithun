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

<section class="service-view">
    <div class="container">
        <div class="row">
            <h1 style="margin-top: 5px;margin-bottom: 5px;">Leading Web Design & Development Company in Bangladesh</h1>
            <div class="col-sm-5">
                <img style="max-width: 100%;" src="/{{$Service->featuredimage->imageurl}}">
            </div>
            <div class="col-sm-7">
                {{$Service->MainContent}}
            </div>
            <div class="col-sm-12">
                {!!html_entity_decode($Service->OpenContent)!!}
            </div>
        </div>
    </div>
</section>

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
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user1.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/elements/user2.png" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                        <p>CEO at Facebook</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- start footer Area -->
@include('UI.inc.footer-bar');
<!-- End footer Area -->
@include('UI.inc.footersource');