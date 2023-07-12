
<?php $__env->startSection('content'); ?>

<section class="hero">

    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/hero/hero-3.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/hero/hero-2.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->

<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="addorderr" data-url=<?php echo e(url('addorder')); ?>>
            <div class="col-lg-12">
                <ul class="filter__controls">
                    
                    <li data-filter=".new-arrivals" > <b>New Arrivals</b> </li>
                    
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-2 mix new-arrivals">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/product/<?php echo e($item->photo); ?>">
                        
                        <ul class="product__hover">
                            <li><a href="<?php echo e(url('shop/id/' . $item->id)); ?>"><img style="width:40px;height:40px"
                                        src="<?php echo e(asset('user')); ?>/img/icon/search.png" alt=""></a>
                            </li>
                            <li><a class="addorder" data-id="<?php echo e($item->id); ?>" href="<?php echo e(url('addorder/' . $item->id)); ?>"><img style="width:40px;height:40px"
                                src="<?php echo e(asset('user')); ?>/img/icon/cart1.png" alt=""></a>
                            </li>
                        </ul>
                        <span style="background-color: rgb(255, 0, 0);font-size:20px;color:aliceblue;">het hang</span>
                    </div> 
                    <div class="product__item__text" style="display: block">
                        <h6><?php echo e($item->name); ?></h6>
                        <a class="addorder" data-id="<?php echo e($item->id); ?> href="<?php echo e(url('addorder/' . $item->id)); ?>" class="add-cart"><button type="button"
                                style="width:165px;border-radius:6px;display:block " align="center"
                        class="btn btn-warning" >BUY</button></a>
                        
                        <h5>$ <?php echo e($item->price); ?> </h5>
                    </div> 
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Categories Section Begin -->

<!-- Categories Section End -->

<!-- Instagram Section Begin -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\PJ\resources\views/user/dashboard/index.blade.php ENDPATH**/ ?>