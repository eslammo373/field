<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <!-- first mobile meta -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>profile</title>
          <!-- main file for css-->
          <link rel="stylesheet" href="css/aos.css">

          <!-- main file for os-->
          <link rel="stylesheet" href="css/style.css">
          <!--file normailz-->
          <link rel="stylesheet" href="css/Normalize.css">
          <!--file all main-->
          <link rel="stylesheet" href="css/all.min.css">

 
    </head>
    <body>
    <?php
        if(isset($_POST['username'])&& isset($_POST['email']) &&  isset($_POST['password'])&& isset($_POST['re_password'])){
            $username =$_POST['username'];
            $email =$_POST['email'];
            $password =$_POST['password'];
            $re_password =$_POST['re_password'];
          if(empty($username)||  empty($email) ||  empty($password) || empty($re_password)){
            if(isset($_POST['sent'])){
                echo"sorry try again";

            }
          }
          if($password!==$re_password){   
            if(isset($_POST['sent'])){
                echo"sorry try again";

            }
          }
          else{
            if(isset($_POST['sent'])){
              $host='localhost';
              $user='root';
              $pass='';
              $db='simple';
              $conn=mysqli_connect($host,$user,$pass,$db);           
             
              $insert = "insert into users values('$username','$email',$password)";        
             $q=mysqli_query($conn,$insert);     
             echo "<script>location.replace('login.php')</script>";
        
             
            } 
          }
        }
?>
    <section class="sign-page">
        <div class="overlay">
        <div class="login">
            <div class="login-content">
            <form action="" method="post">
            <h3> sign up</h3>

<input type="text" name="username" placeholder="name" required/>
<input type="text" name="email" placeholder="email" required/>

<input type="password" name="password" placeholder="New Password" required/>
<input  type="password"  name="re_password" placeholder="Repeat Password"required/>
<input type="submit" name="sent" class="two" value="sign up">
</form>

            </div>
        </div>
    </div>
    </section>
          
<!-- Jquery Library file -->
<script src="./js/Jquery3.4.1.min.js"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="./js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="./js/aos.js"></script>

<!-- Custom Javascript file -->
<script src="./js/main.js"></script>

<script src="custom.js"></script>
</body>
</html>


