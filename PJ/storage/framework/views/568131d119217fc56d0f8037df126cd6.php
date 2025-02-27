<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo e(asset('user/css/style3.css')); ?>">
    <title>Sign Up</title>
</head>
<body>
    <div class="water-border">
    <form method="post" action="<?php echo e(url('login/add')); ?>">
    <?php echo csrf_field(); ?>
        <div class="container">
            <div class="top-header">
                <header>Sign up</header>
            </div>

            <div class="input-field">
                <input type="text" class="input" name="name" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" name="password" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" name="checkpass" placeholder="Reset Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="email" class="input" name="email" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" name="register" value="Register">
            </div>
        </div>
    </form>
    </div>
    <a href="<?php echo e(url('index')); ?>">-> Back to Home Page</a>
</body>
</html><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\Laravel\PJ\resources\views/user/dashboard/login/signup.blade.php ENDPATH**/ ?>