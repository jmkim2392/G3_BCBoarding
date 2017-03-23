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
    $(".SlopesCard").hover(function () {
        $(this).find(".SlopesCardImg").fadeTo(300, 0.2);
        $(this).find(".SlopesPreview").fadeTo(300, 1);
    }, function () {
        $(this).find(".SlopesCardImg").fadeTo(100, 1);
        $(this).find(".SlopesPreview").fadeTo(100, 0);
    });
});
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    var height = $(window).height();
    $('.bannerSlopes, .bannerGear, .bannerAbout, .bannerForum, .bannerMember').css({
        'opacity': ((height - scrollTop) / height)
    });
});