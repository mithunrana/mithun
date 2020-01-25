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
                    Privacy Policy
                </h1>
                <p class="text-white link-nav"><a href="{{asset('')}}">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="{{url('privacy-policy')}}">privacy policy</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start contact-page Area -->
<div style="margin-top: 20px;margin-bottom: 20px;" class="container">
    <div class="row">
        @foreach($PrivacyPolices as $privacyPolicy)
            <h2>{{$privacyPolicy->PrivacyPolicyTitle}}</h2>
            {!!html_entity_decode($privacyPolicy->PrivacyPolicyContent)!!}
        @endforeach
    </div>
</div>
<!-- End contact-page Area -->


<!-- start footer Area -->
@include('UI.inc.footer-bar')
<!-- end footer Area -->
@include('UI.inc.footersource')