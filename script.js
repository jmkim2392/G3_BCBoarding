$(document).ready(function () {
    $(".accordionHeader").click(function () {
        if ($(this).next().is(":hidden")) {
            $(".accordionContent").hide(500, "swing")
            $(this).next().show(500, "swing", function () {
                $('html, body').animate({
                    scrollTop: $(this).offset().top - 165
                }, 1000);
            });
        }
        else {
            $(".accordionContent").hide(500, "swing")
            }
    });
});