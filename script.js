$(document).ready(function () {
    $(".accordionHeader").click(function () {
        $(this).next().slideToggle(500, "swing");
    });
});