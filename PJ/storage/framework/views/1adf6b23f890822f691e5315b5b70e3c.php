<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderslist</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Orders List</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <form>
                            <?php echo csrf_field(); ?>
                            <select id="Sort" name="Sort" class="form-select form-select-sm">
                                <option>--Sort--</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_az">Name A -> Z</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_za">Name Z -> A</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=address_az">Address A -> Z</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=address_za">Address Z -> A</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <form>
                            <?php echo csrf_field(); ?>
                            <select id="Choose" name="Choose" class="form-select form-select-sm">
                                <option>Status</option>
                                <option value="<?php echo e(Request::url()); ?>?choose=paid">Paid order</option>
                                <option value="<?php echo e(Request::url()); ?>?choose=unpaid">Unpaid order</option>
                            </select>
                        </form>
                    </div>

                    <div class="col-md-8">
                        <form action="<?php echo e(url('/admin/Search_Orders')); ?>" method="get">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                <input type="search" class="form-control form-control-sm" placeholder="Search Orders" name="search_orders">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Username</th>
                    <th>Delivery To</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->orderid); ?></td>
                    <td><?php echo e($order->username); ?></td>
                    <td><?php echo e($order->address); ?></td>
                    <td>
                        <?php if($order->status == 1): ?>
                            Order has been paid
                        <?php elseif($order->status == 0): ?>
                            Unpaid order
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(url('/admin/order_details/'.$order->orderid)); ?>">
                            Order's detail
                        </a>
                    </td>
                </tr>
                <input type="hidden" name="orderid" value="<?php echo e($order->id); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-12">
                <?php echo e($orders->links('pagination::bootstrap-5  ')); ?>

            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\Laravel\PJ\resources\views/admin/MainPage/orders.blade.php ENDPATH**/ ?>