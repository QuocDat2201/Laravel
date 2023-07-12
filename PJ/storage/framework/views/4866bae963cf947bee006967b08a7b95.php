<?php $__env->startSection('show'); ?>
    <div class="product__details__pic">
        <div class="row addorderr" data-url=<?php echo e(url('addorder')); ?>>
            <div class=" col-md-1">
                <ul class="nav nav-tabs" role="tablist" style="">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab0" role="tab">
                            <div style="border-radius:15%" class="product__thumb__pic set-bg"
                                data-setbg="<?php echo e(asset('user')); ?>/img/product/<?php echo e($product->photo); ?>">
                            </div>
                        </a>
                    </li>
                    <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-<?php echo e($item->id); ?>" role="tab">
                                <div style="border-radius:15%" class="product__thumb__pic set-bg"
                                    data-setbg="<?php echo e(asset('user')); ?>/img/shop-details/<?php echo e($item->photo); ?>">
                                </div>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class=" col-md-6">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab0" role="tabpanel">
                        <div class="product__details__pic__item" style="margin-left: 30px">
                            <img style="width:400px;height:400px;float:left;border-radius:5%"
                                src="<?php echo e(asset('user')); ?>/img/product/<?php echo e($product->photo); ?>" alt="">
                        </div>
                    </div>
                    <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane" id="tab-<?php echo e($item->id); ?>" role="tabpanel">
                            <div class="product__details__pic__item" style="margin-left: 30px">
                                <img style="width:400px;height:400px;float:left;border-radius:5%"
                                    src="<?php echo e(asset('user')); ?>/img/shop-details/<?php echo e($item->photo); ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class=" col-md-5">
                <div style="" align="center">
                    <h3 align="center" style="text-transform: uppercase;"><?php echo e($product->name); ?></h3>
                    <h4 align="center">$<?php echo e($product->price); ?></h4>
                    <br>
                    <button href="<?php echo e(url('/shop/buy/')); ?><?php echo e($product->id); ?>"  style="width:220px;border-radius:6px;vertical-align: bottom; " align="center"
                        class="btn btn-warning">Mua</button>
                    <a class="addorder" data-id="<?php echo e($product->id); ?>" href="<?php echo e(url('addorder/' . $product->id)); ?>"><img
                            style="width:40px;height:40px;background-color:rgb(236, 179, 10);border-radius:5px"
                            src="<?php echo e(asset('user')); ?>/img/icon/cart1.png" alt="<?php echo e($product->name); ?>"></a>
                    <br>
                    <br>
                    <p><b>->Product details : </b><?php echo e($product->details); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
              </div></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $products_c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->id != $product->id): ?>
                    <div class=" col-md-3 ">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg"
                                data-setbg="<?php echo e(asset('user')); ?>/img/product/<?php echo e($item->photo); ?>">
                                
                                <ul class="product__hover">
                                    <li><a href="<?php echo e(url('shop/' . $item->id)); ?>"><img style="width:40px;height:40px"
                                                src="<?php echo e(asset('user')); ?>/img/icon/search.png" alt=""></a>
                                    </li>
                                    <li><a class="addorder" data-id="<?php echo e($item->id); ?>" href="<?php echo e(url('addorder/' . $item->id)); ?>"><img
                                                style="width:40px;height:40px" src="<?php echo e(asset('user')); ?>/img/icon/cart1.png"
                                                alt="<?php echo e($item->name); ?>"></a>
                                    </li>
                                </ul>
                                <?php if($item->quantity == 0): ?>
                                    <span style="background-color: rgb(255, 0, 0);font-size:20px;color:aliceblue;">het
                                        hang</span>
                                <?php else: ?>
                                <?php endif; ?>
                            </div>
                            <div class="product__item__text" style="display: block">
                                <h6><?php echo e($item->name); ?></h6>
                                <a href="<?php echo e(url('/shop/buy/')); ?><?php echo e($item->id); ?>" class="add-cart">
                                    <button type="button" style="width:175px;border-radius:6px;display:block "
                                        align="center" class="btn btn-warning " >BUY</button> </a>
                                
                                <h5>$<?php echo e($item->price); ?></h5>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.dashboard.shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\ALO\Laravel\PJ\resources\views/user/dashboard/shop/shopdetails.blade.php ENDPATH**/ ?>