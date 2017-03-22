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

function validatecname() {
    var regexp1 = /^[a-z0-9-_\.]+$/i;
    var errid = document.getElementById("errcname");
    var id = document.getElementById("username");
    if (regexp1.test(document.getElementById("username").value)) {
        errid.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}

function validatecpass() {
    var regexp1 = /^[a-z0-9]+$/i;
    var errid = document.getElementById("errcpass");
    var id = document.getElementById("cpassword");
    if (regexp1.test(document.getElementById("cpassword").value)) {
        errid.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}

function validateemail() {
    var errid = document.getElementById("erremail");
    var regexp1 = /\S+@\S+\.\S+/;
    if (regexp1.test(document.getElementById("email").value)) {
        errid.setAttribute("style", "visibility:hidden");
        return true;
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}

function validatename() {
    var regexp1 = /^[a-z0-9-_\.]+$/i;
    var errid = document.getElementById("errname");
    var id = document.getElementById("name");
    if (regexp1.test(document.getElementById("name").value)) {
        errid.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}

function validatepass() {
    var regexp1 = /^[a-z0-9]+$/i;
    var errid = document.getElementById("errpass");
    var id = document.getElementById("pass");
    if (regexp1.test(document.getElementById("pass").value)) {
        errid.setAttribute("style", "visibility:hidden");
    }
    else {
        errid.setAttribute("style", "visibility:visible");
    }
}