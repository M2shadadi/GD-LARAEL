<!-- resources/views/index.blade.php -->
 <!-- Using the main layout -->

<?php $__env->startSection('title', 'Home'); ?> <!-- Set page title -->

<?php $__env->startSection('content'); ?> <!-- Start of main content -->
    <div class="container">
            <div class="herosection">
                <h1>Think about innovetion to lounch on market</h1>
                      <!-- Add a welcome message -->
                    <p>MuhaziTech Ltd, a software company located in Rwamagana District, Eastern Province, <br>
                      specializes in developing custom web applications for small businesses in the region. </p>
            </div>
            <!-- Add a  preview section -->
             <div class="ourfuture">
                 <h1>our future</h1>
                    <div class="rows">
                        <div class="cols">
                            <h2> objective</h2>
                             <!-- Add an image -->
                             <img src="<?php echo e(asset('images/someimage')); ?>" alt="image represent objective" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>

                             
                        </div>
                        <div class="cols">
                            <h2> vision</h2>
                             <!-- Add an image -->
                             <img src="<?php echo e(asset('images/someimage')); ?>" alt="image represent visions" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>
                        </div>

                        <div class="cols">
                            <h2>mission </h2>
                             <!-- Add an image -->
                             <img src="<?php echo e(asset('images/someimage')); ?>" alt="image represent missions" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>
                        </div>



                   </div>

             </div>

              <div class="herosection">
                     <h1>Think about innovetion to lounch on market</h1>
                      <!-- Add a welcome message -->
                    <p>MuhaziTech Ltd, a software company located in Rwamagana District, Eastern Province, <br>
                      specializes in developing custom web applications for small businesses in the region. </p>
              </div>


    </div>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pro-in-laravel\myplan\resources\views/index.blade.php ENDPATH**/ ?>