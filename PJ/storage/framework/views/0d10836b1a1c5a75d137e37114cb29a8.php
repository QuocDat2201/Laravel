<?php $__env->startSection('content'); ?>
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
                <img align="center" src="<?php echo e(asset('user/img/avatar')); ?>/<?php echo e($user[0]->photo); ?>" alt="" style="width: 500px;height:150px; display:block;margin-left: auto; margin-right: auto;">

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
                <div class="col-md-8"><img align="center" src="<?php echo e(asset('user/img/avatar')); ?>/<?php echo e($user[0]->photo); ?>" alt="" style="width: 100px;height:100px; display:block;color: #fff;
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
            <table align="center" width="400px">
                <tr>
                    <td style="text-align: left;">Name user :</td>
                    <td style="text-align: right;"><?php echo e($user[0]->name); ?></td>
                </tr>
                <tr>
                    <td style="text-align: left;">Age :</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo e($user[0]->age); ?></td>

                </tr>
                <tr>
                    <td style="text-align: left;">Address :</td>
                    <td style="text-align: right;">
                        <?php echo e($user[0]->address); ?>

                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;">Email :</td>
                    <td style="text-align: right;">
                        <?php echo e($user[0]->email); ?>

                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;">Phone :</td>
                    <td style="text-align: right;">
                        <?php echo e($user[0]->phone); ?>

                    </td>
                </tr>
                <tr>
                    <td><a href="<?php echo e(url('/edit')); ?>"><button>edit</button></a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3"></div>
    </div>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tn018\Desktop\ALO\Laravel\PJ\resources\views/user/dashboard/info.blade.php ENDPATH**/ ?>