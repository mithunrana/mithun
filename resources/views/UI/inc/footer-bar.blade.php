<footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>About Me</h4>
                        <p>
                            I’m Mithun Rana, Fullstack web developer, web design and development i have 3year plus experience.
                            more i have some skill in Graphics Design, search engine optimization(SEO, Digital Marketing, and something video editing
                        </p>
                        <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mithun Rana. Copyright @ 2019. All Rights Reserved.<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.mithunrana.com" target="_blank">mithunrana</a>
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
                        <p>Let Me be social</p>
                        <div class="footer-social d-flex align-items-center">
                            @php
                            $About = \App\AboutProfile::first();
                            @endphp
                            <a href="{{$About->Facebook_Link}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$About->Twitter_Link}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$About->Dribble_Link}}"><i class="fa fa-dribbble"></i></a>
                            <a href="{{$About->Behance_Link}}"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>