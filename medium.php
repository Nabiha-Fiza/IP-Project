<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medium</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style10.css">
    
</head>
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
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $phn = test_input($_POST["phn"]);
      $pname = test_input($_POST["pname"]);
    
      
      $conn = new mysqli('localhost','root','','wedding_planner');
      $sql = "SELECT * FROM client WHERE username = '$name' && email = '$email'";
      $result = mysqli_query($conn, $sql);
       $rowCount = mysqli_num_rows($result);
       if ($rowCount>0) {
        //die("Error: regno already exist.");
        $sql="insert into booking (username, email, phn, pname)values('$name','$email','$phn','$pname')"; 
        if (mysqli_query($conn, $sql)) {
          // $PassE= " successful";
          echo"successfull registration";
          echo '<script type="text/javascript">

               window.onload = function () { alert("Successfully Booked"); }

              </script>';
           /* header("Location:Home.php");*/
           
        } else {
          // $PassE = "Registration failed";
          echo"failed";
          
            }
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // array_push($errors, "Email is not valid");
        die("Error: Email is not valid");
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
    <section class="dhaka" id="dhaka">
        <div class="title">
            <h1>Our <span>Packages</span></h1>
        </div>
        <div class="venue-list">
            <div class="venue-row">
                <h1>M1</h1>
                <h2>Amount: Around 1500k tk</h2>
                <ul>
                    <li><i class="fas fa-check"></i>Venue</li>
                    <li><i class="fas fa-check"></i>Decoration</li>
                    <li><i class="fas fa-check"></i>Food & Catering</li>
                    <li><i class="fas fa-check"></i>Photography</li>
                </ul>
                
            </div>
            <div class="venue-row">
                <h1>M2</h1>
                <h2>Amount: Around 1800k tk</h2>
                <ul>
                    <li><i class="fas fa-check"></i>Venue</li>
                    <li><i class="fas fa-check"></i>Decoration</li>
                    <li><i class="fas fa-check"></i>Food & Catering</li>
                    <li><i class="fas fa-check"></i>Photography</li>
                    <li><i class="fas fa-check"></i>Music & Entertainment</li>
                </ul>
                
            </div>
            <div class="venue-row">
                <h1>M3</h1>
                <h2>Amount: Around 2000k tk</h2>
                <ul>
                    <li><i class="fas fa-check"></i>Venue</li>
                    <li><i class="fas fa-check"></i>Decoration</li>
                    <li><i class="fas fa-check"></i>Food & Catering</li>
                    <li><i class="fas fa-check"></i>Photography</li>
                    <li><i class="fas fa-check"></i>Wedding Card</li>
                    <li><i class="fas fa-check"></i>Wedding Cake</li>
                </ul>
                
            </div>
            <div class="venue-row">
                <h1>M4</h1>
                <p><h2>Amount: Around 2300k tk</h2></p>
                <ul>
                    <li><i class="fas fa-check"></i>Venue</li>
                    <li><i class="fas fa-check"></i>Decoration</li>
                    <li><i class="fas fa-check"></i>Food & Catering</li>
                    <li><i class="fas fa-check"></i>Photography</li>
                    <li><i class="fas fa-check"></i>Music & Entertainment</li>
                    <li><i class="fas fa-check"></i>Wedding Cake</li>

                </ul>
                
            </div>
            <div class="venue-row">
                <h1>M5</h1>
                <h2>Amount: Around 2500k tk</h2>
                <ul>
                    <li><i class="fas fa-check"></i>Venue</li>
                    <li><i class="fas fa-check"></i>Decoration</li>
                    <li><i class="fas fa-check"></i>Food & Catering</li>
                    <li><i class="fas fa-check"></i>Photography</li>
                    <li><i class="fas fa-check"></i>Music & Entertainment</li>
                    <li><i class="fas fa-check"></i>Guest Management</li>
                </ul>
               
            </div>
            <div class="venue-row">
                <h1>M6</h1>
                <h2>Amount: Around 3000k tk</h2>
                <ul>
                    <li><i class="fas fa-check"></i>Venue</li>
                    <li><i class="fas fa-check"></i>Decoration</li>
                    <li><i class="fas fa-check"></i>Wedding Card</li>
                    <li><i class="fas fa-check"></i>Guest Management</li>
                    <li><i class="fas fa-check"></i>Food & Catering</li>
                    <li><i class="fas fa-check"></i>Wedding Cake</li>
                    <li><i class="fas fa-check"></i>Music & Entertainment</li>
                    <li><i class="fas fa-check"></i>Photography</li>
                </ul>
                
            </div>
            
        </div>
        <div class="wrapper">
            <div class="form-box vendor">
                <h2>Booking</h2>
                <form method="POST" action="">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input type="text" required name="name">
                        <label>Username</label>
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
                        <p>Select Your Package:</p>
                        <select class="combo" name="pname">
                            <option value="select">Select</option>
                            <option value="m1">M1</option>
                            <option value="m2">M2</option>
                            <option value="m3">M3</option>
                            <option value="m4">M4</option>
                            <option value="m5">M5</option>
                            <option value="m6">M6</option>
                        </select>
                    </div>
                   <div>
                    <button type="submit" class="button">Book</button>
                   </div>
                   
                   
                </form>
               </div>
            </div>

        
    </section>  
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    
</body>
</html>