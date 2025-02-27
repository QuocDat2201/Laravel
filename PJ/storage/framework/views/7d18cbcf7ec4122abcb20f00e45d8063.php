<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Add New Category</h2>
    </div>

    <div class="container">
        <div class="row">
            <form action="<?php echo e(url('/admin/save_category')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="col-md-12">
                    <label class="form-label" for="Category_Name">
                        Category's name
                    </label>
                    <input type="text" class="form-control form-control-sm" id="Category_Name" placeholder="Category Name" name="Name" required>

                    <div class="mt-3">
                        <label class="form-label" for="Description">Category's Description</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-pen"></i>
                            </span>
                            <input type="text" class="form-control form-control-sm" id="Description" placeholder="Description..." name="Description">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" for="Photo">Category's photo</label>
                            <input type="file" class="form-control" id="Photo" name="Photo">
                        </div>

                        <div class="mt-5">
                            <button class="btn btn-primary">
                                <i class="fas fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                </div>
                <br><br>
                <a href="<?php echo e(url('/admin/category')); ?>"><i class="fa fa-angle-left"> Back to Category</i></a>
        </div>
        </form>
    </div>
    </div>

    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1 - Copy\PJ\resources\views/Admin/Create/createCategory.blade.php ENDPATH**/ ?>