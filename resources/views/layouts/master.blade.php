<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- <title>{{ $title }}</title> --}}

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('build/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="{{ asset('build/assets/css/creative.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/vendor/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('build/assets/vendor/owl-carousel/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('build/assets/vendor/owl-carousel/owl.theme.css') }}" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<x-navigation>

</x-navigation>


    @yield('content')
    @yield('coaches')
    @yield('about')
    @yield('schedule')
    @yield('contact')
    @yield('blog')
    @yield('single-post')


    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="title">
                        <div class="icon"><img src=" {{  asset('build/assets/img/map_icon1.png') }}" alt=""></div>
                        <h3>Where <span>to find us</span></h3>
                    </div>
                    <p>
                        <span>West Covina</span>
                        <span>02 Plaza Drive</span>
                        <span>West Covina, CA 91790</span>
                    </p>
                    <p>
                        <span>phone: <b>+4235 4366 13</b></span>
                        <span>email: <b>example@example.com</b></span>
                    </p>
                    <p>website: http://www.yourfitclub.com</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="title">
                        <div class="icon"><img src=" {{  asset('build/assets/img/map_icon2.png') }}" alt=""></div>
                        <h3>gift <span>card</span></h3>
                    </div>
                    <p>Here's a gift that really rocks. Didjaknow that an overwhelming body of psychology research proves that experiences make people happier than possessions?</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="title">
                        <div class="icon"><img src=" {{  asset('build/assets/img/map_icon3.png') }}" alt=""></div>
                        <h3>When <span>to visit us</span></h3>
                    </div>
                    <p>Let's get started!</p>
                    <p>Visit during staffed hours or call for an appointment today!</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="title">
                        <div class="icon"><img src=" {{  asset('build/assets/img/map_icon4.png') }}" alt=""></div>
                        <h3>free <span>get free visit</span></h3>
                    </div>
                    <p>Every member gets a free, personalized Get Started Plan when they join. Our friendly, professional staff is trained to help you along your fitness journey</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom_links">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 links">
                    <p>it’s good to share:</p>
                    <ul>
                        <li><img src=" {{  asset('build/assets/img/social1.png') }}" alt=""></li>
                        <li><img src=" {{  asset('build/assets/img/social2.png') }}" alt=""></li>
                        <li><img src=" {{  asset('build/assets/img/social3.png') }}" alt=""></li>
                        <li><img src=" {{  asset('build/assets/img/social4.png') }}" alt=""></li>
                        <li><img src=" {{  asset('build/assets/img/social5.png') }}" alt=""></li>
                        <li><img src=" {{  asset('build/assets/img/social6.png') }}" alt=""></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>voted “it’s best fitness club in the city”</p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- AlpineJS-->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('build/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/jquery.mousewheel-3.0.6.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('build/assets/js/creative.js') }}"></script>



</body>

</html>
