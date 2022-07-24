<?php

session_start();

$connection = mysqli_connect('localhost','root','','book_db');

$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from user_form where email = '$email' && password = '$password' ";

$result = mysqli_query($connection, $s);
   
$num = mysqli_num_rows($result);

if ($num > 0){
    header('location:welcome.php'); 

}else{
   echo 'Account not registered, Register now to login and book exciting packages! ' ;
}

?> 
