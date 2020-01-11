@include('UI.inc.headersource');
<body>	
    @include('UI.inc.menubar');
    <!-- start banner Area -->
    <section class="about-banner">
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Portfolio				
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="portfolio.html"> Portfolio</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->

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
                                    <a href="portfolio/{{$portfolio->permalink}}"><img class="image img-fluid" src="{{$portfolio->featuredimage->imageurl}}" alt=""></a>
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h2 style="font-size:16px;"><a href="portfolio/{{$portfolio->permalink}}">{{$portfolio->Portfolio_title}}</a></h2>
                                        <div class="w-more">
                                            <span style="color:red;">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-2">
                                        <div style="float: right;" class="w-like">
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
            </div>

        </div>
    </section>
    <!-- End portfolio-area Area -->	

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