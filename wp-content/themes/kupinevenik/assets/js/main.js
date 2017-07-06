(function() {
  $('.button-collapse').sideNav();
  $('.parallax').parallax();

  // sticky nav
  var $navBar = $('#navigation');
  var navPos = $navBar.offset().top;

	// scroll event
  $(window).scroll(function() {
    var scrollPos = $(this).scrollTop();

    if (scrollPos >= navPos) {
      $navBar.addClass('fixed');
    } else {
      $navBar.removeClass('fixed');
    }
  });
})();
