<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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
                    <div class="col-md-2">
                        <form>
                            <?php echo csrf_field(); ?>
                            <select id="Sort" name="Sort" class="form-select form-select-sm">
                                <option value="<?php echo e(Request::url()); ?>?sort_by=none">--Sort By--</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_az">Name A -> Z</option>
                                <option value="<?php echo e(Request::url()); ?>?sort_by=name_za">Name Z -> A</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-md-10">
                        <form action="<?php echo e(url('/admin/Search_Category')); ?>" method="get">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                <input type="search" class="form-control form-control-sm" placeholder="Search Category" name="search_category">
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
                    <th>Category ID</th>
                    <th>Photo</th>
                    <th>Category Name</th>
                    <th>Category's Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><img src="<?php echo e(asset('user/img/category')); ?>/<?php echo e($category->photo); ?>" alt="pic" style="width: 70px;"></td>
                    <td><?php echo e($category->name); ?></td>
                    <td><?php echo e($category->description); ?></td>
                    <td>
                        <a href="<?php echo e(url('/admin/delete_category/'.$category->id)); ?>" onclick="return confirm('Are you sure !?')">
                            Delete
                        </a> |
                        <a href="<?php echo e(url('/admin/edit_category/'.$category->id)); ?>">Edit</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo e(url('/admin/addcategory')); ?>">
                    <button class="btn btn-primary float-right">
                        <i class="fas fa-plus"></i> Add Category</button>
                </a>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Downloads\aptech-k21\aptech-k1\PJ\resources\views/admin/MainPage/category.blade.php ENDPATH**/ ?>