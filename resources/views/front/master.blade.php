<!DOCTYPE html>
<html>
<head>
    <title>Home Service</title>
    <link rel="stylesheet" type="text/css" href="{{asset('dist/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/front/css/style.css')}}">
    <script src="https://kit.fontawesome.com/0f3dccd231.js"></script>

{{--    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">--}}

    <link rel="stylesheet" type="text/css" href="{{asset('dist/front/engine1/style.css')}}" />
    <script type="text/javascript" src="{{asset('dist/front/engine1/jquery.js')}}"></script>

</head>
<body>


    <div class="topnav">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="top-nav-icons">

                    <a href="#">
                    <span class="fa-stack fa-sm">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x" style="color: #4267B2;"></i>
                    </span>
                    </a>

                    <a href="#">
                    <span class="fa-stack fa-sm">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x" style="color: #28AAE1;"></i>
                    </span>
                    </a>

                    <a href="#">
                    <span class="fa-stack fa-sm">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-google-plus-g fa-stack-1x" style="color: #DD493D;"></i>
                    </span>
                    </a>

                    <a href="#">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x" style="color: #FF0000;"></i>
                    </span>
                    </a>

                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <span class="d-flex icons-contact">
                                <span class="fa-stack fa-sm">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-phone-alt fa-stack-1x" style="color: black;"></i>
                                </span>
                                <p>+88080222222</p>
                            </span>
                    </li>
                    <li class="nav-item">
                            <span class="d-flex">
                                <span class="fa-stack fa-sm">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-envelope fa-stack-1x" style="color: black;"></i>
                                </span>
                                <p>mehedi15-1053@diu.edu.bd</p>
                            </span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    {{--nav bar--}}
    <div class="main-nav sticky-top">
        @include('front.nav')

    </div>
    <!-- Nav end-->


    {{--start index page--}}
    <div id="main" class="main">
        @yield('content')
{{--        start carousel--}}

{{--        start about--}}

{{--        start take service--}}

{{--        start what we offer--}}

{{--        start customer_vedio--}}

{{--        start -contact--}}

{{--        start -Sign up to newsletter for get special offer--}}

    </div>
    {{--end index page--}}

    {{--start -footer--}}
    <div class="footer">
        @include('front.footer')
    </div>
    {{--end -footer--}}



    <a href="#top" class="scrool-top"><i class="far fa-arrow-alt-circle-up fa-2x"></i></a>

    <script type="text/javascript" src="{{asset('dist/front/engine1/wowslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('dist/front/engine1/script.js')}}"></script>
    <script>window.jQuery || document.write('<script src="{{asset('dist/js/jquery-slim.min.js')}}"><\/script>')</script>
    <script src="{{asset('dist/js/popper.min.js')}}"></script>
    <script src="{{asset('dist/front/js/bootstrap.min.js')}}"></script>

</body>
</html>