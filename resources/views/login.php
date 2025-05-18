<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berwashop |login</title>
    
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

                .form-input input:focas{
                    color: blue;
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
        <h1>login</h1>
        <form action="" method="post">
            <div class="form-input">
                <input type="text" name="names" placeholder=" enter user name">
            </div>
            <div class="form-input">
                <input type="password" name="password1" placeholder="enter password">
            </div>
          
            <div class="submit-btn">
                <input type="submit" name="login" value="Login"> <br> <br>
                 Create accout click<a href="registration.php"> Registration</a>
            </div>
        </form>

        <?php
        if(isset($_POST['login'])){
            $names = $_POST['names'];
            $pass1 = $_POST['password1'];

       
            $con = mysqli_connect('localhost', 'root', '', 'berwashop-db');

           

           
            $select = "SELECT * FROM users WHERE username='$names' and password='$pass1'";

           
            $run = mysqli_query($con, $select);

            if(mysqli_num_rows($run) < 1){
                echo "Login not successful";
            } else {
               
                while($rows = mysqli_fetch_assoc($run)){
                  
                    $names = $rows['username'];
                    $pass1 = $rows['password'];
                }

            
                echo "Login successful";

                header('Location: index.php');
                
            }
        }
        ?>
    </div>

</body>
</html>
