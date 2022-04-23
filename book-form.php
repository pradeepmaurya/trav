<?php

$add = "localhost";
$user = "id18827277_pradeep";
$dbname = "id18827277_travel";
$pass = "Passwor@1234";



$conn = mysqli_connect($add,  $user, $pass, $dbname);
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['phone']) && !empty($_POST['location']) && !empty($_POST['guests']) && !empty($_POST['arrivals']) && !empty($_POST['leaving'])) {
   if (isset($_POST['send'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $phone = $_POST['phone'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];


      $query = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving)
     values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
      $submit = mysqli_query($conn, $query);
      header('loaction:book.html');
   }
} else {
   echo "Please fill all inputs before submit";
}

?>










<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>


   <!-- FontAwesome cdn <Link></Link> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

   <!-- Swipper css link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- custom css link -->
   <link rel="stylesheet" href="style.css" />
</head>

<body>

   <!-- header section start -->
   <section class="header">
      <a href="home.html" class="logo">travel</a>
      <nav class="navbar">
         <a href="home.html">Home</a>
         <a href="about.html">about</a>
         <a href="package.html">package</a>
         <a href="book.html">book</a>


      </nav>

      <div id="menu-btn" class="fas fa-times"></div>

   </section>

   <!-- header section end here -->
   <div class="aboutus" style="background: url(images/header-bg-3.png) no-repeat;">
      <h1>book</h1>
   </div>

   <!-- book section start here -->
   <section class="success">
      <div class="msg">
         <?php

         if ($query) {
            echo "<h1>Form Submitted succesfully</h1> ";
         }

         ?>

      </div>
   </section>
   <section class="booking">
      <h1 class="heading-style">book your trip!</h1>
      <form action="book-form.php" method="post" class="book-form">
         <div class="flex">
            <div class="inputBox">
               <span>name: </span>
               <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
               <span>email: </span>
               <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
               <span>phone: </span>
               <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
               <span>address: </span>
               <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
               <span>where to: </span>
               <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
               <span>How many: </span>
               <input type="text" placeholder="number of Guests" name="guests">
            </div>
            <div class="inputBox">
               <span>Arrivals: </span>
               <input type="date" placeholder="dd-mm-yyyy" name="arrivals">
            </div>
            <div class="inputBox">
               <span>leaving: </span>
               <input type="date" placeholder="dd-mm-yyyy" name="leaving">
            </div>
            <div class="inputBox">
               <input type="submit" value="submit" class="btn" name="send">
            </div>
         </div>

      </form>

   </section>

   <!-- book section end here -->














   <!-- footer section start here -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>quick Links</h3>
            <a href="home.html"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.html"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.html"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.html"><i class="fas fa-angle-right"></i>Book</a>
         </div>

         <div class="box">
            <h3>extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
            <a href="#"><i class="fas fa-angle-right"></i>FAQ</a>
            <a href="#"><i class="fas fa-angle-right"></i>About us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms and conditions</a>
         </div>


         <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+111-444-7890</a>
            <a href="#"><i class="fas fa-envelope"></i>abc@mail.com</a>
            <a href="#"><i class="fas fa-map"></i>Lucknow, india - 400104</a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
         </div>

      </div>

      <div class="credit">Created by <span>Mr. Pradeep Maurya</span> | all rights reserved!

         <div class="swiper-slider w">
            <img src="images/my-pic.jpg" alt="">
         </div>
      </div>
   </section>


   <!-- footer section end here -->


   <!-- Swipper js link -->
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom javaScript -->
   <script src="script.js></script>
</body>
</html>