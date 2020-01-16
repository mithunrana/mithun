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
                    Login
                </h1>
                <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('mithunrana-image-gallery')}}">Gallery</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->



<!-- Start contact-page Area -->
<section class="contact-page-area">
    <div class="container">
        <img src="UI/img/mithun-rana-404.png">
    </div>
</section>
<!-- End contact-page Area -->

<!-- start footer Area -->
@include('UI.inc.footer-bar');
<!-- end footer Area -->
@include('UI.inc.footersource');