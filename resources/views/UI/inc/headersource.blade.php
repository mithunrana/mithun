<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta  Sart-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <meta name="p:domain_verify" content="655f6b3c3ad92fc46bd1e0cfd26158ab"/>
        <!-- Mobile Specific Meta  Sart-->

        <!-- Favicon Start-->
        <link rel="shortcut icon" href="{{asset('')}}images/mithun-rana-icon.png">
        <!-- Favicon End-->


        <!-- SEO RELATED DATA START-->
        <title> @isset($title) {{$title}} @endisset</title>
        <meta name="author" content="Mithun Rana">
        <meta name="description" content=" @isset($description) {{$description}} @endisset">
        <meta name="keywords" content=" @isset($keywords) {{$keywords}} @endisset">
        <link rel="canonical" href="@php echo url()->current(); @endphp" />

        <meta name="fb:app_id" property="fb:app_id" content="308590786521219" />
        <meta property="og:url"           content="@php echo url()->current(); @endphp"/>
        <meta property="og:title"         content="@isset($title){{$title}}@endisset"/>
        <meta property="og:description"   content="@isset($description){{$description}}@endisset" />
        <meta property="og:image"         content="@isset($image){{asset('')}}{{$image}}@endisset" />
        <meta property="og:image:width" content="100%" />
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
        <script type='application/ld+json'>{
          "@context": "http://www.schema.org",
          "@type": "person",
          "name": "Mithun Rana",
          "jobTitle": "Software Engineer in Bangladesh",
          "height": "61.2",
          "gender": "male",
          "url": "https://www.mithunrana.com",
          "sameAs": [
             "https://www.facebook.com/mithunrana.bd",
             "https://www.facebook.com/techhelpInfobd/",
             "https://twitter.com/mdmithun_rana/",
             "https://www.instagram.com/md_mithunrana/",
             "https://www.pinterest.com/mithun_rana/",
             "https://www.behance.net/mithunrana/",
             "https://www.youtube.com/techhelpinfobd",
             "https://stackoverflow.com/users/9488192/mithun-rana",
             "https://github.com/mithunrana",
             "https://www.fiverr.com/mdmithunrana/",
             "https://www.linkedin.com/in/mithunrana/"
          ],
          "image": "https://www.mithunrana.com/images/mithun-rana.jpg",
          "address": {
             "@type": "PostalAddress",
             "streetAddress": "41/8",
             "postOfficeBoxNumber": "Paltan",
             "addressLocality": "Dhaka",
             "addressRegion": "Dhaka",
             "postalCode": "1000",
             "addressCountry": "Bangladesh"
          },
          "email": "mithunrana.developer@gmail.com",
          "birthDate": "1998-06-12",
          "alumniOf": "Bangladesh University",
          "birthPlace": "Thakurgaon",
          "memberOf": "Tech Help Info",
          "nationality": "Bangladeshi",
          "telephone": "+8801797744248"
        }</script>

        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml            : true,
                    version          : 'v5.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="377051596366232">
        </div>

    </head>
