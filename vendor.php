<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style11.css">
    
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
<?php
$nameErr = $regnoErr = $emailErr = $websiteErr = $PassErr = $PassE = "";
$name = $regno = $email = $website = $password = $phn = $sname = $cname = $location =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 
      $regno = test_input($_POST["regno"]);
      $email = test_input($_POST["email"]);
      $phn = test_input($_POST["phn"]);
      $sname = test_input($_POST["sname"]);
      $cname = test_input($_POST["cname"]);
      $location = test_input($_POST["location"]);
      
      $conn = new mysqli('localhost','root','','wedding_planner');
      $sql = "SELECT * FROM vendor WHERE regno = '$regno' && email = '$email'";
      $result = mysqli_query($conn, $sql);
       $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            //die("Error: regno is not matched.");
            $sql="insert into service (regno, email, phn, sname, cname, location)values('$regno','$email','$phn','$sname','$cname','$location')"; 
            if (mysqli_query($conn, $sql)) {
              // $PassE= " successful";
              echo"successfull submission";
              echo '<script type="text/javascript">

               window.onload = function () { alert("Successfully Submitted"); }

              </script>';
              /*header("Location:Home.php");*/

                
              
               
            } else {
              // $PassE = "Registration failed";
              echo"failed";
              
                }
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // array_push($errors, "Email is not valid");
            die("Error: Email is not found");
           }
     

}


  
?>
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
    <div class="wrapper">
        <div class="form-box vendor">
            <h2>Are You A Vendor?</h2>
            <form method="POST" action="">
                <div class="input-box">
                    <span class="icon"><ion-icon name="code-working-outline"></ion-icon></span>
                    <input type="text" required name="regno">
                    <label>Registration No</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                    <input type="text" required name="phn">
                    <label>Contact No</label>
                </div>
                <div class="combo-box">
                    <p>Select Services To Add:</p>
                    <select class="combo" required name="sname">
                        <option value="select">Select</option>
                        <option value="venue">Venue</option>
                        <option value="card">Wedding Card</option>
                        <option value="decoration">Decoration</option>
                        <option value="food">Food & Catering</option>
                        <option value="cake">Wedding Cake</option>
                        <option value="music">Music & Entertainment</option>
                        <option value="photography">Photography</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <input type="text" required name="cname">
                    <label>Enter Your Company Name</label>
                </div>
               <div class="location-check">
                <h3>Choose Division</h3>
                <label><input type="checkbox" name="location" value="Dhaka">Dhaka</label>
                <label><input type="checkbox" name="location" value="Chattogram">Chattogram</label>
                <label><input type="checkbox" name="location" value="Rajshahi">Rajshahi</label>
                
              </div>
               
               <button type="submit" class="button">Submit</button>
               
            </form>
           </div>
        </div>
        <!--vendor section end-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>