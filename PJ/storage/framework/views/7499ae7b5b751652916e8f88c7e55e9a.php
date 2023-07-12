<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage Management</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Management Storage</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo e(url('/admin/productlist')); ?>"><i class="fa fa-angle-left"> Product List</i></a>
                <div class="row">
                    <div class="col-md-2">
                        <form>
                            <?php echo csrf_field(); ?>
                            <select id="Sort" name="Sort" class="form-select form-select-sm">
                                <option value="<?php echo e(Request::url()); ?>?sort_by=none">--Sort By--</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_az">Name A -> Z</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_za">Name Z -> A</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=category_az">Category A -> Z</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=category_za">Category Z -> A</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=quantity_desc">Quantity Decrease</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=quantity_asc">Quantity Increase</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-md-8">
                        <form action="<?php echo e(url('/admin/Search_Management')); ?>" method="get">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                <input type="search" class="form-control form-control-sm" placeholder="Search_Product"
                                name="search_product">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" align="center">
        <table class="table table-bordered" align="center" style="text-align: center;">
            <thead>
                <tr>
                    <th>Product's ID</th>
                    <th>Product's Name</th>
                    <th>Photo</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><img src="<?php echo e(asset('user/img/product')); ?>/<?php echo e($product->photo); ?>" alt="pics" style="width: 70px;"></td>
                    <td><?php echo e($product->quantity); ?></td>
                    <td><?php echo e($product->category_name); ?></td>
                    <form action="<?php echo e(url('/admin/update_quantity')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <td class="input-group-text">
                            <input type="submit" class="form-control form-control-sm" value="- Export -" name="export">

                            <input type="number" style="width: 55px;" class="form-control form-control-sm" value="0" name="add_quantity" min="0">

                            <input type="submit" class="form-control form-control-sm" value="+ Import +" name="import">
                        </td>
                        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                        <input type="hidden" name="current_quantity" value="<?php echo e($product->quantity); ?>">
                    </form>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <div class="row">
            <div class="col-md-12">
                <?php echo e($products->links('pagination::bootstrap-5  ')); ?>

            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\PJ\resources\views/Admin/MainPage/management.blade.php ENDPATH**/ ?>