import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';


  var mobileMenu = document.getElementById('mobile-menu')
  var menuToggleButton = document.getElementById('menu-toggle-button');
  var menuClose = document.getElementById('close-menu')

  menuToggleButton.addEventListener('click', function() {
        mobileMenu.classList.remove('nonactive');
        mobileMenu.classList.add('addactive');
   
});
menuClose.addEventListener('click', function() {
    mobileMenu.classList.remove('addactive');
    mobileMenu.classList.add('nonactive');
})


