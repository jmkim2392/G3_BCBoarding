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

function validatecname() {
    var errid = document.getElementById("errcname");
    var id = document.getElementById("username");
    if (id.value === "") {
        errid.setAttribute("style", "visibility:visible");
    }
    else {
        errid.setAttribute("style", "visibility:hidden");
    }
}

function validatecpass() {
    var errid = document.getElementById("errcpass");
    var id = document.getElementById("cpassword");
    if (id.value === "") {
        errid.setAttribute("style", "visibility:visible");
    }
    else {
        errid.setAttribute("style", "visibility:hidden");
    }
}

function validateemail() {
    var errid = document.getElementById("erremail");
    var regexp1 = /[^A-Z0-9._-]/;
    if (regexp1.test(document.getElementById("email").value)) {
        errid.setAttribute("style", "visibility:visible");
        return false;
    }
    else {
        errid.setAttribute("style", "visibility:hidden");
    }
}

function validatename() {
    var errid = document.getElementById("errname");
    var id = document.getElementById("name");
    if (id.value === "") {
        errid.setAttribute("style", "visibility:visible");
    }
    else {
        errid.setAttribute("style", "visibility:hidden");
    }
}

function validatepass() {
    var errid = document.getElementById("errpass");
    var id = document.getElementById("pass");
    if (id.value === "") {
        errid.setAttribute("style", "visibility:visible");
    }
    else {
        errid.setAttribute("style", "visibility:hidden");
    }
}