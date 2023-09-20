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

  document.addEventListener("DOMContentLoaded", function() {
    var faqQuestions = document.getElementsByClassName("faq-question");

    for (var i = 0; i < faqQuestions.length; i++) {
        faqQuestions[i].addEventListener("click", function() {
            var answer = this.nextElementSibling;

            if (answer.style.display === "block") {
                answer.style.display = "none";
                var toggleIcon = this.getElementsByClassName("faq-toggle")[0];
                toggleIcon.classList.remove("fa-chevron-up");
                toggleIcon.classList.add("fa-chevron-down");
            } else {
                answer.style.display = "block";
                var toggleIcon = this.getElementsByClassName("faq-toggle")[0];
                toggleIcon.classList.remove("fa-chevron-down");
                toggleIcon.classList.add("fa-chevron-up");
            }
        });
    }
});