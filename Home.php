<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Planner</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
      $sname = test_input($_POST["sname"]);
      $msg = test_input($_POST["msg"]);
    
      
      $conn = new mysqli('localhost','root','','wedding_planner');
      $sql="insert into message (username, email, phn, sname, msg)values('$name','$email','$phn','$sname','$msg')";
      if (mysqli_query($conn, $sql)) {
        // $PassE= " successful";
        /*echo"successfull registration";
          header("Location:Home.php");*/
          echo '<script type="text/javascript">

             window.onload = function () { alert("Successfully Send Message"); }

            </script>';
         
      } else {
        // $PassE = "Registration failed";
        echo"failed";
        
          }
            

}


  
?>
<header class="header">
    <a href="#" class="logo"><span>Wedding</span>Blast</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#price">price</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <!--<a href="admin_login.php">admin</a>-->
        <!-- <div class="dropdown">
            <button class="dropbtn">Sign-in
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="admin_login.php">Admin</a>
              <a href="log_in1.php">Client</a>
              <a href="log_in1.php">Vendor</a>
            </div>
        </div> -->
        <div class="dropdown">
            <button class="dropbtn">Sign-in
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="log_in.php">Client</a>
              <a href="log_in1.php">Vendor</a>
            </div>
        </div>
    </nav>

    
</header>

<!--home section start-->
<section class="home" id="home">
    <div class="content">
        <h3>Make Your <span>Wedding</span> Beautiful & Elegant </h3>
    </div>
    <div class="swiper-container home-slider">
     <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="image/img 1.jpeg" alt=" "></div>
        <div class="swiper-slide"><img src="image/img 2.jpeg" alt=" "></div>
        <div class="swiper-slide"><img src="image/img 3.jpeg" alt=" "></div>
        <div class="swiper-slide"><img src="image/img 6.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/img 4.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/img 5.PNG" alt=" "></div>
        <div class="swiper-slide"><img src="image/img7.jpeg" alt=" "></div>
        <div class="swiper-slide"><img src="image/img8.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/img9.jpg" alt=" "></div>
        
    </div>
    </div>
</section>
<!--home section ends-->
<!--service section starts-->
<section class="services" id="services">
    <h1 class="heading"> Our <span>Services</span> </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Venue</h3>
            <p>Select Your Venue Across The Country!!!</p>
            <p><a href="venu.php" class="btn">Check Out</a></p>
        </div>
        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Wedding Card</h3>
            <p>Customize Your Wedding Card Beautifully!!!</p>
            <p><a href="card.php" class="btn">Check Out</a></p>
        </div>
        <div class="box">
            <i class="fas fa-home"></i>
            <h3>Decoration</h3>
            <p>Decorate Your Venus With Us!!!</p>
            <p><a href="decoration.php" class="btn">Check Out</a></p>
        </div>
        <div class="box">
            <i class="fas fa-user-tie"></i>
            <h3>Guest Management</h3>
            <p>We Can Help You To Serve Your Guests Like Booking Hotels To Stay And Arranging Food!!!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Food & Catering</h3>
            <p>Treat Yourself With The Best Caterers!!!</p>
            <p><a href="food.php" class="btn">Check Out</a></p>
        </div>
        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>Wedding Cake</h3>
            <p>If You Want A Cake!!!</p>
            <p><a href="cake.php" class="btn">Check Out</a></p>
        </div>
        <div class="box">
            <i class="fas fa-music"></i>
            <h3>Music & Entertainment</h3>
            <p>Let's Dance!!!</p>
            <p><a href="music.php" class="btn">Check Out</a></p>
        </div>
        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>Photography</h3>
            <p>Capture Your Beautiful Moment!!!</p>
            <p><a href="photography.php" class="btn">Check Out</a></p>
        </div>
        
    </div>
    
</section>
<!--service sction end-->
<!--about section start-->
   <section class="about" id="about">
    <h1 class="heading"><span>about</span> us </h1>
    <div class="row">
        <div class="image">
            <img src="image/abt.jpg" alt="">
        </div>
        <div class="content">
            <h3>Welcome To <span>Wedding</span>Blast</h3>
            <p>We are a passionate team of experienced planners who are committed to turning your wedding dreams into a beautiful reality. With our meticulous attention to detail, personalized approach, and creative flair, we strive to create unforgettable moments that reflect your unique love story. From the initial consultation to the final dance, we will be by your side, ensuring a stress-free and joyous journey towards your perfect day. Let us handle the logistics while you cherish every precious moment of this once-in-a-lifetime celebration.</p>
            <p>We provide you with the features of Venue,Wedding Card,Decoration,Food & Catering,Wedding Cake,Guest Management,Music & Entertainment and Photography.You can take all the services or customize from them.We are promised to satisfy you with our services.</p>
            
        </div>
    </div>

   </section>
<!-- about section end-->
<!--gallery section start-->
 <section class="gallery" id="gallery">
    <h1 class="heading">Our <span>Gallery</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="image/g1.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g2.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g3.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g4.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g5.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g10.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g7.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g8.png" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g9.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g6.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g12.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g13.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
    </div>
 </section>
