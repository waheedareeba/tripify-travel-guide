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
