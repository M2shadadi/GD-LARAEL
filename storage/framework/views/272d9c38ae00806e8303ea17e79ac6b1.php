<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berwashop | home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.css">

    <style>

        *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100vh;
            background-color: rgb(245, 243, 241);
            color: rgba(0, 0, 0, 0.737);




        }
        .form-fild{
            color: rgba(0, 0, 0, 0.737);
            padding: 5rem;
        }
        .form-input input{
                    width: 250px;
                    height: 30px;
                    margin-bottom: 20px;
                    padding-left: 10px;
                    outline: none;
                    border: rgb(135, 140, 140) solid 2px;
                    color: rgba(0, 0, 0, 0.737);
                }
        .submit-btn input{
                    background-color: rgb(86, 239, 83);
                    width: 100px;
                    height:30px;
                    border: none;
                    border-radius: 5px;
                    color: white;
                    margin-top:10px;

                }
       label #textarea{margin-top:-20px;}
        textarea{
            margin-bottom:20px;
        }



    </style>

   </head>
   <body>
    <header>
        <h2>Berwa <b>shop</b>

        </h2>

    </header>

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
<?php /**PATH C:\xampp\htdocs\pro-in-laravel\myplan\resources\views//products.blade.php ENDPATH**/ ?>