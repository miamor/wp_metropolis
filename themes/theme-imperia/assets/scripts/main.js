/**
 * JS/jQuery functions
 */

jQuery(document).ready(function($) {
    var _window = $(window);
    var w_width = _window.width();
    var w_height = _window.height();

    // click btn hamburger
    $('.site_toggle').click(function() {
        var _this = $(this);

        if (_this.hasClass('addClass_active')) {
            var idTarget = _this.attr('data-id');

            _this.stop().toggleClass('active');
            $(idTarget).stop().toggleClass('active');
        }

        return false;
    });

    $('.btn_close').click(function() {
        var _this = $(this);

        var idTarget = _this.attr('data-id');

        $(idTarget).stop().toggleClass('active');

        return false;
    });
});
