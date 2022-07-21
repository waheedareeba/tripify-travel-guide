<?php

$connection = mysqli_connect('localhost','root','','book_db');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];

$s = "select * from user_form where email = '$email' ";

$result = mysqli_query($connection, $s);

$num = mysqli_num_rows($result);

if ($num > 0){
   $b = "select * from book_form where email = '$email' and location ='$location' and arrivals='$arrivals' ";

   $newresult = mysqli_query($connection, $b);

   $num2 = mysqli_num_rows($newresult);

      if ($num2>0){
         echo 'You have already booked this package!';

      }else{
         $book = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
         mysqli_query($connection, $book);

         $x = "SELECT name, address, location, guests, arrivals, leaving FROM book_form WHERE email= '$email'";
         $packDetails = mysqli_query( $connection, $x);

         if(! $packDetails ) {
            die('No package booked! ' . mysql_error());
         }

         while($row = mysqli_fetch_array($packDetails, MYSQLI_ASSOC)) {
            echo  "PACKAGES BOOKED BY YOU:<br>".
               "--------------------------------<br>".
               "Traveler's Name : {$row['name']}  <br> ".
                  "Journey From : {$row['address']} <br> ".
                  "Journey To : {$row['location']} <br> ".
                  "No. of Guests : {$row['guests']} <br> ".
                  "Arrival : {$row['arrivals']} <br> ".
                  "Departure : {$row['leaving']} <br> ".
               "--------------------------------<br>";
      }
   }
}else{
   echo 'register now to book a package!';
}

?>