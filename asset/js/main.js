$( document ).ready(function() {
  let searchBox = document.querySelector("#searchbox");
  let searchBoxAr = document.querySelector("#searchboxAr");
  $( "#search-icon" ).click(function(e) {
    e.preventDefault();
    if (searchBox.style.top == '24px') {
      searchBox.style.top = '72px';
      searchBox.style.display = 'block';
      
    } else {
      searchBox.style.top = '72px';
      searchBox.style.top = '24px';
      searchBox.style.display = 'none';
      searchBox.style.pointerEvents = 'auto';
    }    
  });

  $( "#search-iconAr" ).click(function(e) {
    e.preventDefault();
    if (searchBoxAr.style.top == '24px') {
      searchBoxAr.style.top = '72px';
      searchBoxAr.style.display = 'block';
      
    } else {
      searchBoxAr.style.top = '72px';
      searchBoxAr.style.top = '24px';
      searchBoxAr.style.display = 'none';
      searchBoxAr.style.pointerEvents = 'auto';
    }    
  });

  $('.owl-carousel').owlCarousel({
    loop:true,
    rtl:true,
    margin:10,
    autoplay:true,

    slideTransition:'linear',
   
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            slideBy:1
        },
        600:{
            items:3,
            nav:true,
            slideBy:3
        },
        1000:{
            items:5,
            nav:true,
            loop:true,
            slideBy:5
        }
    }
});
AOS.init({
  easing: 'ease-out-back',
  duration: 1000
});

$('.hero__scroll').click(function(e) {
  e.preventDefault();
  var n = $(document).height();
  $('html, body').animate({ scrollTop: n }, 1500);
});
$('.up__scroll').click(function(e) {
  e.preventDefault();
  var n = $(document).height();
  $('html, body').animate({ scrollTop: -n }, 1500);
});
$('.plus').click(function(e) {
  e.preventDefault();        
  $('.content-cat').slideToggle();
  $('.plus').toggleClass('fa-angle-up','fa-angle-down');        
});


});







/*
let menuIcon = document.getElementById("menu-icon");
let slideoutMenu = document.getElementById("slideout-menu");
//let searchIcon = document.getElementById("search-icon");
let searchIcon = document.querySelector("#search-icon");
let searchBox = document.querySelector("#searchbox");


searchIcon.addEventListener('click', function (e) {
  e.preventDefault();
  if (searchBox.style.top == '24px') {
    searchBox.style.top = '72px';
    searchBox.style.display = 'block';
    searchBox.style.pointerEvents = 'none';
  } else {
    searchBox.style.top = '72px';
    searchBox.style.top = '24px';
    searchBox.style.display = 'none';
    searchBox.style.pointerEvents = 'auto';
  }
});*/