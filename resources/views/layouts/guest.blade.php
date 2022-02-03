<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ISLAS Resto & Grill</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" ype="image/x-icon" href="{{ asset('themes/cakeshop2/assets/img/icon/islas_logo.png') }}" />
    <link rel="stylesheet"
        href="{{ asset('themes/cakeshop2/assets/css/A.bootstrap.min.css owl.carousel.min.css slicknav.css animate.min.css magnific-popup.css fontawesome-all.min.css themify-icons.css slick.css nice-select.css,Mcc.css') }}" />
    <link rel="stylesheet" href="{{ asset('themes/cakeshop2/assets/css/A.style.css.pagespeed.cf.5LG3ED0kWy.css') }}" />
    
    @stack("style")
    @livewireStyles

</head>

<body class="body-bg">

    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="header-info-left d-none d-sm-block">
                                        <ul class="header-social">
                                            <li><a href="https://www.facebook.com/ISLAS-Resto-Grill-628961627446509/?ref=page_internal"
                                                    target="_blank"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="logo">
                                        {{-- <a href="/"><img src="{{ asset('themes/cakeshop2/assets/img/logo/xlogo.png.pagespeed.ic.xm-XFuawlp.png') }}" alt=""></a> --}}
                                        <a href="/"><img class="figure-img img-fluid rounded" src="{{ asset('themes/cakeshop2/assets/img/icon/islas_logo.png') }}" style="width: 200px;" alt=""></a>
                                    </div>
                                    <div class="header-info-right d-none d-lg-block">
                                        <a href="#" class="btn_2">Call Us: +966 50 388 1180</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">

                                <div class="main-menu d-none d-lg-block text-center">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/gallery">Gallery</a></li>
                                            <li><a href="/aboutus">About</a></li>
                                            <li><a href="/contactus">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>
    <footer>
        <div class="footer-wrapper">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-menu d-flex justify-content-between flex-wrap">
                                <div class="logo">
                                    {{-- <img src="{{ asset('themes/cakeshop2/assets/img/logo/xlogo.png.pagespeed.ic.xm-XFuawlp.png') }}" alt=""> --}}
                                    <a href="/"><img class="figure-img img-fluid rounded" src="{{ asset('themes/cakeshop2/assets/img/icon/islas_logo.png') }}" style="width: 100px;" alt=""></a>
                                </div>
                                <nav>
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/gallery">Gallery</a></li>
                                        <li><a href="/aboutus">About</a></li>
                                        <li><a href="/contactus">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-10">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>We offer Asian Cuisine & the infamous Boodle Fight here in Riyadh! Come &
                                                dine w/ us! experience the good place, good taste and good face in
                                                serving you!</p>
                                        </div>
                                    </div>

                                    <div class="socila mt-50">
                                        <a href="#" target="_blank" class="btn_02"><i
                                                class="fab fa-instagram"></i>Instagram</a>
                                        <a href="https://www.facebook.com/ISLAS-Resto-Grill-628961627446509/?ref=page_internal"
                                            target="_blank" class="btn_02"><i class="fab fa-facebook-f"></i>Facebook</a>
                                        <a href="#" target="_blank" class="btn_02"><i
                                                class="fab fa-twitter"></i>Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <img src="{{ asset('themes/cakeshop2/assets/img/icon/location.svg') }}" alt="">

                                    <h4>Location</h4>
                                    <ul>
                                        <li>
                                            <p>1st Floor, Aljazeera Shopping Center, Musa Ibn Nussair St., Al
                                                Sulaimaniah Riyadh, Saudi Arabia 12241</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <img src="{{ asset('themes/cakeshop2/assets/img/icon/phone.svg')}}" alt="">

                                    <h4>Contact</h4>
                                    <ul>
                                        <li><a href="#">+966 50 388 1180</a></li>
                                        <li>
                                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="ef8c80819b8e8c9baf8c8e848a9c87809fc18c8082">[email&#160;protected]</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>Copyright ©<script async=""
                                            src="//cdn.matomo.cloud/bongbongsaraph.matomo.cloud/matomo.js"></script>
                                        <script>
                                            document.write(new Date().getFullYear());

                                        </script> All rights reserved | Yaramay Maintenance Services
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a class="wrapper" title="Go to Top" href="#">
            <div class="arrows-container">
                <div class="arrow arrow-one">
                </div>
                <div class="arrow arrow-two">
                </div>
            </div>
        </a>
    </div>


    {{-- <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script> --}}
    <script src="{{ asset('themes/cakeshop2/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

    {{-- <script src="assets/js/vendor/jquery-1.12.4.min.js"></script> --}}
    <script src=" {{ asset('themes/cakeshop2/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    {{-- <script src="assets/js/popper.min.js%20bootstrap.min.js.pagespeed.jc.TBjnucQRqR.js"></script><script>eval(mod_pagespeed_u1gUoaaXE_);</script> --}}
    <script src="{{ asset('themes/cakeshop2/assets/js/popper.min.js bootstrap.min.js.pagespeed.jc.TBjnucQRqR.js')}}">
    </script>
    <script>
        eval(mod_pagespeed_u1gUoaaXE_);

    </script>

    <script>
        eval(mod_pagespeed_WbDF3cxKq2);

    </script>

    {{-- <script src="assets/js/owl.carousel.min.js%20slick.min.js.pagespeed.jc.4RHvWKSN_e.js"></script><script>eval(mod_pagespeed_EGtkiJIjgo);</script> --}}
    <script src="{{ asset('themes/cakeshop2/assets/js/owl.carousel.min.js slick.min.js.pagespeed.jc.4RHvWKSN_e.js')}}">
    </script>
    <script>
        eval(mod_pagespeed_EGtkiJIjgo);

    </script>

    <script>
        eval(mod_pagespeed_aW86gGmi7t);

    </script>
    {{-- <script src="assets/js/jquery.slicknav.min.js%20wow.min.js%20jquery.magnific-popup.js%20jquery.nice-select.min.js%20jquery.counterup.min.js%20waypoints.min.js%20contact.js.pagespeed.jc.VsnzaB4Hf-.js"></script><script>eval(mod_pagespeed_cKOtDbjEuP);</script> --}}
    <script
        src="{{ asset('themes/cakeshop2/assets/js/jquery.slicknav.min.js wow.min.js jquery.magnific-popup.js jquery.nice-select.min.js jquery.counterup.min.js waypoints.min.js contact.js.pagespeed.jc.VsnzaB4Hf-.js')}}">
    </script>
    <script>
        eval(mod_pagespeed_cKOtDbjEuP);

    </script>

    <script>
        eval(mod_pagespeed_u4y0KggLas);

    </script>
    <script>
        eval(mod_pagespeed_byRrNsFTKW);

    </script>
    <script>
        eval(mod_pagespeed_$tj8V37S2T);

    </script>
    <script>
        eval(mod_pagespeed_$9VIVt5dIU);

    </script>
    <script>
        eval(mod_pagespeed_u24H4jdFDn);

    </script>

    <script>
        eval(mod_pagespeed_0SlrTlmba0);

    </script>
    <script
        src="{{ asset('themes/cakeshop2/assets/js/jquery.form.js jquery.validate.min.js mail-script.js jquery.ajaxchimp.min.js plugins.js main.js.pagespeed.jc.xUY6pkFGEX.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_3CrgPEMOVf);

    </script>
    <script>
        eval(mod_pagespeed_Ab8QQTG9HF);

    </script>
    <script>
        eval(mod_pagespeed_BvxqohQf6X);

    </script>
    <script>
        eval(mod_pagespeed_alCOU$MPeX);

    </script>

    <script>
        eval(mod_pagespeed_aTXhT9fsuN);

    </script>
    <script>
        eval(mod_pagespeed_SFofWDl9tu);

    </script>

    @livewireScripts

</body>

</html>
