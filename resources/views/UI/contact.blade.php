@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');
    <!-- start banner Area -->
    <section class="relative about-banner">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contact Us				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Me</a></p>
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
                    <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
                        <div class="row">	
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="genric-btn primary" style="float: right;">Send Message</button>											
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
            <h3 style="text-align: center;margin-bottom: 10px;">MITHUN RANA SOCIAL ACCOUNT</h3>
            <div class="row">
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Facebook_Link}}">mithun rana on facebook</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Youtube_Link}}">mithun rana on Youtube</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Twitter_Link}}">mithun rana on Twitter</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Linkedin_Link}}">mithun rana on Linked In</a>
                    </p>
                </div>

                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Instagram_Link}}">mithun rana on Instagram</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Pinterest_Link}}">mithun rana on pinterest</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Behance_Link}}">mithun rana on behance</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Dribble_Link}}">mithun rana on dribbble</a>
                    </p>
                </div>

                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Vimeo_Link}}">mithun rana on Vimeo</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Github_Link}}">mithun rana on Github</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->stackoverflow_link}}">mithun rana on Stackoverflow</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" target="_blank" href="{{$About->Fiveer_Link}}">mithun rana on Fiverr</a>
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
    @include('UI.inc.footer-bar');
    <!-- end footer Area -->
    @include('UI.inc.footersource');