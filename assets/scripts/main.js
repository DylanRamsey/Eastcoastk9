

window.addEventListener('load', function (){

  

  var swiper = new Swiper(".testimonials-slider", {
    pagination: {
      el: ".swiper-pagination",
    },
  });

  document.addEventListener("DOMContentLoaded", function() {
    // Mobile hamburger animations
    const navIcons = document.querySelector('.nav-icon1,.nav-icon2,.nav-icon3,.nav-icon4')
    navIcons.addEventListener("click", function(){
      navIcons.classList.toggle("open");
    });
    
    // Show and hide mobile menu when hamburger is clicked on
    const navBurg = document.querySelector('.navigation-burger');
    navBurg.addEventListener("click", function () { 
      const mobileNav = document.querySelector(".mobile-navigation__links");
      if (mobileNav.style.display === "block") {
        mobileNav.style.display = "none";
      } else {
        mobileNav.style.display = "block";
      }
    }, false);
  });

}, 
false);