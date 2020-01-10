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
                        <a style="color: white;font-weight: bold;" href="{{$About->Facebook_Link}}">mithun rana on facebook</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Youtube_Link}}">mithun rana on Youtube</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Twitter_Link}}">mithun rana on Twitter</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Linkedin_Link}}">mithun rana on Linked In</a>
                    </p>
                </div>

                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Instagram_Link}}">mithun rana on Instagram</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Pinterest_Link}}">mithun rana on pinterest</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Behance_Link}}">mithun rana on behance</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Dribble_Link}}">mithun rana on dribbble</a>
                    </p>
                </div>

                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Vimeo_Link}}">mithun rana on Vimeo</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Github_Link}}">mithun rana on Github</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->stackoverflow_link}}">mithun rana on Stackoverflow</a>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p style="background-color: #ff5722;border-radius: 3px;text-transform: capitalize;text-align: center;">
                        <a style="color: white;font-weight: bold;" href="{{$About->Fiveer_Link}}">mithun rana on Fiverr</a>
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