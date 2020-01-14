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
                                    <a data-magnify="gallery" href="{{asset('')}}{{$portfolio->featuredimage->imageurl}}" data-caption="{{$portfolio->Portfolio_title}}">
                                        <img class="image img-fluid" src="{{$portfolio->featuredimage->imageurl}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div style="margin-top: 10px;" class="p-inner">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h2 style="font-size:16px;"><a href="portfolio/{{$portfolio->permalink}}">{{$portfolio->Portfolio_title}}</a></h2>
                                        <div class="w-more">
                                            <span style="color:red;">{{$portfolio->portfolioCategory->CategoryName}}</span> / <span class="w-date">{{$portfolio->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                    <div  class="col-sm-2">
                                        <div style="float: right;" class="w-like">
                                            <a data-magnify="gallery" href="{{asset('')}}{{$portfolio->featuredimage->imageurl}}" data-caption="{{$portfolio->Portfolio_title}}">
                                                <div style="height:35px; width:35px;padding: 5px;border:2px solid black;border-radius: 50%;display:inline-block;">
                                                    <p style="text-align:center;"><i class="fa fa-plus"></i></p>
                                                </div>
                                            </a>
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
    @include('UI.inc.footer-bar');
    <!-- end footer Area -->

    @include('UI.inc.footersource');