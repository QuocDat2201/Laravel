<?php $__env->startSection('content'); ?>
<div class="product__details__pic">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product__details__breadcrumb" style="float:left">
                    <a href="<?php echo e(url('/user/dashboard')); ?>">Home</a>
                    <a href="<?php echo e(url('/user/dashboard/shop')); ?>">Shop</a>
                    <span>Product Details</span>
                </div>
            </div>
            <div class="col-md-8">
               
            </div>
        </div>
        <div class="row">
            <div class=" col-md-1">
                <ul class="nav nav-tabs" role="tablist">
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
                <div class="tab-content">
                    <div class="tab-pane active" id="tab0" role="tabpanel">
                        <div class="product__details__pic__item" style="margin-left: 10px">
                            <img style="width:400px;height:400px;float:left;border-radius:5%" src="<?php echo e(asset('user')); ?>/img/product/<?php echo e($product->photo); ?>" alt="">
                        </div>
                    </div>
                    <?php $__currentLoopData = $imgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane" id="tab-<?php echo e($item->id); ?>" role="tabpanel">
                        <div class="product__details__pic__item" style="margin-left: 10px">
                            <img style="width:400px;height:400px;float:left;border-radius:5%" src="<?php echo e(asset('user')); ?>/img/shop-details/<?php echo e($item->photo); ?>" alt="">
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class=" col-md-5"  >
                dasfdsalkfjsdkjfhjsdjkfhsdfkjhsdafjksehfskse
                fsdfsdkfsdkfjsdkjfhs
                fsdjfshfsjkdhfjsfhsef
                sjfskhfskjhfweikf
                sfksdkfhjessjfhwi
                <img src="" alt="">
                sdkfnsdjkf
                <input type="text">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Downloads\aptech-k21\aptech-k1\PJ\resources\views/user/pages/shopdetails.blade.php ENDPATH**/ ?>