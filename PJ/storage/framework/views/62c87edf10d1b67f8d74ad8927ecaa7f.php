<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css')); ?>/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <?php $__env->startSection('content'); ?>
    <div align="center">
        <h2>Users List</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
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
                    <div class="col-md-3">
                        <form>
                            <?php echo csrf_field(); ?>
                            <select id="Choose" name="Choose" class="form-select form-select-sm">
                                <option>Filter</option>
                                <option value="<?php echo e(Request::url()); ?>?choose=male">Male</option>
                                <option value="<?php echo e(Request::url()); ?>?choose=female">Female</option>
                                <option value="<?php echo e(Request::url()); ?>?choose=admin">Admin</option>
                                <option value="<?php echo e(Request::url()); ?>?choose=user">User</option>
                            </select>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <form action="<?php echo e(url('/admin/Search_Users')); ?>" method="get">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                <input type="search" class="form-control form-control-sm" placeholder="Search Users" name="search_users">
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
                    <th>ID</th>
                    <th>Username</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Role</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $use): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><?php echo e($use->userid); ?></td>
                    <td><?php echo e($use->name); ?></td>
                    <td><?php echo e($use->age); ?></td>
                    <td>
                        <?php if($use->sex == 1): ?>
                        Male
                        <?php elseif($use->sex == 0): ?>
                        Female
                        <?php else: ?>

                        <?php endif; ?>
                    </td>
                    <td><?php echo e($use->phone); ?></td>
                    <td><?php echo e($use->email); ?></td>
                    <td><?php echo e($use->address); ?></td>
                    <td>
                        <?php if($use->role_id == 1): ?>
                        Admin
                        <?php elseif($use->role_id == 2): ?>
                        User
                        <?php endif; ?>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <div class="row">
            <div class="col-md-12">
                <?php echo e($users->links('pagination::bootstrap-5  ')); ?>

            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\Laravel\PJ\resources\views/admin/MainPage/users.blade.php ENDPATH**/ ?>