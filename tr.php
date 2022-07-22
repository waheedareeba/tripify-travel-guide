<?php


$server= "localhost";
$username= "root";
$password="";
$dbname="book_db";

  $connection= mysqli_connect($server,$username,$password,$dbname);


  if(isset($_POST['report1']))
  {
    $seatnum = $_POST['seatnum'] ;
    $airline = $_POST['airline'];
    $flproblem = $_POST['flproblem'];
    $depart = $_POST['depart'];
    $arrival = $_POST['arrival'];

    
    $_REQUEST = "insert into flightreport(seatnum,airline,flproblem,depart,arrival) values('$seatnum','$airline','$flproblem','$depart','$arrival')";

    $run = mysqli_query($connection,$_REQUEST);
    header('location:tracker.php');


  }
  if(isset($_POST['report2']))
  {
    $hotelname = $_POST['hotelname'] ;
    $htlproblem = $_POST['htlproblem'];


    
    $_REQUEST = "insert into hotelreport(hotelname,htlproblem) values('$hotelname','$htlproblem')";

    $run = mysqli_query($connection,$_REQUEST);
    header('location:tracker.php');


  }
  if(isset($_POST['report3']))
  {
    $tourproblem = $_POST['tourproblem'] ;
    $issue = $_POST['issue'];
    $longitude = $_COOKIE['longitude'];
    $latitude = $_COOKIE['latitude'];


    
    $_REQUEST = "insert into tourreport(tourproblem,issue,longitude,latitude) values('$tourproblem','$issue','$longitude','$latitude')";

    $run = mysqli_query($connection,$_REQUEST);
    header('location:tracker.php');


  }
  if(isset($_POST['submit']))
  {
    $review = $_POST['review'] ;
    $starrat = $_POST['starrat'];


    
    $_REQUEST = "insert into feedback(review,starrat) values('$review','$starrat')";

    $run = mysqli_query($connection,$_REQUEST);
    header('location:tracker.php');


  }
  
  else
    echo'something went wrong please try again!'
  
?>
