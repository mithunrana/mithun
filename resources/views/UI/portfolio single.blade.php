@include('UI.inc.headersource');
<body>
@include('UI.inc.menubar');
<!-- start banner Area -->
<section class="about-banner">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{$Portfolio->Portfolio_title}}
                </h1>
                <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/portfolio/{{$Portfolio->permalink}}"> {{$Portfolio->Portfolio_title}}</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<section class="service-view">
    <div class="container">
        <div style="margin-top: 20px;" class="row">
            <div class="col-sm-8">
                <img style="max-width: 100%;" src="/{{$Portfolio->featuredimage->imageurl}}">
            </div>
            <div class="col-sm-4">
                {!!html_entity_decode($Portfolio->MainContent)!!}
            </div>

            <div style="margin-top: 20px;" class="col-sm-12">
                {!!html_entity_decode($Portfolio->OpenContent)!!}
            </div>
        </div>
    </div>
</section>

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