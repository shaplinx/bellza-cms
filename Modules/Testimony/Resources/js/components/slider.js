document.addEventListener("DOMContentLoaded", function() {
  new Swiper(".testimonial-swiper", {
      loop: true,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
  });
})