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

    $('a[href^="#home-body"]').on('click', function(event){
        var target = $( $(this).attr('href') );
             if( target.length ) {
                 event.preventDefault();
                 $('html, body').animate({
                      scrollTop: target.offset().top
                 }, 1000);
             }
    });
});

function scrollTo() {
  document.getElementById("home-body").scrollIntoView();
}
