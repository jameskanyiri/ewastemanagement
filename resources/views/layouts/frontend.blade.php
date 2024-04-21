<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> E-waste </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Wostin HTML Template For Business" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/wostin-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/wostin.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/wostin-responsive.css')}}" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-wrapper__logo">
                        <a href="{{ route('home') }}"><img src="assets/images/resources/logo-2.png" alt="" style="height: 20px"></a>
                    </div>
                    <div class="main-menu-three__main-menu">
                        <a href="index3.html#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="dropdown">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="https://repository.kippra.or.ke/handle/123456789/1687">Polices</a>
                            </li>
                         
                        </ul>
                    </div>
                    <div class="main-menu-three__right">
                
                        <div class="main-menu-three__call">
                      
                            <div class="main-menu-three__call-number">
                             <a href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="main-menu-three__call-number">
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                            <div class="main-menu-three__call-number">
                                <p>Dashboard</p>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

    
        {{ $slot }}
  


    </div><!-- /.page-wrapper -->


 



    <a href="index3.html#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js')}}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js')}}"></script>




    <!-- template js -->
    <script src="{{ asset('assets/js/wostin.js')}}"></script>
</body>

</html>