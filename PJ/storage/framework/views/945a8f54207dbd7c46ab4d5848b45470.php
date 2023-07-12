<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo e(asset('user/css/style2.css')); ?>">
    <title>Sign In</title>
</head>
<body>
    <div class="water-border">
    <form method="post" action="<?php echo e(url('login/signincheck')); ?>">
    <?php echo csrf_field(); ?>
        <div class="container">
            <div class="top-header">
                <span>Have an account?&nbsp;<label><a href="<?php echo e(url('login/signup')); ?>">Sign up</a></label> </span>
                <header>Login</header>
                <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <p align="center" style="color:red"><?php echo e(session('error')); ?></p>                   
                </div>
                <?php endif; ?>
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
                <input type="submit" class="submit" name="submit" value="Login">
            </div>
    
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check">Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password !</a></label>
                </div>
            </div>
        </div>
    </form>
        <?php if(session('error')): ?>
            <div class="alert">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
    </div>
    <script>
// Ẩn thông báo sau 2 giây
setTimeout(function() {
    document.querySelector('.alert').style.display = 'none';
},2500);
</script>

</body>
</html><?php /**PATH C:\Users\QUOC DAT\Desktop\aptech-k1\PJ\resources\views/user/dashboard/login/signin.blade.php ENDPATH**/ ?>