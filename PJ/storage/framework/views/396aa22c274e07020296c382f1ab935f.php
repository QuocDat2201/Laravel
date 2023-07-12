<?php $__env->startSection('show'); ?>
<div class="product__details__pic">
<div class="row">
    <div class=" col-md-1">
        <ul class="nav nav-tabs" role="tablist" style="">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab0" role="tab">
                    <div style="border-radius:15%" class="product__thumb__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/product/<?php echo e($product->photo); ?>">
                    </div>
                </a>
            </li>
            <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-<?php echo e($item ->id); ?>" role="tab">
                    <div style="border-radius:15%" class="product__thumb__pic set-bg" data-setbg="<?php echo e(asset('user')); ?>/img/shop-details/<?php echo e($item->photo); ?>">
                    </div>
                </a>
            </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
    
        </ul>
    </div>
    <div class=" col-md-6">
        <div class="tab-content" >
            <div class="tab-pane active" id="tab0" role="tabpanel">
                <div class="product__details__pic__item" style="margin-left: 30px">
                    <img style="width:400px;height:400px;float:left;border-radius:5%" src="<?php echo e(asset('user')); ?>/img/product/<?php echo e($product->photo); ?>" alt="">
                </div>
            </div>
            <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tab-pane" id="tab-<?php echo e($item->id); ?>" role="tabpanel">
                <div class="product__details__pic__item" style="margin-left: 30px">
                    <img style="width:400px;height:400px;float:left;border-radius:5%" src="<?php echo e(asset('user')); ?>/img/shop-details/<?php echo e($item->photo); ?>" alt="">
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class=" col-md-5"  >
        <div style="" align="center">
        <h3 align="center" style="text-transform: uppercase;" ><?php echo e($product->name); ?></h3>
        <h4 align="center">$<?php echo e($product->price); ?></h4>
        <br>
        <button   type="button" style="width:220px;border-radius:6px;vertical-align: bottom; "  align="center" class="btn btn-warning">Mua</button>
        <br>
        <p><?php echo e($product->details); ?></p>
    </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.dashboard.shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QuocHi\aptech-k1\PJ\resources\views/user/dashboard/shop/shopdetails.blade.php ENDPATH**/ ?>