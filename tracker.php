<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Track your journey</title>

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
<div class="tab">
  <button class="tablinks" onmouseover="openRR(event, 'flight')">Flight</button>
  <button class="tablinks" onmouseover="openRR(event, 'hotel')">Hotel</button>
  <button class="tablinks" onmouseover="openRR(event, 'tour')">Tour</button>
  <button class="tablinks" onmouseover="openRR(event, 'review')">Review</button>
</div>
<form action="tr.php" method="post">
<div id="flight" class="tabcontent" >
    <div class="text">
        <h2>Tell us about your flight</h2>
        <p>Any problems with your flight?</p>
    </div>
    <div class="input-text">
        <div class="input-div">
            <input type="text" id="seatnum" name="seatnum">
            <span>Seat number</span>
        </div>
        <div class="input-div"> 
            <select id ="airline" name="airline">
                <option>Select Airline</option>
                <option>Emirates</option>
                <option>British Airways</option>
                <option>Srilankan Airline</option>
                <option>Qatar Airways</option>
                <option>Air Canada</option>
                <option>Singapore Airlines</option>
                <option>Air France</option>
                <option>Japan Airlines</option>
                <option>Luftansa</option>
            </select>
        
        </div>
    </div>
    <div class="input-text">
        <div class="input-div">
            <select id="flproblem" name="flproblem">
                <option>Problems faced if any: </option>
                <option>Flight missed</option>
                <option>Baggage Theft</option>
                <option>Baggage didn't arrive</option>
                <option>Lack of medical assistance</option>
                <option>Delayed Flight</option>
            </select>
        </div>
    </div>
    <div class="input-text">
        <div class="input-div">
            <select id="depart" name="depart">
                <option>Select departure</option>
                <option>New Delhi</option>
                <option>Paris</option>
                <option>London</option>
                <option>Washington D.C.</option>
                <option>Berlin</option>
                <option>Moscow</option>
                <option>Bejing</option>
                <option>Tokyo</option>
                <option>Karachi</option>
            </select>
        
        </div>
        <div class="input-div">
            
            <select id="arrival" name="arrival">
                <option>Select arrival</option>
                <option>New Delhi</option>
                <option>Paris</option>
                <option>London</option>
                <option>Washington D.C.</option>
                <option>Berlin</option>
                <option>Moscow</option>
                <option>Bejing</option>
                <option>Tokyo</option>
                <option>Karachi</option>
            </select>
        </div>
    </div>
    <div class="buttons">
        <button class="report_button" type="submit" name="report1">Report</button>
    </div>
</div>
</div>
</form>
<form action="tr.php" method="post">
<div id="hotel" class="tabcontent">
    <div class="text">
        <h2>Hotels</h2>
        <p>Didn't like your stay?</p>
    </div>
    <div class="input-text">
        <div class="input-div">
            <input type="text" id="hotelname" name="hotelname">
            <span>Hotel name: </span>
        </div>
    <div class="input-div">
        <select id="htlproblem" name="htlproblem">
                <option>Problems if any: </option>
                <option>Overcharged price</option>
                <option>Hidden charges</option>
                <option>Gross accomodation</option>
                <option>False advertising</option>
        </select>
    </div>
    </div>
    <div class="buttons button_space">
        <button class="report_button" name="report2" type="submit">Report</button>
    </div>
</div>
</form>
<form action="tr.php" method="post">
<div id="tour" class="tabcontent">
    <div class="text">
        <h2>Tour Experience</h2>        
        <p>Faced any problem during tour?</p>
    </div>
    <br>
        <div class="input-div">
        <select id="tourproblem" name="tourproblem">
            <option>Problems faced if any: </option>
            <option>Increased fare</option>
            <option>Suspicious driver</option>
            <option>Theft</option>
            <option>Item lost</option>
            <option>Wrong dropoff</option>
            <option>Safety and Security</option>
        </select>
    </div>
    <br>
        <textarea name="issue" id="issue" cols="50" rows="4">Write your problem here</textarea>
        <br>
        <div id="location_content"></div>
        <button type="button" onclick="get_position();">Current Location</button>
        <br>
        <br>
    <div class="buttons button_space">
        <button class="report_button" name="report3" type="submit">Report</button>
    </div>
</div>
</form>
<form action="tr.php" method="post">
<div id="review" class="tabcontent">
    <div class="text">
    <h2>Review</h2>
    <p>Tell us about your overall tour experience.</p>
    </div>
    <div>
        <span></span>
        <textarea class="form-control" id="review" name="review" rows="4" cols="50"> </textarea>
    </div>
    <div style="padding-bottom: 18px ; font-style:bold">Rate the service<br>
        <select id="starrat" name="starrat" style="max-width : 150px;" class="form-control"><option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select>
        </div>
      
    <div class="buttons button_space">
        <button class="submit_button" type="submit" name="submit">Submit</button>
    </div>
</div>
</form>
<div class="clearfix"></div>

<script src="js/script.js"></script>

</body>
</html> 
