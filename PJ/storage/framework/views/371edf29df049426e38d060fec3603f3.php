<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order_Details</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Orders Details</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customer's Information</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Username</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo e($orders->orderid); ?></td>
                                        <td><?php echo e($orders->username); ?></td>
                                        <td><?php echo e($orders->phone); ?></td>
                                        <td><?php echo e($orders->email); ?></td>
                                        <td><?php echo e($orders->address); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customer's Product</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product's Name</th>
                                        <th>Photo</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Total money</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $order_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($order_prod->product_name); ?></td>
                                        <td><img src="<?php echo e(asset('user/img/product')); ?>/<?php echo e($order_prod->product_photo); ?>" alt="pics" style="width: 70px; height: 70px;"></td>
                                        <td><?php echo e($order_prod->quantity_product_order); ?></td>
                                        <td><?php echo e($order_prod->product_price); ?>$</td>
                                        <td><?php echo e($order_prod->quantity_product_order * $order_prod->product_price); ?>$</td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td colspan="4">Total Payable</td>
                                        <td>
                                            <?php $sum = 0 ?>
                                            <?php $__currentLoopData = $order_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            $sum += ($order_prod->quantity_product_order * $order_prod->product_price);
                                            ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($sum); ?>$
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\ALO\Laravel\PJ\resources\views/Admin/MainPage/order_details.blade.php ENDPATH**/ ?>