<?php $__env->startSection('title','about us'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="body">
        <div class="sidebar">
            <div class="user-d">
                <div class="admin">

                </div>
                <h3>admin</h3>
            </div>
            <ul>
                <li> <a href="<?php echo e(route('addproducts')); ?>" class="actionbtn"> add product</a>
                </li>
                <li> <a href="<?php echo e(route('products')); ?>"> products in </a></li>
                <li> <a href="<?php echo e(route('product_in')); ?>"> products out </a></li>
                <li> <a href="<?php echo e(route('addproducts')); ?>">reports</a></li>
                <li> <a href="<?php echo e(route('addproducts')); ?>"> log out</a></li>
            </ul>
           <!--  -->


        </div>
        <div class="fildtoaction">


        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pro-in-laravel\myplan\resources\views//dashboard.blade.php ENDPATH**/ ?>