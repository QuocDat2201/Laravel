<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product's Galary</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Update Product</h2>
    </div>

    <div class="container">
        <div class="row">
            <form action="<?php echo e(url('/admin/update_product')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="form-label" for="Product_Name">
                                Product's name
                            </label>
                            <input type="text" class="form-control form-control-sm" id="Product_Name" value="<?php echo e($products->name); ?>" name="Name">


                            <div class="mt-3">
                                <label class="form-label" for="Photo">Product's photo</label>

                                <img src="<?php echo e(asset('user/img/product')); ?>/<?php echo e($products->photo); ?>" alt="pics" style="width: 70px; height: 70px;">
                                <br><br>

                                <input type="file" class="form-control" id="Photo" name="Photo">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                                <label for="Price" class="form-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                    <input type="text" class="form-control form-control-sm" id="Price" value="<?php echo e($products->price); ?>" name="Price">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="Quantity" class="form-label">Quantity</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    <input type="text" id="Quantity" class="form-control form-control-sm" value="<?php echo e($products->quantity); ?>" name="Quantity">
                                </div>
                            </div>

                            <div class="mt-5">
                                <button class="btn btn-primary" style="width: 100%;">
                                    <i class="fas fa-save"></i> Save
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <a href="<?php echo e(url('/admin/productlist')); ?>"><i class="fa fa-angle-left"> Back to Product List</i></a>

                <input type="hidden" name="id" value="<?php echo e($products->id); ?>">
                <input type="hidden" name="current_photo" value="<?php echo e($products->photo); ?>">
            </form>
        </div>
    </div>


    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\PJ\resources\views/admin/Create/createGalary.blade.php ENDPATH**/ ?>