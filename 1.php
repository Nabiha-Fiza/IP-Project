
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url("image/5th.jpeg") no-repeat;
    background-size: cover;
    background-position: center;
  }
.header{
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 10000;
    background: #333;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5 rem 9%;
    
    

}
.header .logo{

    font-weight: bolder;
    color:#fff;
    font-size: 2rem;
    text-decoration: none;
  }
  .header .logo span{
    color:var(--main-color);
  }
  .header .navbar a{
    font-size: 1.1rem;
    color:#fff;
    margin-left: 1.5rem;
  }
  .header .navbar a:hover{
    color:var(--main-color);
  
  }
  .container h2{
    font-size: 25px;
    color: white;
    text-align: center;
    margin-top: 50px;
    margin-left: 550%;

}
  .form-box-register{
    border: 10px;
    background:transparent ;
    position: relative;
    width: 400px;
    height: 450px;
    border-radius: 24px;
    border: 3px solid white;
    backdrop-filter: blur 20px;
    box-shadow: gray;
    display: flex;
    align-items: center;
    color:white;
    top: 60%;
    left: 50%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    backdrop-filter: blur(20px);
    
}
.form-box-register input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    width: 100%;
    background: green;
    color: white;
    font-size: 18px;
    border-radius: 20px;
    margin-left: 18x;
}
.form-box-register input[type="submit"]:hover{
    background: rgb(255, 255, 255);
    color: white;
}
.form-box-register input{
    width: 100%;
    margin-bottom: 5px;
}

</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $PassErr =$PassE= "";
$username = $email = $website = $password = "";

$PassE="Failed";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


    if (empty($_POST["username"])) {
        $nameErr = "Name is required";
     } else {
        $username = test_input($_POST["username"]);
         // check if name only contains letters and whitespace
             if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                 $nameErr = "Only letters and white space allowed";
             }
           }

    $conn = new mysqli('localhost','root','','wedding_planner');
    $sql = "SELECT * FROM client WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
       $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            $nameErr = "Username already exist";
        }
        else{
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                    } else {
                $email = test_input($_POST["email"]);
     
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $emailErr = "Invalid email format";
                }
                else{
                    if (empty($_POST["password"])) {
                        $PassErr = "password reqired";
                             } else {
                            $password = test_input($_POST["password"]);
                   
                                   }
                                   if (empty($_POST["website"])) {
                                  $websiteErr = " re enter ";
                                }
                     else{
                          $website = test_input($_POST["website"]);
                          if($website!==$password){
                                $websiteErr = "password didnt match ";
                           }
                           else{
                            $sql="insert into client(username,email,password)values('$username','$email','$password')"; 

                    if (mysqli_query($conn, $sql)) {
                      $PassE= " successful";
                        header("Location:log_in.php");
                       
                    } else {
                      $PassE = "Registration failed";
                      
                        }
                           }
                    }
                }
             }
            
                
                    
        }
}
?>

<!-- ----------------------------------- -->
<header class="header">
        <a href="#" class="logo"><span>E</span>uphoria</a>
        <nav class="navbar">
        <a href="index.php">Home</a>
            <a href="#About">About</a>
            <a href="#packages">packages</a>
            <a href="#Ideas">Ideas</a>
            <a href="#planner">planner</a>
            <a href="#contact">contact</a>
        </nav>
        <div id="menu-bars" class="fas fa-bars"></div>
    </header>
<!-- --------------------------------- -->
<div class="container">
<!-- <h2>Regitration </h2> -->
<div class="form-box-register">

  <!---<p><span class="error">* required field</span></p>--->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error">* <?php echo $PassErr;?></span>
  <br><br>
  confirm Password: <input type="password" name="website">
  <span class="error">* <?php echo $websiteErr;?></span>
  <br><br>
  
  
  <input type="submit" name="submit" value="Submit"> 
  <span class="error"><?php echo "<script>alert('$PassE');</script>";?></span>
  <br><br>
  <!-- <input type="checkbox" />agree to terms & conditions -->
  
  <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
</form>
</div>

</div>


<!-- <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $website;
echo "<br>";
//echo $cpassword;

?> -->

</body>
</html>