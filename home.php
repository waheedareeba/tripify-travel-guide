<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Easy booking of tours and trips</title>

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

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
               <div class="content">
                  <span>explore, book, travel</span>
                  <h3>travel around the world</h3>
                  <a href="explore.php" class="btn">discover more</a>
               </div>
            </div>

         
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <span>explore, book, travel</span>
                  <h3>discover new places</h3>
                  <a href="explore.php" class="btn">discover more</a>
               </div>
            </div>

         
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, book, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="explore.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- home explore section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> explore </h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/mal2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Maldives</h3>
            <p>Far Stretched White Sandy Beaches Flanking The Turquoise Blue Indian Ocean, Stilted Waterside Villas</p>
            <a href="explore.php" class="btn">see more</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/dub2.jpg" alt="">
         </div>
         <div class="content">
            <h3>dubai</h3>
            <p>Dubai As A Destination Has A Wide Range Of Activities That Can Fill The Itinerary Of The Tourist.</p>
            <a href="explore.php" class="btn">see more</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/baku2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Baku</h3>
            <p>Baku Is One Of The Most Up And Coming Tourist Destinations And Is An Exhilarating Mix Of Oil-Driven Progress And Ancient Asian Cultures.</p>
            <a href="explore.php" class="btn">see more</a>
         </div>
      </div>
   </div>

   <div class="load-more"> <a href="explore.php" class="btn">see more places to explore</a> </div>

</section>

<!-- home explore section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> packages </h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/e-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Agra</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
             <div class="price" > $100.00<span>$120.00</span> </div>
            <div class="day">Number of days: 4 </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/capp.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Cappadocia</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
               
                <div class="price" > $80.00<span>$90.00</span> </div>
                <div class="day">Number of days: 6 </div>
                <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/baku.jpg" alt="">
         </div>
         <div class="content"> 
            <h3>Baku</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price" > $100.00<span>$120.00</span> </div>
                <div class="day">Number of days: 10 </div>
                <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>

   <div class="load-more"> <a href="package.php" class="btn">discover more packages</a> </div>

</section>

<!-- home packages section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> services </h1>

   <div class="box-container">

   <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safety assurance</h3>
            <p></p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p></p>
        </div>


   </div>

</section>

<!-- services section ends -->




<!-- about section starts  -->

<section class="about">

   <h1 class="heading-title"> about us </h1>

   <div class="content">
      <h3>why choose us?</h3>
      <p>We provide the basic functionalities of a traditional travel website along with the ability to report any problem faced during the travel. </p>
      <p>Our main goal is to provide a seamless travel experience to our guests and ensure a safe and secure journey!</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>We had a wonderful time! I highly recommend the Resort at Longboat Key & the area. It was perfect for not being crowded on the beach w/ Covid concerns. The beach is for guests only & beautiful!....Thanks so much for finding the perfect spot for us for spring break :)</p>
            <h3>john K</h3>
            <span>traveler</span>
            <img src="images/pic-1.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Booking through you was very easy and made our lives so much easier. I have nothing bad to say! Thank you for giving us tips and guidance before we left on what to bring and such, that was very helpful!</p>
            <h3>stephanie</h3>
            <span>traveler</span>
            <img src="images/pic-2.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>We had a wonderful time! I highly recommend the Resort at Longboat Key & the area. It was perfect for not being crowded on the beach w/ Covid concerns. The beach is for guests only & beautiful!....Thanks so much for finding the perfect spot for us for spring break :)</p>
            <h3>henry abott</h3>
            <span>traveler</span>
            <img src="images/pic-3.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Booking through you was very easy and made our lives so much easier. I have nothing bad to say! Thank you for giving us tips and guidance before we left on what to bring and such, that was very helpful!</p>
            <h3>Meg s</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>We had a wonderful time! I highly recommend the Resort at Longboat Key & the area. It was perfect for not being crowded on the beach w/ Covid concerns. The beach is for guests only & beautiful!....Thanks so much for finding the perfect spot for us for spring break :)</p>
            <h3>ali khan</h3>
            <span>traveler</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Booking through you was very easy and made our lives so much easier. I have nothing bad to say! Thank you for giving us tips and guidance before we left on what to bring and such, that was very helpful!</p>
            <h3>li peng</h3>
            <span>traveler</span>
            <img src="images/pic-6.png" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->


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
