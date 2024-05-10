<?php
include('config.php');


if(isset($_POST['vaild']))
{
    $username= $_POST['username'];
    $password= $_POST['password'];

    $query = mysqli_query($conn,"select * from users where username= '$username'");
    $vadl = mysqli_num_rows($query);
    if($vadl > 0){
        $data = mysqli_fetch_assoc($query);
        if($data['password']==$password){
            echo "<script>location.replace('index.html')</script>";


        }
        else{
            echo "<script>location.replace('login.php')</script>";
        }
    }

}
?>
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

    ?>


    <section class="sign-page">
        <div class="overlay">
        <div class="login">
            <div class="login-content">
                <form action="" method="post">
                    <h3> log in</h3>
                    <input type="text" name="username" placeholder="name" >
                    <input type="password" name="password" placeholder="Password" >
                    <input type="submit" name="vaild" class="two" value="login">
                    <a class="two" href="sign.php">sgin up</a>
                </form>
            </div>
        </div>
    </div>
    </section>

    
<?php

    

?>
          
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


