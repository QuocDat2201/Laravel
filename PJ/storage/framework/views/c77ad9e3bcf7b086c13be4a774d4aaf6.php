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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <div class="row">
                    <div class="col-md-3">
                        <div class="mylogo">
                            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('user')); ?>/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right_header">
                            <div class="shop__sidebar__search">
                                <form action="<?php echo e(url('/search')); ?>">
                                    <input type="text" placeholder="Search..." name="search">
                                    <button type="submit"><span class="icon_search"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <nav class="icon__menu mobile-menu">
                            <ul style="margin:30px  0px 0px 60px">
                                <li>
                                    <?php if(session()->has('username')): ?>
                                    <a style="color:black;display:block" href="<?php echo e(url('/account')); ?>"><i style="font-size: 25px;" class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </a> <?php echo e(session('username')); ?>

                                    <ul class="dropdown">
                                        <li><a href="<?php echo e(url('/account')); ?>">Information</a></li>

                                        <li><a href="<?php echo e(url('/login/logout')); ?>">Logout</a></li>
                                    </ul>
                                    <?php else: ?>
                                    <a style="color:black;display:block" href="<?php echo e(url('login/signin')); ?>"><i style="font-size: 25px;" class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </a>Sign in
                                    <?php endif; ?>

                                </li>
                                <li>
                                    <?php if(session()->has('username')): ?>
                                    <a href="<?php echo e(url('pages/shoppingcart')); ?>" style="color:black"><i style="font-size: 25px;" class="fa fa-shopping-basket"></i></a>
                                    <a style="color:black" href=""></a><br>Cart
                                    <ul class="dropdown">
                                        <li style="background-color: #ff0000;"><a href="<?php echo e(url('/pages/shoppingcart')); ?>">giỏ
                                                hàng tạm thời</a></li>
                                        <li><a href="<?php echo e(url('/shop/paidcart')); ?>">paid shopping cart</a></li>
                                    </ul>
                                    <?php else: ?>
                                    <a href="<?php echo e(url('login/signin')); ?>" style="color:black"><i style="font-size: 25px;" class="fa fa-shopping-basket"></i></a>
                                    <a style="color:black" href=""></a><br>Cart
                                    <?php endif; ?>

                                    
                                    

                                </li>
                            </ul>
                        </nav>
                    </div>
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
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo e(url('/shop')); ?>">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo e(url('/pages/aboutus')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(url('/pages/shoppingcart')); ?>">Shopping Cart</a></li>

                                </ul>
                            </li>
                            <li><a href="<?php echo e(url('/blog')); ?>">Blog</a></li>
                            <li><a href="<?php echo e(url('/contacts')); ?>">Contacts</a></li>
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
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <div class="right">
                        <h4 style="color: aliceblue">Thống Kê Giao Dịch</h4>
                        <br>
                        <table style="color: aliceblue" class="table table-borderless">
                            <tr align="center">
                                <td><i style="color: aliceblue" class="fa fa-users" aria-hidden="true"></i></td>
                                <td> <i style="color: aliceblue" class="fa fa-bar-chart" aria-hidden="true"></i></td>
                                <td><i style="color: aliceblue" class="fa fa-tags" aria-hidden="true"></td>
                            </tr>
                            <tr align="center">
                                <td>84,959</td>
                                <td>17,261</td>
                                <td>5,696</td>
                            </tr>
                            <tr align="center">
                                <td>Thành viên</td>
                                <td>Acc đã bán</td>
                                <td>Acc đang bán</td>
                            </tr>
                        </table>
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
    <script src="<?php echo e(asset('user')); ?>/js/shopcart.js"></script>
    <div class="fix_tel">
        <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
            <div class="ring-alo-ph-circle"></div>
            <div class="ring-alo-ph-circle-fill"></div>
            <div class="ring-alo-ph-img-circle">
                <a href="tel:0862054327"><img class="lazy" src="https://khomaythegioi.com/icon/goi.png" alt="G"></a>
            </div>
        </div>
        <div class="tel">
            
            <a href="tel:0862054327">
                <p class="fone">0862054327</p>
               
            </a>
        </div>
       
    </div>





</body>

</html><?php /**PATH D:\aptech-k1\PJ\resources\views/user/layout/layout.blade.php ENDPATH**/ ?>