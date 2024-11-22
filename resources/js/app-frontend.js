import $ from "jquery";
import 'bootstrap';
import 'jquery.easing';
import Chocolat from 'chocolat';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

window.$ = $;

Swiper.use([Navigation, Pagination]);
"use strict";
// init Chocolat light box
var initChocolat = function () {
  Chocolat(document.querySelectorAll('.image-link'), {
    imageSize: 'contain',
    loop: true,
  })
}

document.addEventListener("DOMContentLoaded", function () {

  window.addEventListener('scroll', function () {

    if (window.scrollY > 50) {
      document.getElementById('primary-header').classList.add('fixed-top');
    } else {
      document.getElementById('primary-header').classList.remove('fixed-top');
      // remove padding top from body
      document.body.style.paddingTop = '0';
    }
  });
});
// DOMContentLoaded  end


$(function () {

  initChocolat();


  $(".user-items .search-item").on("click", function () {
    $(".search-box").toggleClass('active');
    $(".search-box .search-input").focus();
  });
  $(".close-button").on("click", function () {
    $(".search-box").toggleClass('active');
  });

  var swiper = new Swiper(".testimonial-swiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });


  var swiper = new Swiper(".team-swiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    pagination: {
      el: "#our-team .swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },
  });


}); // End of a document      