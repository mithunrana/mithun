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
                            {{$BlogDetails->blog_title}}
                        </h1>	
                        <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>
                            <span class="lnr lnr-arrow-right"></span>
                            <a href="{{url('tutorials')}}">Tutorial</a>
                            <span class="lnr lnr-arrow-right"></span>
                            <a href="{{$BlogDetails->permalink}}">{{$BlogDetails->blog_title}}</a>
                        </p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->					  

        <!-- Start post-content Area -->
        <section class="post-content-area single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                {!!html_entity_decode($BlogDetails->embedded_video)!!}
                            </div>
                            <div class="col-lg-3  col-md-3 meta-details">
                                <ul class="tags">
                                    <li><a href="#">{{$BlogDetails->Category->CategoryName}}</a></li>
                                </ul>
                                <div class="user-details row">
                                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$BlogDetails->aboutProfile->name}}</a> <span class="lnr lnr-user"></span></p>
                                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$BlogDetails->created_at->diffForHumans()}}</a> <span class="lnr lnr-calendar-full"></span></p>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <h3 class="mt-20 mb-20">{{$BlogDetails->blog_title}}</h3>
                                <p style="text-align: justify;">
                                    {!!html_entity_decode($BlogDetails->blog_details)!!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 sidebar-widgets">
                        <div  class="widget-wrap">
                            <div class="single-sidebar-widget post-category-widget">
                                <h4 style="background-color: red;" class="category-title">Post Catgories</h4>
                                <ul class="cat-list">
                                    <ul class="cat-list">
                                        @foreach($Categories as $Category)
                                            <li>
                                                <a href="/{{$Category->CategoryUrl}}" class="d-flex justify-content-between">
                                                    <p style="text-transform: capitalize;">{{$Category->CategoryName}}</p>
                                                    <p>@php
                                                            echo count(App\Blog::where('category',$Category->id)->get());
                                                        @endphp
                                                    </p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </ul>
                            </div>
                            <div class="single-sidebar-widget ads-widget">
                                <a href="#"><img class="img-fluid" src="{{asset('UI')}}/img/blog/ads-banner.jpg" alt=""></a>
                            </div>
                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 style="background-color: red;" class="popular-title">Popular Posts</h4>
                                <div class="popular-post-list">
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp1.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                                            <p>02 Hours ago</p>
                                        </div>
                                    </div>
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp2.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
                                            <p>02 Hours ago</p>
                                        </div>
                                    </div>
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp3.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
                                            <p>02 Hours ago</p>
                                        </div>
                                    </div>
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="{{asset('UI')}}/img/blog/pp4.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>Asteroids telescope</h6></a>
                                            <p>02 Hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End post-content Area -->

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