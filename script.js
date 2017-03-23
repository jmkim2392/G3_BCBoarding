$(document).ready(function () {
    /* Gear jquery */
    $(".accordionHeader").click(function () {
        if ($(this).next().is(":hidden")) {
            $(".accordionContent").hide(700, "swing")
            $(this).next().show(700, "swing", function () {
                $('html, body').animate({
                    scrollTop: $(this).offset().top - 160
                }, 450);
            });
        }
        else {
            $(".accordionContent").hide(500, "swing")
        }
        $(".accordionContent").hide(600, "swing")
    });
});
/* Slopes jquery */
$(".SlopesCard").hover(function () {
    $(this).find(".SlopesCardImg").fadeTo(300, 0.2);
    $(this).find(".SlopesPreview").fadeTo(300, 1);
}, function () {
    $(this).find(".SlopesCardImg").fadeTo(100, 1);
    $(this).find(".SlopesPreview").fadeTo(100, 0);
});
$(document).ready(function () {
    $(function () {
        $("#date").datepicker();
    })
});
/* Banner fade out jquery */
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    var height = $(window).height();
    $('.bannerSlopes, .bannerGear, .bannerAbout, .bannerForum, .bannerMember').css({
        'opacity': ((height - scrollTop) / height)
    });
});
/* Form validation for Membership */
function validatecname() {
    var regexp1 = /^[a-z0-9-_\.]+$/i;
    var errid = document.getElementById("errcname");
    if (regexp1.test(document.getElementById("username").value)) {
        errid.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}

function validatecpass() {
    var regexp1 = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    var errid = document.getElementById("errcpass");
    var req = document.getElementById("passreqlist");
    if (regexp1.test(document.getElementById("cpassword").value)) {
        errid.setAttribute("style", "visibility:hidden");
        req.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
        req.setAttribute("style", "visibility:visible");
    }
}

function validateemail() {
    var errid = document.getElementById("erremail");
    var regexp1 = /\S+@\S+\.\S+/;
    if (regexp1.test(document.getElementById("email").value)) {
        errid.setAttribute("style", "visibility:hidden");
        return true;
        return false;
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}

function validatename() {
    var regexp1 = /^[a-z0-9-_\.]+$/;
    var errid = document.getElementById("errname");
    if (regexp1.test(document.getElementById("name").value)) {
        errid.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}

function validatepass() {
    var regexp1 = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    var errid = document.getElementById("errpass");
    if (regexp1.test(document.getElementById("pass").value)) {
        errid.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}
/* Forum js*/
function formValidate() {
    var nameRegex = new RegExp(/^[a-zA-Z]+$/);
    if ($("#usr").val().match(nameRegex) == null) {
        $("#errUser").html("Please enter a valid name");
        $("#form-group1").className = "error";
        return false;
    }
    else {
        $("#errUser").html("");
        $("#form-group1").className = '';
    }
    var emailRegex = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    if ($("#em").val().match(emailRegex) == null) {
        $("#errEmail").html("Please enter a valid email");
        $("#form-group2").className = "error";
        return false;
    }
    else {
        $("#errEmail").html("");
        $("#form-group2").className = '';
    }
    if ($("#comment").val() == "") {
        $("#errComment").html("Comment field is empty");
        $("#form-group3").className = "error";
        return false;
    }
    else {
        $("#errComment").html("");
        $("#form-group3").className = '';
    }
}