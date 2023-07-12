
<?php $__env->startSection('content'); ?>
<div class="product__details__pic">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__breadcrumb">
                    <a href="./index.html">Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Product Details</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                            <div class="product__thumb__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/shop-details/thumb-1.png">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                            <div class="product__thumb__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/shop-details/thumb-2.png">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                            <div class="product__thumb__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/shop-details/thumb-3.png">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                            <div class="product__thumb__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/shop-details/thumb-4.png">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="product__details__pic__item">
                            <img src="<?php echo e(asset('user')); ?>/img/shop-details/product-big-2.png" alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="product__details__pic__item">
                            <img src="<?php echo e(asset('user')); ?>/img/shop-details/product-big-3.png" alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div class="product__details__pic__item">
                            <img src="<?php echo e(asset('user')); ?>/img/shop-details/product-big.png" alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <div class="product__details__pic__item">
                            <img src="<?php echo e(asset('user')); ?>/img/shop-details/product-big-4.png" alt="">
                            <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QuocHi\OneDrive\Máy tính\aptech-k1\PJ\resources\views/user/pages/shopdetails.blade.php ENDPATH**/ ?>