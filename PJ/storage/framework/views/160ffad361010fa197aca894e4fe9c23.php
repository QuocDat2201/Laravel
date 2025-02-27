<?php $__env->startSection('content'); ?>
<style>
    .edit-form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.edit-form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.edit-form input[type="text"],
.edit-form input[type="email"],
.edit-form textarea {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.edit-form button[type="submit"] {
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.edit-form button[type="submit"]:hover {
    background-color: #45a049;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:#000000; " align="center">Infomation</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div style="width:100%;height:190px">
                <img align="center" src="<?php echo e(asset('images/bginfo1.jpg')); ?>" alt="" style="width: 500px;height:150px; display:block;margin-left: auto; margin-right: auto;">

            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><img align="center" src="<?php echo e(asset('images/bginfo1.jpg')); ?>" alt="" style="width: 100px;height:100px; display:block;color: #fff;
                                    position: absolute;bottom:20px">
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="clo-md-5"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 align="center"><b><?php echo e(session('username')); ?></b></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="edit-form">
                <form method="post" action="<?php echo e(url('/save')); ?>/<?php echo e($user[0]->id); ?>">
                    <?php echo csrf_field(); ?>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo e($user[0]->name); ?>">

                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" value="<?php echo e($user[0]->age); ?>">

                    <label for="address">Address:</label>
                    <textarea id="address" name="address"><?php echo e($user[0]->address); ?></textarea>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo e($user[0]->email); ?>">

                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="<?php echo e($user[0]->phone); ?>">

                    <button type="submit">Save</button>
                    <tr>
                        <td>
                            <input type="hidden" name="user_id" value="<?php echo e($user[0]->id); ?>">
                        </td>
                    </tr>
                </form>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\ALO\Laravel\PJ\resources\views//user/dashboard/edit.blade.php ENDPATH**/ ?>