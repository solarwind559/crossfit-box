<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'CrossfitBox | Fitness Center')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('build/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">

    <!-- Theme CSS -->
    <link href="{{ asset('build/assets/css/creative.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/vendor/fancybox/jquery.fancybox.css') }}" rel="stylesheet">

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet"
        href="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5') }}" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}"
        type="text/css" media="screen" />
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

    @include('layouts.nav-bar')

    @yield('content')
    @yield('coaches')
    @yield('about')
    @yield('schedule')
    @yield('contact')
    @yield('blog')
    @yield('single-post')

    @include('layouts.footer')

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- AlpineJS-->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('build/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/jquery.mousewheel-3.0.6.pack.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/jquery.fancybox.pack.js?v=2.1.5') }}">
    </script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/assets/vendor/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}"></script>
    <script type="text/javascript"
        src="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6') }}"></script>
    <script type="text/javascript"
        src="{{ asset('build/assets/vendor/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('build/assets/js/creative.js') }}"></script>

    <!-- JavaScript confirmation function -->
    <script>
        function confirmDelete(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this post?')) {
                document.getElementById('delete-btn').submit();
            }
        }
    </script>

</body>

</html>
