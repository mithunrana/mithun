
@php
    $title = "Contact Software Engineer Bangladesh Mithun Rana";
    $keywords =  "software engineer, mithun rana, software engineer mithun rana, software engineer in bangladesh, how to contact engineer mithun rana";
    $description =  "Fell free to contact with software engineer mithun rana, here is my contact details if anybody want easily contact with me";
@endphp

@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');
    <!-- start banner Area -->
    <section class="relative about-banner">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 style="font-size:32px" class="text-white">
                        Contact With Mithun Rana
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('contact-mithun-rana')}}"> Contact Mithun rana</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->				  



    <!-- Start contact-page Area -->
    <section class="contact-page-area">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%;" id="map"></div>
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>{{$About->Address}}</h5>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>{{$About->Phone1}}</h5>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>{{$About->Email1}}</h5>
                            <h5>{{$About->Email2}}</h5>
                        </div>
                    </div>														
                </div>
                <div class="col-lg-8">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <b>Successfully</b> Your contact mail send....!
                        </div>
                    @endif
                    @if(Session::has('failmessage'))
                        <div class="alert alert-success">
                            <b>Fail</b> Your contact mail send....!
                        </div>
                    @endif

                    <form class="form-area contact-form text-right" action="{{url('admin.sendmail')}}" method="post">
                        @csrf
                        <div class="row">	
                            <div class="col-lg-6 form-group">
                                <input class="common-input mb-20 form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{old('name')}}" name="name" placeholder="Enter your name" type="text">

                                <input class="common-input mb-20 form-control{{$errors->has('email') ? ' is-invalid' : ''}}" value="{{old('email')}}"  name="email" placeholder="Enter email address" type="email">

                                <input class="common-input mb-20 form-control{{$errors->has('subject') ? ' is-invalid' : ''}}"  value="{{old('subject')}}" name="subject" placeholder="Enter subject" type="text">
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control{{$errors->has('message') ? ' is-invalid' : ''}}" value="{{old('message')}}" name="message" placeholder="Enter Messege"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button style="margin-bottom: 10px;" class="genric-btn primary" style="float: right;">Send Message</button>
                            </div>
                        </div>
                    </form>	
                </div>
            </div>
        </div>	
    </section>
    <!-- End contact-page Area -->

    <section>
        <div class="container">
            <div class="contact-title">
                <h2 style="color:#ff5722;text-align: center;font-size: 36px;line-height: 1.1;margin-bottom: 60px;text-transform: capitalize;font-weight: 800;position: relative;">Wanna Invite me?</h2>
            </div>
            <div class="row">
                <div style="margin-bottom: 20px;" class="col-md-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="info-box">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>{{$About->Address}}</p>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 20px;" class="col-md-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div style="text-align: center;
                             position: relative;
                             background: #ff5722;
                             padding: 60px 40px 30px;"  class="info-box">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <p>Md Mithun Rana</p>
                            <p><a target="_blank" href="{{$About->Facebook_Link}}">Click Here</a></p>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 20px;" class="col-md-4">
                    <div class="contact-info-box wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div style="text-align: center;
                             position: relative;
                             background: #ff5722;
                             padding: 60px 40px 30px;" class="info-box">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>{{$About->Email1}}</p>
                            <p>{{$About->Email2}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h3 style="text-align: center;margin-bottom: 10px;">{{$About->Name}} SOCIAL ACCOUNT</h3>
            <div class="row">
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" href="{{$About->Facebook_Link}}">{{$About->Name}} on facebook</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" href="{{$About->Youtube_Link}}">{{$About->Name}} on Youtube</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->Twitter_Link}}">{{$About->Name}} on Twitter</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->Linkedin_Link}}">{{$About->Name}} on Linked In</a>
                    </p>
                </div>

                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->Instagram_Link}}">{{$About->Name}} on Instagram</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Pinterest_Link}}">{{$About->Name}} on pinterest</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->Behance_Link}}">{{$About->Name}} on behance</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->Dribble_Link}}">{{$About->Name}} on dribbble</a>
                    </p>
                </div>

                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->Vimeo_Link}}">{{$About->Name}} on Vimeo</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->Github_Link}}">{{$About->Name}} on Github</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize" target="_blank" target="_blank" href="{{$About->stackoverflow_link}}">{{$About->Name}} on Stackoverflow</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;text-transform: capitalize;" target="_blank" target="_blank" href="{{$About->Fiveer_Link}}">{{$About->Name}} on Fiverr</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div style="margin:20px auto;" class="container">
            <div class="row">
                {!! html_entity_decode($About->Google_Map) !!}
            </div>
        </div>
    </section>

    <!-- start footer Area -->
    @include('UI.inc.footer-bar')
    <!-- end footer Area -->
    @include('UI.inc.footersource')