<!doctype html>
<html lang="zxx">

<head>
    <title>{{config('app.name')}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="{{ asset('public/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/nice-select.css') }}">
    <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}"> <img src="{{ asset('public/img/logo.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="{{route('cart')}}">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        @if (\Request::is('/'))
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control text_search_input" id="search_input" placeholder="Search Here">
                    <button type="button" class="submit_1" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
        @endif

    </header>
    <!-- Header part end-->



    @yield('main')

    <footer class="footer_part">

    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                        <form method="post" action="#" class="subscribe_form">
                            <input type="email" name="email" class="text_subscribe" placeholder="Enter your mail">
                            <button type="submit" class="btn_1 button_subscribe">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="copyright_part">
            <div class="container">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="{{route('home')}}"><img src="{{ asset('public/img/logo.png') }}" alt="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://github.com" target="_blank">Skipper</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ asset('public/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('public/js/jquery.magnific-popup.js') }}"></script>
    <!-- carousel js -->
    <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('public/js/slick.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/js/contact.js') }}"></script>
    <script src="{{ asset('public/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.form.js') }}"></script>
    <script src="{{ asset('public/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/js/mail-script.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('public/js/custom.js') }}"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.button_subscribe').click(function(){
                BaseRecord.mailer($('.text_subscribe').val());
                return false;
            });
        });
    </script>

@yield('js')

</body>
</html>
