
<?php $__env->startSection('content'); ?>

<section class="breadcrumb-blog set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/breadcrumb-bg.jpg">
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
                    <div class="blog__item__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/blog/blog-1.jpeg"></div>
                    <div class="blog__item__text">
                        <span><img src="<?php echo e(asset('user')); ?>/img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="<?php echo e(url('/user/dashboard/blogrm')); ?>">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QuocHi\aptech-k1\PJ\resources\views/user/dashboard/blog.blade.php ENDPATH**/ ?>