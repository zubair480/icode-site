jQuery(document).ready(function($) {
    var currentIndex = 0;
    var slides = $('.slider .slide');
    var totalSlides = slides.length;
  
    function showSlide(index) {
      slides.removeClass('active');
      slides.eq(index).addClass('active');
    }
  
    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      showSlide(currentIndex);
    }
  
    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      showSlide(currentIndex);
    }
  
    $('.prev').click(function() {
      prevSlide();
    });
  
    $('.next').click(function() {
      nextSlide();
    });
  });
  