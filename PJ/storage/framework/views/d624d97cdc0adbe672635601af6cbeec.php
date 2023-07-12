<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Product List</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <form>
                            <?php echo csrf_field(); ?>
                            <select id="Sort" name="Sort" class="form-select form-select-sm">
                                <option value="<?php echo e(Request::url()); ?>?sort_by=none">--Sort By--</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_az">Name A -> Z</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_za">Name Z -> A</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=price_desc">Price Decrease</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=price_asc">Price Increase</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=category_az">Category A -> Z</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=category_za">Category Z -> A</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=quantity_desc">Quantity Decrease</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=quantity_asc">Quantity Increase</option>
                            </select>
                        </form>
                    </div>

                    <div class="col-md-8">
                        <form action="<?php echo e(url('/admin/Search_Product')); ?>" method="get">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                <input type="search" class="form-control form-control-sm" placeholder="Search Product" name="search_product">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo e(url('/admin/addproduct')); ?>">
                            <button class="btn btn-primary form-control form-control-sm">
                                <i class="fas fa-plus"></i> Add Product
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product's ID</th>
                    <th>Product's Name</th>
                    <th>Photo</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><img src="<?php echo e(asset('user/img/product')); ?>/<?php echo e($product->photo); ?>" alt="pics" style="width: 70px;"></td>
                    <td><?php echo e($product->price); ?>$</td>
                    <td><?php echo e($product->category_name); ?></td>
                    <td><?php echo e($product->quantity); ?></td>
                    <td>
                        <a href="<?php echo e(url('/admin/delete_product/'.$product->id)); ?>" onclick="return confirm('Are you sure !?')">
                            Delete
                        </a> |
                        <a href="<?php echo e(url('/admin/edit_product/'.$product->id)); ?>">
                            Edit
                        </a>
                    </td>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\PJ\resources\views/Admin/MainPage/product.blade.php ENDPATH**/ ?>