var swiper = new Swiper(".home-slider", {
  spaceBetween: 50,
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  history: {
    key: "slide",
  },
});

var swiper = new Swiper(".slide", {
 pagination: {
   el: ".swiper-pagination",
 },
});



let menu = document.getElementById('menu-btn');
let navbar = document.getElementById('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};
