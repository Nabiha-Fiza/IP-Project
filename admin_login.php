<?php
                $_servername="localhost";
                $username="root";
                $password="";
                $db_name="wedding_planner";
                $conn=new mysqli($_servername,$username,$password,$db_name,3306);
                if($conn->connect_error){
                   die("connection failed".$cond->connect_error);
               }
                echo "";

            ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style9.css">

</head>
<body>
    <header class="header">
        <a href="#" class="logo"><span>Wedding</span>Blast</a>
        <nav class="navbar">
            <a href="Home.php#home">home</a>
            <a href="Home.php#services">services</a>
            <a href="Home.php#about">about</a>
            <a href="Home.php#gallery">gallery</a>
            <a href="Home.php#price">price</a>
            <a href="Home.php#review">review</a>
            <a href="Home.php#contact">contact</a>
        </nav>
      
        
    </header>
    <div class="form-box login">
        
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h2>Sign in</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="code-working-outline"></ion-icon></span>
                <input type="text" required>
                <label>id</label>
            </div>
           <div class="input-box">
               <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
               <input type="password" required>
               <label>password</label>
           </div>
           <div class="remember-forgot">
               <label><input type="checkbox">Remember me</label>
               <a href="#">Forgot Password</a>
           </div>
           <button type="submit" class="button"><a href="Home.php">Sign in</a></button>
        </form>
        <?php
   

   if($_SERVER["REQUEST_METHOD"]=="POST"){
       $id=$_POST['id'];
       $password=$_POST['password'];
       $sql="select * from admin where id='$id' and password='$password'";
               $result=mysqli_query($conn,$sql);
               $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
               $count=mysqli_num_rows($result);

               if($count==1){
                   header("Location:Home.php");
               }
               else{
                   echo '<script>
                         window.location.href="admin_login.php";
                         alert("Login failed.Invalid email or password!!")
                         </script>';
                         
               }
   }



   ?>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>