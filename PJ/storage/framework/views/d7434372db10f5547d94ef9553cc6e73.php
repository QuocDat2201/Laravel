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
        <h2>Category List</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo e(url('/admin/productlist')); ?>"><i class="fa fa-angle-left"> Product List</i></a>
                <div class="row">
                    <div class="col-md-4">
                        <select id="Filter" class="form-select form-select-sm" value="filter">
                            <option>Filter</option>
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
                    <div class="col-md-1">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Product Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>
                        <a href="#">Delete</a> |
                        <a href="#">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>
                        <a href="#">Delete</a> |
                        <a href="#">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>
                        <a href="#">Delete</a> |
                        <a href="#">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Quantity</td>
                    <td>
                        <a href="#">Delete</a> |
                        <a href="#">Edit</a>
                    </td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary float-right">
                    <i class="fas fa-plus"></i> Add Category</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\New folder\aptech-k1\PJ\resources\views/Admin/MainPage/category.blade.php ENDPATH**/ ?>