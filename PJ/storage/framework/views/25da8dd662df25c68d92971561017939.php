<?php $__env->startSection('content'); ?>
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product__details__breadcrumb" style="float:left">
                        <a href="<?php echo e(url('/user/dashboard')); ?>">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
                <div class="col-md-8">                 
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="<?php echo e(url('/search')); ?>">
                                <input type="text" placeholder="Search..." name="search">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-bars"
                                                aria-hidden="true"> </i>&nbsp;&nbsp; Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">

                                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><a href="<?php echo e(url('shop/category/'.$item->id)); ?>"><?php echo e($item->name); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="<?php echo e(url('/searchprice/1')); ?>">$0.00 - $15.00</a></li>
                                                    <li><a href="<?php echo e(url('/searchprice/2')); ?>">$15.00 - $30.00</a></li>
                                                    <li><a href="<?php echo e(url('/searchprice/3')); ?>">$30.00 - $50.00</a></li>                                             
                                                    <li><a href="<?php echo e(url('/searchprice/4')); ?>">50.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <a href="#">Product</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                 <?php echo $__env->yieldContent('show'); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PJ\resources\views/user/dashboard/shop/layout.blade.php ENDPATH**/ ?>