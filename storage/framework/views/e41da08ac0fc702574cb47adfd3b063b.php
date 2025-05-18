<!-- resources/views/addproducts.blade.php -->

<?php $__env->startSection('title',' contacts'); ?>
<?php $__env->startSection('content'); ?>

<div class="container indashbord">

    <div class="body">
        <div class="sidebar">
            <div class="user-d">
                <div class="admin">

                </div>
                <h3>admin</h3>
            </div>
             <ul>
                <li> <a href="addproducts.php" class="actionbtn"> add product</a>
                </li>
                <li> <a href="products.php"> products in</li>
                <li> <a href="#"> products out</li>
                <li> <a href="#">reports</a></li>
                <li> <a href="#"> log out</a></li>
            </ul>
           <!--  -->


        </div>
        <div class="fildtoaction">
            <div class="form-fild">
            <h1>add products</h1>
                <form action="" method="post">
                    <div class="form-input textarea">
                        <label for="">product name:</label>
                        <input type="text" name="product" class="inputarea" placeholder=" enter product name">
                    </div>
                    <div class="form-input"id="textarea" >
                    <label for="" >product description:</label>
                        <textarea name="description" cols="27" rows="5" id="" placeholder="enter description">

                        </textarea>

                    </div>
                    <div class="form-input">
                    <label for="">product price:</label>
                        <input type="number" name="price" placeholder="enter price">
                    </div>

                    <div class="submit-btn">
                        <button name="addproduct" class="inputarea"> add product </button>  <br> <br>

                    </div>
                </form>
            </div>
         </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pro-in-laravel\myplan\resources\views//addproducts.blade.php ENDPATH**/ ?>