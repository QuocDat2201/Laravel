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
                        <select id="Filter" class="form-select form-select-sm" value="filter">
                            <option>Filter</option>
                            <option>Role 2</option>
                            <option>Role 3</option>
                            <option>Role 4</option>
                            <option>Role 5</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select id="Filter" class="form-select form-select-sm" name="Status">
                            <option>Payment</option>
                            <option>Role 2</option>
                            <option>Role 3</option>
                            <option>Role 4</option>
                            <option>Role 5</option>
                        </select>
                    </div>

                    <div class="col-md-8">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                            <input type="search" class="form-control form-control-sm" placeholder="Search">
                        </div>
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
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Payment</th>
                    <th>Order Date</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>CUSTOMER</td>
                    <td>Product Name</td>
                    <td>PAYMENT</td>
                    <td>DATE</td>
                    <td>TOTAL</td>
                    <td>
                        <a href="<?php echo e(url('/admin/order_details')); ?>">Detail</a> |
                        <a href="#">Edit</a> |
                        <a href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Downloads\aptech-k21\aptech-k1\PJ\resources\views/Admin/MainPage/orders.blade.php ENDPATH**/ ?>