<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Discover exciting packages</title>

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

<!-- packages section starts  -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

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

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Lijiang</h3>
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

      <div class="box">
         <div class="image">
            <img src="images/venice.jpg" alt="">
         </div>
         <div class="content">
            <h3>Venice</h3>
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

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hawaii</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price" > $100.00<span>$120.00</span> </div>
                <div class="day">Number of days: 7 </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/malaysia.jpg" alt="">
         </div>
         <div class="content">
            <h3>Malaysia</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            <div class="price" > $100.00<span>$120.00</span> </div>
            <div class="day">Number of days: 8 </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/karachi.jpg" alt="">
         </div>
         <div class="content">
            <h3>Karachi</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            <div class="price" > $90.00<span>$120.00</span> </div>
            <div class="day">Number of days: 8 </div>  
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/dubai.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            <div class="price" > $90.00<span>$120.00</span> </div>
            <div class="day">Number of days: 8 </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>Morocco</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            <div class="price" > $120.00<span>$160.00</span> </div>
            <div class="day">Number of days: 7 </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/maldives.jpg" alt="">
         </div>
         <div class="content">
            <h3>Maldives</h3>
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

      <div class="box">
         <div class="image">
            <img src="images/paris.jpg" alt="">
         </div>
         <div class="content">
            <h3>paris</h3>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
            </div>
            <div class="price" > $180.00<span>$200.00</span> </div>
            <div class="day">Number of days: 6 </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->

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