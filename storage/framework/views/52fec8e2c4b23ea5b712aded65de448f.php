<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin_style.css')); ?>">
</head>
<body>
    <header>
        <div class="logo">
            <img src="<?php echo e(asset('images/someimage')); ?>" alt="web logo">
            <a href="<?php echo e(route('home')); ?>"><h2>inventory <span>system</span></h2></a>
        </div>
        <div class="links">
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('service')); ?>">Service</a>
            <a href="<?php echo e(route('about')); ?>">About</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>

            <a href="<?php echo e(route('dashboard')); ?>">Dashboard </a>



        </div>

    </header>



        <!--page content  -->
<?php echo $__env->yieldContent('content'); ?>

  <!-- footer layout file -->
<?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\pro-in-laravel\myplan\resources\views/layouts/app.blade.php ENDPATH**/ ?>