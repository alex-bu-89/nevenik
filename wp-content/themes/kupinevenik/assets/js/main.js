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

  ymaps.ready(init);
  var myMap,
    myPlacemark;

  function init() {
    myMap = new ymaps.Map("my-map", {
      center: [59.916922, 30.401482],
      zoom: 13
    });

    myMap.geoObjects.add(new ymaps.Placemark([59.916922, 30.401482], {
      balloonContent: 'Цветочный салон «НеВеник»',
      iconCaption: 'Цветочный салон «НеВеник»'
    }, {
      preset: 'islands#greenDotIconWithCaption',
      iconColor: '#f8879c'
    }));

    myMap.behaviors.disable('scrollZoom');
  }
})();
