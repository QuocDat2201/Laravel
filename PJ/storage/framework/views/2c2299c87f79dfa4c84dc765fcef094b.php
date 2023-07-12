<?php $__env->startSection('show'); ?>
    <div class="shop__product__option">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
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
    <div class="container">
        <div class="row addorderr" data-url=<?php echo e(url('addorder')); ?>>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" col-md-3 ">
                    <div class="product__item sale">

                        <div class="product__item__pic set-bg"
                            data-setbg="<?php echo e(asset('user')); ?>/img/product/<?php echo e($item->photo); ?>">
                            
                            <ul class="product__hover">
                                <li><a href="<?php echo e(url('shop/id/' . $item->id)); ?>"><img style="width:40px;height:40px"
                                            src="<?php echo e(asset('user')); ?>/img/icon/search.png" alt=""></a>
                                </li>
                                <li><a id="cart" class="addorder" data-id="<?php echo e($item->id); ?>" href=""><img
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
                        <div class="product__item__text">
                            <h6><?php echo e($item->name); ?></h6>
                            <a href="<?php echo e(url('/shop/buy/')); ?>/<?php echo e($item->id); ?>" class="btn btn-warning add-cart "
                                style="width:185px;border-radius:6px;" align="center">BUY</a>
                            
                            <h5>$<?php echo e($item->price); ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product__pagination">
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <span>...</span>
                    <a href="#">21</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
    // $(function ad() {
    //     $.ajax({
    //         url: 'localhost:8000',
    //         type: 'POST',
    //         data: {
    //             id: 1
    //         },
    //         success: function() {
    //             alert("Settings has been updated successfully.");
    //         }
    //     });
    // });
</script>

<?php echo $__env->make('user.dashboard.shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Downloads\aptech-k21\aptech-k1\PJ\resources\views/user/dashboard/shop/shop.blade.php ENDPATH**/ ?>