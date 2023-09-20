import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

var swiper1 = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

  });
  var swiper = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    freeMode: true,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },

  });
  var swiper = new Swiper(".mySwiper3", {
    slidesPerView: "auto",
    freeMode:true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

