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
