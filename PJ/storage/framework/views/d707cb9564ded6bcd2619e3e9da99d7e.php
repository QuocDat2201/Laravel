
<?php $__env->startSection('content'); ?>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <a href="#">Sign in</a>
                            <a href="#">FAQs</a>
                        </div>
                        <div class="header__top__hover">
                            <span>Usd <i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li>USD</li>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="<?php echo e(url('/admin/dashboard')); ?>"><img src="<?php echo e(asset('admin')); ?>/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li ><a href="<?php echo e(url('/admin/dashboard')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('/admin/dashboard/shop')); ?>">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="<?php echo e(url('/admin/pages/aboutus')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(url('/admin/pages/shopdetails')); ?>">Shop Details</a></li>
                                <li><a href="<?php echo e(url('/admin/pages/shoppingcart')); ?>">Shopping Cart</a></li>
                                <li><a href="<?php echo e(url('/admin/pages/checkout')); ?>">Check Out</a></li>
                                <li><a href="<?php echo e(url('/admin/pages/blogdetails')); ?>">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="<?php echo e(url('/admin/dashboard/blog')); ?>">Blog</a></li>
                        <li><a href="<?php echo e(url('/admin/dashboard/contacts')); ?>">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="<?php echo e(asset('admin')); ?>/img/icon/search.png" alt=""></a>
                    <a href="#"><img src="<?php echo e(asset('admin')); ?>/img/icon/heart.png" alt=""></a>
                    <a href="#"><img src="<?php echo e(asset('admin')); ?>/img/icon/cart.png" alt=""> <span>0</span></a>
                    <div class="price">$0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<section class="breadcrumb-blog set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Blog</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-1.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-2.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-3.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-4.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>Aiming For Higher The Mastopexy</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-5.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Wedding Rings A Gift For A Lifetime</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-6.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>The Different Methods Of Hair Removal</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-7.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>Hoop Earrings A Style From History</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-8.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Lasik Eye Surgery Are You Ready</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('admin')); ?>/img/blog/blog-9.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('admin')); ?>/img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>Lasik Eye Surgery Are You Ready</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QuocHi\OneDrive\Máy tính\Project\Project\Project\resources\views/admin/dashboard/blog.blade.php ENDPATH**/ ?>