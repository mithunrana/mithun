<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta  Sart-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <meta name="p:domain_verify" content="655f6b3c3ad92fc46bd1e0cfd26158ab"/>
        <!-- Mobile Specific Meta  Sart-->

        <!-- Favicon Start-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Favicon End-->


        <!-- SEO RELATED DATA START-->
        <title> @isset($title) {{$title}} @endisset</title>
        <meta name="author" content="colorlib">
        <meta name="description" content=" @isset($description) {{$description}} @endisset">
        <meta name="keywords" content=" @isset($keywords) {{$keywords}} @endisset">
        <link rel="canonical" href="@php echo url()->current(); @endphp" />
        <meta name="fb:app_id" property="fb:app_id" content="308590786521219" />
        <meta property="og:url"           content="@php echo url()->current(); @endphp"/>
        <meta property="og:title"         content="@isset($title){{$title}}@endisset"/>
        <meta property="og:description"   content="@isset($description){{$description}}@endisset" />
        <meta property="og:image"         content="@isset($image){{asset('')}}{{$image}}@endisset" />
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="315" />
        <!-- SEO RELATED DATA END-->


        <!--CSS============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('UI')}}/css/linearicons.css">
        <link rel="stylesheet" href="{{asset('UI')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('UI')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('UI')}}/css/magnific-popup.css">				
        <link rel="stylesheet" href="{{asset('UI')}}/css/nice-select.css">							
        <link rel="stylesheet" href="{{asset('UI')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('UI')}}/css/owl.carousel.css">				
        <link rel="stylesheet" href="{{asset('UI')}}/css/main.css">
        <link rel="stylesheet" href="{{asset('UI')}}/css/jquery.magnify.min.css">
    </head>
