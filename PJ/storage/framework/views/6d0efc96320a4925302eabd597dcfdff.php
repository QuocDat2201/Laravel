<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Orders</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Add New Order</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label class="form-label" for="Customer's_Name">
                        Customer's name
                    </label>
                    <input type="text" class="form-control form-control-sm" id="Customer's_Name" placeholder="Customer's Name">
                </div>

                <div class="mt-3">
                    <label class="form-label" for="Address">
                        Delivery Address
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-address-book"></i>
                        </span>
                        <input type="text" class="form-control form-control-sm" id="Address" placeholder="Address...">
                    </div>
                </div>

                <div>
                    <label class="form-label" for="Product">
                        Product
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control form-control-sm" id="Proudct" placeholder="Select Product">
                    </div>
                </div>

                <div class="mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <a href=" <?php echo e(url('/admin/addproduct')); ?>">
                                <button class="btn btn-primary float-right">
                                    <i class="fas fa-ban"></i> Cancel
                                </button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#">
                                <button class="btn btn-primary">
                                    <i class="fas fa-save"></i> Save
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <br><br>
                <a href="<?php echo e(url('/admin/productlist')); ?>"><i class="fa fa-angle-left"> Back to Product List</i></a>
            </div>

            <div class="col-md-6">
                <div>
                    <label class="form-label" for="Phone">
                        Phone Number
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-phone"></i>
                        </span>
                        <input type="text" class="form-control form-control-sm" id="Phone" placeholder="Phone Number ...">
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label" for="Email">
                        Email
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="text" class="form-control form-control-sm" id="Email" placeholder="Ex: admin@gmail.com">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\PJ\resources\views/Admin/Create/createOrders.blade.php ENDPATH**/ ?>