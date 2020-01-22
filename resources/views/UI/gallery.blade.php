@php
    $title = "Softwar Engineer Mithun Rana Image Gallery | Software Engineer Bangladesh ";
    $keywords =  "software engineer, mithun rana, software engineer mithun rana, software engineer in bangladesh, how to contact engineer mithun rana, image gallery, mithun rana image, mithun rana image gallery";
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
                   Mithun Rana Image Gallery
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
        <div style="margin-top: 20px;margin-bottom: 20px;" class="row">
            @foreach($Galleries as $Gallery)
            <div style="margin-top: 10px;" class="col-sm-4 col-md-3 col-6">
                <a data-magnify="gallery" href="{{asset('')}}{{$Gallery->images->imageurl}}" data-caption="hell world">
                <img style="border-bottom-right-radius: 0rem;border-bottom-left-radius: 0rem;height: 200px;width: 100%;" src="/{{$Gallery->images->imageurl}}" alt="{{$Gallery->imageAltText}}" title="{{$Gallery->imageTitleText}}" class="img-thumbnail">
                </a>
                <!--<p style="text-align: center;color:black;font-size: 16px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;background-color: #e0e0e0;">{{$Gallery->EventNameOFImage}}</p>-->
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End contact-page Area -->

<!-- start footer Area -->
@include('UI.inc.footer-bar')
<!-- end footer Area -->
@include('UI.inc.footersource')