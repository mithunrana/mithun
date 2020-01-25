<footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>About Me</h4>
                        <p style="color:white;">
                            I’m Mithun Rana, Fullstack web developer, web design and development i have 3year plus experience.
                            more i have some skill in Graphics Design, search engine optimization(SEO, Digital Marketing, and something video editing
                        </p>
                        <p style="color:white;" class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mithun Rana All Rights Reserved. <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{asset('')}}" >mithunrana</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div id="nav_menu-2" class="fwidget et_pb_widget widget_nav_menu"><h4 class="title">QUICK NAVIGATION</h4>
                            <div class="menu-footer-container"><ul id="menu-footer" class="menu">
                                    <li id="menu-item-551" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-551">
                                        <a style="color:white;" href="{{asset('')}}">Home</a>
                                    </li>
                                    <li id="menu-item-554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-554">
                                        <a style="color:white;" href="{{asset('')}}mithunrana-image-gallery">Gallery</a>
                                    </li>
                                    <li id="menu-item-552" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-552">
                                        <a style="color:white;" href="{{asset('')}}about-mithun-rana">About</a>
                                    </li>
                                    <li id="menu-item-554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-554">
                                        <a style="color:white;" href="{{asset('')}}contact-mithun-rana">Contact</a>
                                    </li>
                                    <li id="menu-item-558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy current-menu-item page_item page-item-3 current_page_item menu-item-558">
                                        <a style="color:white;" href="{{asset('')}}privacy-policy" aria-current="page">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
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
                        <a style="margin-left: 5px;font-size: 16px;color:white;text-transform: capitalize;" href="admin-login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>