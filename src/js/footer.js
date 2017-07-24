// ==== FOOTER ==== //

// A simple wrapper for all your custom jQuery that belongs in the footer
;(function($) {
    $(function() {
        // Example integration: JavaScript-based human-readable timestamps
        if ($.timeago) {
            $('time').timeago();
        }

        jQuery(window).load(function() {
            jQuery('.main-slider').css('display','block');
            jQuery('.main-slider-loading').css('display','none');
        });
    });
}(jQuery));
