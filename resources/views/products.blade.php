
        <!-- resources/views/addproducts.blade.php -->
@extends('layouts.app')
@section('title',' contacts')
@section('content')

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

            <form action="" method="POST">
                 <div class="submit-btn">
                    <input type="submit" name="showproduct" value="add product"> <br> <br>

                </div>
            </form>

                <table border="1px" style="border-collapse: collapse;">
                   <tr>
                        <th>product id</th>
                        <th>product name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>operation</th>
                   </tr>



                <?php
            if(isset($_POST['showproduct'])){


            $con = mysqli_connect('localhost', 'root', '', 'berwashop-db');

            $select = "SELECT * FROM `products` ";


            $run = mysqli_query($con, $select);

            ?>
            <tr>
            <?php
                if(mysqli_num_rows($run) > 0){


                    while($rows = mysqli_fetch_assoc($run)){
                        $product_id=$rows["prod_id"];
                        $product_name=$rows['prod_name'];
                        $product_description=$rows['prod_decription'];
                        $product_price=$rows['price'];


                 ?>
                    <td><?php echo $rows["prod_id"];?></td>
                    <td><?php echo $rows['prod_name'];?></td>
                    <td><?php echo $rows['prod_decription'];?></td>
                    <td><?php echo $rows['price'];?></td>
                    <td><a href="">delete</a>
                        <a href="">update</a>
                                             </td>

                 </tr>

                   <?php


            }

        }
    }
    ?>

       </div>


     </div>
    </div>


</body>
</html>
