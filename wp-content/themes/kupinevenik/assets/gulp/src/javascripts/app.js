(function($){
  $(function(){

    var carouselReady = false;

    function autoplay() {
      if(carouselReady){
        $('.carousel.carousel-slider').carousel('next');
      }
      setTimeout(autoplay, 6000);
      carouselReady = true
    }

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

    $('.carousel.carousel-slider').carousel({
      fullWidth: true
    });

    autoplay()


  }); // end of document ready
})(jQuery); // end of jQuery name space
