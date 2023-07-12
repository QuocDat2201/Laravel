<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodShop | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('user')); ?>/css/style__.css" type="text/css">
</head>

<body>

    <header class="header">
        <div class="myheader">
            <div class="container">
                <div class="mylogo">
                    <a href="<?php echo e(url('/user/dashboard')); ?>"><img src="<?php echo e(asset('user')); ?>/img/logo.png"alt=""></a>
                </div>
                <div class="right_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="shop__sidebar__search">
                                    <form action="<?php echo e(url('/user/dashboard/search')); ?>">
                                        <input type="text" placeholder="Search..." name="search">
                                        <button type="submit"><span class="icon_search"></span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-5">
                                        <a style="color:black;display:block" , href="#"><i style="font-size: 25px;" class="fa fa-user"
                                                aria-hidden="true"></i>
                                            </a>Sign in
                                    </div>
                                    <div class="col-md-2">
                                       
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-1">
                                <a href="#" style="color:black"><i style="font-size: 25px;" class="fa fa-shopping-basket"></i></a> <a style="color:black" href="">Cart</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-8 col-md-8">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="<?php echo e(url('/user/dashboard')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('/user/dashboard/shop')); ?>">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo e(url('/user/pages/aboutus')); ?>">About Us</a></li>
                                    
                                    <li><a href="<?php echo e(url('/user/pages/shoppingcart')); ?>">Shopping Cart</a></li>
                                    <li><a href="<?php echo e(url('/user/pages/shopdetails')); ?>">Shop Details</a></li>
                                    
                                    
                                </ul>
                            </li>
                            <li><a href="<?php echo e(url('/user/dashboard/blog')); ?>">Blog</a></li>
                            <li><a href="<?php echo e(url('/user/dashboard/contacts')); ?>">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-2">
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="<?php echo e(asset('user')); ?>/img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Industrial food</a></li>


                        </ul>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new food promotions and discounts!Leave your email here</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="<?php echo e(asset('user')); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/jquery.countdown.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/mixitup.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('user')); ?>/js/main.js"></script>
</body>

</html>
<?php /**PATH C:\Users\QuocHi\aptech-k1\PJ\resources\views/user/layout/layout.blade.php ENDPATH**/ ?>