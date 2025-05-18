<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Berwashop |registration</title>
    

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
                    justify-content: center;
                    text-transform: capitalize;
                  
                
                    
                }
                .container{
                    width: 50%;
                    height: auto;
                    background-color: white;
                    justify-content: center;
                    align-items: center;
                    margin: 20px 20% ;
                    padding: 20px;
                   
                    
                    
                }

                .container h1{
                    font-size: 50px;
                    margin-bottom: 10px;
                    color: rgb(78, 118, 240);

                }
                .form-input input{
                    width: 250px;
                    height: 30px;
                    margin-bottom: 20px;
                    padding-left: 10px;
                    outline: none;
                    border: rgb(135, 140, 140) solid 2px;
                }

                .submit-btn input{
                    background-color: rgb(86, 239, 83);
                    width: 100px;
                    height:30px;
                    border: none;
                    border-radius: 5px;
                    color: white;
                    padding-left: 10px;
                    
                }
       </style>
</head>
<body>
    
        <div class="container">
            
                <h1>registration</h1>
                <form action="" method="post">
                    <div class="form-input">
                        <input type="text" name="username" placeholder=" enter user name">
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" placeholder="enter email">
                    </div>
                    <div class="form-input">
                        <input type="password" name="password1" placeholder="enter password">
                    </div>
                   
                    <div class="form-input">
                        <input type="password" name="password2" placeholder="comfirm password">
                    </div>
                    <div class="submit-btn">
                        <input type="submit" name="register" value="Register" >
                        <br> <br>
                        already have account click<a href="login.php">Login</a>
                    </div>
    
                </form>
            
        <?php
        if(isset($_POST['register'])){
            $user_name=$_POST['username'];
            $email=$_POST['email'];
            $pass1=$_POST['password1'];
            $pass2=$_POST['password2'];

            if($pass1 != $pass2){
                echo" <script>alert('password not martch')</script>";
            }else{
                $con=mysqli_connect('localhost','root','','berwashop-db');
                $insert="INSERT INTO `users` VALUES ('','$user_name','$email','$pass1')";

                $run=mysqli_query($con,$insert);
            }
            echo"account created";
            echo "<script>location.href='login.php'</script>";
        }
        ?>
           
        </div>

   
</body>
</html>




        if(isset($_POST['addproduct'])){
            $product_name=$_POST['product'];
            $product_description=$_POST['description'];
            $product_price=$_POST['price'];

                $con=mysqli_connect('localhost','root','','berwashop-db');
                $insert="INSERT INTO `products` VALUES ('','$product_name','$product_description','$product_price')";

                $run=mysqli_query($con,$insert);
             if($run){
            echo"product added!!";
            // echo "<script>location.href='.php'</script>";
            }
        }
