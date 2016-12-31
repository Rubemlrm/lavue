window.$ = window.jQuery = require('jquery');


$(document).ready(function () {

    utils.alerts.init();

});

if (!utils) {
    var utils = {};
}

/* Show more text of testimonial */
utils.alerts = (function ($) {

    var init = function () {
        _hideAlert();
    };

    var _hideAlert = function () {
        console.log("teste");
        var _properties = {
            $close: $('.delete')
        };
       _properties.$close.click(function(){
        $(this).parent().fadeOut("slow");
       });
    };

    return {
        init: init
    };

})(jQuery);

