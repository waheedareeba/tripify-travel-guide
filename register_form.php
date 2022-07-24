<?php

session_start();


$connection = mysqli_connect('localhost','root','','book_db');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from user_form where email = '$email' ";

$result = mysqli_query($connection, $s);
   
$num = mysqli_num_rows($result);

if ($num > 0){
   echo 'Account already exists!';

}else{
   $reg = "insert into user_form(name, email, password) values ('$name', '$email','$password')";
   mysqli_query($connection, $reg);
   echo 'registration successful';

}

?> 
