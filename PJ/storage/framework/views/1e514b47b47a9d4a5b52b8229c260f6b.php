<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Add New Product</h2>
    </div>

    <div class="container">
        <div class="row">
            <form action="<?php echo e(url('/admin/save_product')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <label class="form-label" for="Product_Name">
                                Product's name
                            </label>
                            <input type="text" class="form-control form-control-sm" id="Product_Name" placeholder="Product Name" name="Name" required>

                            <div class="mt-3">
                                <label for="description" class="form-label">Description</label>
                                <br>
                                <textarea cols="100" rows="10" id="description" class="form-control" name="Description" required></textarea>
                            </div>

                            <div class="mt-3">
                                <label class="form-label" for="Photo">Product's photo</label>
                                <input type="file" class="form-control" id="Photo" name="Photo" accept="image/*" required>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div>
                                <label for="Price" class="form-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                    <input type="text" class="form-control form-control-sm" id="Price" placeholder="Insert Price" name="Price" required>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="Quantity" class="form-label">Quantity</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    <input type="text" id="Quantity" class="form-control form-control-sm" placeholder="Insert Quantity" name="Quantity" required>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="Category" class="form-label">Category</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <select name="Category" class="form-control form-control-sm" required>
                                        <option value="">None</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
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
            </form>
        </div>
    </div>


    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aptech-k1\PJ\resources\views/Admin/Create/createProduct.blade.php ENDPATH**/ ?>