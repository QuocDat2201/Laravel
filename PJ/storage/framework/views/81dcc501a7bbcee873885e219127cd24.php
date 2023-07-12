<?php $__env->startSection('show'); ?>
    <div class="shop__product__option">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="shop__product__option__right">
                    <p>Sort by Price:</p>
                    <select>
                        <option value="">Low To High</option>
                        <option value="">$0 - $55</option>
                        <option value="">$55 - $100</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="product__item sale">
                    <div class="product__item__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/product/<?php echo e($item->photo); ?>">
                        
                        <ul class="product__hover">
                            <li><a href="<?php echo e(url('user/dashboard/shop/' . $item->id)); ?>"><img style="width:40px;height:40px"
                                        src="<?php echo e(asset('user')); ?>/img/icon/search.png" alt=""></a>
                            </li>
                            <li><a href="<?php echo e(url('user/dashboard/shop/' . $item->id)); ?>"><img style="width:40px;height:40px"
                                src="<?php echo e(asset('user')); ?>/img/icon/cart1.png" alt=""></a>
                    </li>
                        </ul>
                        <span style="background-color: rgb(255, 0, 0);font-size:20px;color:aliceblue;">het hang</span>
                    </div>
                    <div class="product__item__text" style="display: block">
                        <h6><?php echo e($item->name); ?></h6>
                        <a href="#" class="add-cart"><button class="button-buy" type="button"
                                style="width:100%;border-radius:6px;display:block " align="center"
                                class="btn btn-warning">BUY</button> </a>
                        
                        <h5>$<?php echo e($item->price); ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="product__pagination">
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <span>...</span>
                <a href="#">21</a>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('user.dashboard.shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QuocHi\aptech-k1\PJ\resources\views/user/dashboard/shop/shop.blade.php ENDPATH**/ ?>