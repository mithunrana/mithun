
@php
    $title = "Admin Login";
    $keywords =  "Software Engineer Mithun Rana Login Panel";
    $description =  "Fell free to contact with software engineer mithun rana, here is my contact details if anybody want easily contact with me  image gallery, mithun rana image, mithun rana image gallery";
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
        <div style="max-width:750px;margin: 20px auto;">
            <div style="background-color: #E9EAEB;padding:15px;">
                <form style="margin-top: 20px;margin-bottom:20px;" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label style="color:#17a2b8" for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label style="color:#17a2b8" for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->

<!-- start footer Area -->
@include('UI.inc.footer-bar')
<!-- end footer Area -->
@include('UI.inc.footersource')