<!--gallery section end-->
<!--price section starts-->
<section class="price" id="price">
    <h1 class="heading">Our <span>Price</span></h1>
    <div class="box-container">
        <div class="box">
            <h3 class="title">Basic</h3>
            <h3 class="price">1500K</h3>
            <ul>
                <li><i class="fas fa-check"></i>Full Services</li>
                <li><i class="fas fa-check"></i>Venue</li>
                <li><i class="fas fa-check"></i>Decoration</li>
                <li><i class="fas fa-check"></i>Wedding Card</li>
                <li><i class="fas fa-check"></i>Guest Management</li>
                <li><i class="fas fa-check"></i>Food & Catering</li>
                <li><i class="fas fa-check"></i>Wedding Cake</li>
                <li><i class="fas fa-check"></i>Music & Entertainment</li>
                <li><i class="fas fa-check"></i>Photography</li>
            </ul>
            <a href="basic.php" class="btn">Check Out</a>
        </div>
        <div class="box">
            <h3 class="title">Medium</h3>
            <h3 class="price">3000K</h3>
            <ul>
                <li><i class="fas fa-check"></i>Full Services</li>
                <li><i class="fas fa-check"></i>Venue</li>
                <li><i class="fas fa-check"></i>Decoration</li>
                <li><i class="fas fa-check"></i>Wedding Card</li>
                <li><i class="fas fa-check"></i>Guest Management</li>
                <li><i class="fas fa-check"></i>Food & Catering</li>
                <li><i class="fas fa-check"></i>Wedding Cake</li>
                <li><i class="fas fa-check"></i>Music & Entertainment</li>
                <li><i class="fas fa-check"></i>Photography</li>
            </ul>
            <a href="medium.php" class="btn">Check Out</a>
        </div>
        <div class="box">
            <h3 class="title">Premium</h3>
            <h3 class="price">5000K</h3>
            <ul>
                <li><i class="fas fa-check"></i>Full Services</li>
                <li><i class="fas fa-check"></i>Venue</li>
                <li><i class="fas fa-check"></i>Decoration</li>
                <li><i class="fas fa-check"></i>Wedding Card</li>
                <li><i class="fas fa-check"></i>Guest Management</li>
                <li><i class="fas fa-check"></i>Food & Catering</li>
                <li><i class="fas fa-check"></i>Wedding Cake</li>
                <li><i class="fas fa-check"></i>Music & Entertainment</li>
                <li><i class="fas fa-check"></i>Photography</li>
            </ul>
            <a href="prenium.php" class="btn">Check Out</a>
        </div>
    </div>
</section>
<!--price section end-->
<!--review section start-->
  <section class="review" id="review">
    <h1 class="heading">Client's <span>Review</span></h1>
    <div class="review-slider swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
           <i class="fas fa-quote-right"></i>
            <div class="user"> 
                <img src="image/p1.jpg" alt="">
                <div class="user-info">
                    <h3>Md Ariful Islam</h3>
                    <span>Happy Clinet</span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
          </div>
          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <img src="image/p3.jpeg" alt="">
                 <div class="user-info">
                     <h3>Dr.Nusrat Jahan Nishat</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                Beatae ullam voluptates laborum natus quasi deserunt magnam odit! 
                Doloribus laudantium exercitationem quo possimus.
                 Minus illo inventore neque obcaecati alias a et?
            </p>
           </div>
           <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <img src="image/p2.jpeg" alt="">
                 <div class="user-info">
                     <h3>Pranto Soumik Saha</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
           </div>
           <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <img src="image/p4.jpeg" alt="">
                 <div class="user-info">
                     <h3>Shormishtha Paul</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
           </div>
           <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <img src="image/p5.jpeg" alt="">
                 <div class="user-info">
                     <h3>Dr.Masudur Rahman</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
           </div>
        </div>
        
    </div>
  </section>
<!--review section end-->

<!--contact section start-->

   <section class="contact" id="contact">
    <h1 class="heading"> <span>Contact</span> Us </h1>
    <form method="POST" action="">
        <div class="inputBox">
            <input type="text" placeholder="name" required name="name">
            <input type="email" placeholder="email" required name="email">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Contact Number" required name="phn" >
            <select class="combo"  name="sname">
                <option value="Select">Select</option>
                <option value="Review">Review</option>
                <option value="Venue">Venue</option>
                <option value="Card">Wedding Card</option>
                <option value="Decoration">Decoration</option>
                <option value="Guest">Guest Management</option>
                <option value="Food">Food & Catering</option>
                <option value="Cake">Wedding Cake</option>
                <option value="Music">Music & Entertainment</option>
                <option value="Photography">Photography</option>
            </select>
        </div>
        <textarea placeholder="Your Message"  id="" cols="30" rows="10" required name="msg"></textarea>
        <input type="Submit" value="Send Message" class="btn">
    </form>
   </section>
<!--contact section end-->
<!--fotter section start-->
  <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>bracnches</h3>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Dhaka</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Rajshahi</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i>Chattogram</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i>home</a>
            <a href="#"><i class="fas fa-arrow-right"></i>services</a>
            <a href="#"><i class="fas fa-arrow-right"></i>about</a>
            <a href="#"><i class="fas fa-arrow-right"></i>gallery</a>
            <a href="#"><i class="fas fa-arrow-right"></i>price</a>
            <a href="#"><i class="fas fa-arrow-right"></i>review</a>
            <a href="#"><i class="fas fa-arrow-right"></i>contact</a>
            
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+1234564646</a>
            <a href="#"><i class="fas fa-phone"></i>+786490980</a>
            <a href="#"><i class="fas fa-phone"></i>+71002939</a>
            <a href="#"><i class="fas fa-envelope"></i>u1904109@student.cuet.ac.bd</a>
            <a href="#"><i class="fas fa-envelope"></i>u1904110@student.cuet.ac.bd</a>
            <a href="#"><i class="fas fa-envelope"></i>u1904114@student.cuet.ac.bd</a>

        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fa fa-sign-out"></i>sign-out</a>

        </div>
    </div>
    <div class="credit"> created by  <span>Sifat</span> - <span>Pritha</span> - <span>Fiza</span></div>
  </section>
<!--fotter section end-->


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
</head>
<body>


</body>
    
</html>
