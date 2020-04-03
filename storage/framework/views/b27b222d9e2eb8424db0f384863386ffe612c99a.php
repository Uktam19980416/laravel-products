<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="<?php echo e(asset('public/img/favicon.png')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/animate.css')); ?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/owl.carousel.min.css')); ?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/all.css')); ?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/themify-icons.css')); ?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/magnific-popup.css')); ?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/slick.css')); ?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"> <img src="<?php echo e(asset('public/img/logo.png')); ?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.blade.php">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->



    <?php echo $__env->yieldContent('main'); ?>

    <footer class="footer_part">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="layout.blade.php"><img src="<?php echo e(asset('public/img/logo.png')); ?>" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="layout.blade.php">Home</a>
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

        <div class="copyright_part">
            <div class="container">
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
    <script src="<?php echo e(asset('public/js/jquery-1.12.1.min.js')); ?>"></script>
    <!-- popper js -->
    <script src="<?php echo e(asset('public/js/popper.min.js')); ?>"></script>
    <!-- bootstrap js -->
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
    <!-- magnific popup js -->
    <script src="<?php echo e(asset('public/js/jquery.magnific-popup.js')); ?>"></script>
    <!-- carousel js -->
    <script src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.nice-select.min.js')); ?>"></script>
    <!-- slick js -->
    <script src="<?php echo e(asset('public/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/contact.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.form.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/mail-script.js')); ?>"></script>
    <!-- custom js -->
    <script src="<?php echo e(asset('public/js/custom.js')); ?>"></script>
</body>

</html>
<?php /**PATH /var/www/html/laravel-products/resources/views/products/layout.blade.php ENDPATH**/ ?>