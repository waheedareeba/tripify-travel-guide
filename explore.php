<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Explore new places</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo"><span>T</span>ripify</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="explore.php">explore</a>
 </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
   <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

   <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
   </form>

</section>

<!-- header section ends -->

<!-- register form container  -->

<div class="login-form-container">
<div class="form">
<i class="fas fa-times" id="form-close"></i>

<form class="register-form" action="register_form.php" method="post">
   <h3>Register</h3>
   <input type="text" class="box" placeholder="enter your name" name=name>
   <input type="email" class="box" placeholder="enter your email" name=email>
   <input type="password" class="box" placeholder="enter your password" name=password>
   <input type="password" class="box" placeholder="confirm your password" name=cpassword>
   <input type="submit" value="register now" class="btn" name="send">
   
   <p class ="message">already have an account? <a href="#">login to your account</a> </p>
</form>

<form class="login-form" action="login_form.php" method="post">
        <h3>Login</h3>
        <input type="email" class="box" placeholder="enter your email" name=email>
        <input type="password" class="box" placeholder="enter your password" name=password>
        <input type="submit" value="login" class="btn" name="send">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p class ="message">not registered? <a href="#">register now</a></p>
    </form>

</div>
</div>
<!--register form ends-->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Gallery</h1>
</div>

<!-- explore section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> explore beautiful new places </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/mal2.jpg" alt="">
         </div>
         <div class="content">
            <h3>maldives</h3>
            <p>Far stretched white sandy beaches flanking the turquoise blue Indian Ocean, stilted waterside villas, a romantic candlelit dinner with a glass of champagne at the gazebo on water – Maldives is all about luxury and tryst with nature. Often called as the Manhattan of the Indian Ocean.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/dub2.jpg" alt="">
         </div>
         <div class="content">
            <h3>dubai</h3>
            <p>Dubai as a destination has a wide range of activities that can fill the itinerary of the tourist.It has various attractions that form the basis for luring tourists from across the globe; this include ancient historical site, natural environment, man-made features and recreational activities; and shopping.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/baku2.jpg" alt="">
         </div>
         <div class="content">
            <h3>baku</h3>
            <p>Baku is one of the most up and coming tourist destinations and is an exhilarating mix of oil-driven progress and ancient Asian cultures. Unique history, fantastic food and wine, as well as plenty of sights are awaiting travelers in Baku, the capital city of Azerbaijan.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/e-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>cappadocia</h3>
            <p>In Cappadocia, there are magnificent underground cities, fairy chimneys, natural and historical beauties, faith centers and especially landforms. They give a feeling of being on a different planet. This region has been a place where witnesses cannot be seen anywhere else in the world.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/e-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Salisbury</h3>
            <p>The city of Salisbury, contemporaneous with Stonehenge, is a vast arc of pits, which archaeologists believe represents a significant development in their understanding of the inhabitants of early Britain.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/e-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>singapore</h3>
            <p>Singapore’s multi-cultural, colonial and wartime past are preserved in and around the city. You can visit monuments, museums and memorials, or for a real trip through time, take a walk along a heritage trail</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/e-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>rome</h3>
            <p>With its unparalleled history, Rome is the third most visited city in Europe and the fourteenth worldwide. It attracts visitors from all over the world who are impatient to discover the city’s impressive monuments and archaeological sites; not to mention its renowned cuisine and its lively atmosphere.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/e-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Venice</h3>
            <p>A city crisscrossed by canals on which the gondolas and other boats pass, spanned by countless bridges, in addition to a historic cityscape with palaces, churches and the famous St. Mark's Square. Venice is history, romance and uniqueness.The "Grand Canal", "Rialto Bridge" and "St Mark's Square" are some of the most visited places of Venice.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/e-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>new mexico</h3>
            <p>Visit New Mexico for a unique family vacation filled with exciting activities like skiing, hiking, shopping and sight seeing. Adventure awaits at every step.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>
</section>

<!-- explore section ends -->



<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <a href="explore.php"> <i class="fas fa-angle-right"></i> explore</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="home.php#about"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>tripify</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>