// ==== HEADER ==== //

// A simple wrapper for all your custom jQuery that belongs in the header
;(function($) {
    $(function() {
        // Initialize svg4everybody 2.0.0+, which is supposed to be done in the header
        svg4everybody();

        jQuery('.button-collapse').sideNav();
        jQuery('.parallax').parallax();

        // sticky nav
        var $navBar = jQuery('#navigation');
        var navPos = $navBar.offset().top;

        // scroll event
        jQuery(window).scroll(function() {
            var scrollPos = jQuery(this).scrollTop();

            if (scrollPos >= navPos) {
                $navBar.addClass('fixed');
            } else {
                $navBar.removeClass('fixed');
            }
        });

        jQuery('.callme_close').click(function(){
          jQuery('.callme').hide();
        });

        // yandex map
        function initMap() {

            var myMap;

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
            myMap.behaviors.disable('drag');
        }

        ymaps.ready(initMap);
    });
}(jQuery));
