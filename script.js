let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let loginForm = document.querySelector('.login-form-container');
let formBtn = document.querySelector('#login-btn');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');


menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   searchBtn.classList.remove('fa-times');
   searchBar.classList.remove('active');
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
   loginForm.classList.remove('active');
};

menu.addEventListener('click', () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
   searchBtn.classList.toggle('fa-times');
   searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
   loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
   loginForm.classList.remove('active');
});

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
   });

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}


let showDataBtn = document.querySelector('.booking .show-data .btn');
showDataBtn.onclick =() =>{}


var main_form=document.querySelectorAll(".main");

function openRR(evt, probRev) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(probRev).style.display = "block";
  evt.currentTarget.className += " active";
}
var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");
 

var submit_click=document.querySelectorAll(".submit_button");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
       shownname.innerHTML= username.value;
       formnumber++;
       updateform(); 
    });
});

var report= document.querySelectorAll(".report_button");
report.forEach(function(report_form){
    report_form.addEventListener('click',function(){
        alert("Report forwarded");
        formnumber++;
        updateform();
        progress_backward();
        contentchange();
    });
});
var sub= document.querySelectorAll(".submit_button");
sub.forEach(function(sub_form){
    sub_form.addEventListener('click',function(){
        alert("form submitted");

    })
});
function get_position(){
  // Check if geolocation supported by the browser
  if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(function(location){
          var positionDetails = " <br/>" + "Latitude: <strong>" + location.coords.latitude + "</strong> and " + "Longitude: <strong>" + location.coords.longitude+"</strong>";
          document.getElementById("location_content").innerHTML = positionDetails;
          let latitude = location.coords.latitude
          let longitude = location.coords.longitude
          document.cookie= "latitude = "+ latitude
          document.cookie="longitude = "+ longitude
      });
  } else{
      document.getElementById("location_content").innerHTML = "This browser does not support HTML5 geolocation.";
  }
}