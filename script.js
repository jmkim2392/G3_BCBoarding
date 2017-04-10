 /* Gear jquery */
 $(document).ready(function () {
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
     });
 });
 /* Slopes jquery */
 /*change hover to click and make close button*/
$(document).ready(function () {
     $(".SlopesCard").hover(function () {
         $(this).find(".SlopesCardImg").fadeTo(300, 0.2);
     }, function () {
         $(this).find(".SlopesCardImg").fadeTo(100, 1);
     });
 });
$(document).ready(function () {
     $(".BigWhite").click(function () {
         $(".BigWhiteContent").fadeTo(300, 1);
         $(".BigWhiteContent").css({
             "z-index": "1"
         });
         bigWhiteMap();
     });
 });
$(document).ready(function () {
     $(".Cypress").click(function () {
         $(".CypressContent").fadeTo(300, 1);
         $(".CypressContent").css({
             "z-index": "1"
         });
         cypressMap();
     });
 });
$(document).ready(function () {
     $(".Grouse").click(function () {
         $(".grouseContent").fadeTo(300, 1);
         $(".grouseContent").css({
             "z-index": "1"
         });
         grouseMap();
     });
 });
$(document).ready(function () {
     $(".Seymour").click(function () {
         $(".seymourContent").fadeTo(300, 1);
         $(".seymourContent").css({
             "z-index": "1"
         });
         seymourMap();
     });
 });
$(document).ready(function () {
     $(".SunPeaks").click(function () {
         $(".sunPeaksContent").fadeTo(300, 1);
         $(".sunPeaksContent").css({
             "z-index": "1"
         });
         sunPeaksMap();
     });
 });
$(document).ready(function () {
     $(".Whistler").click(function () {
         $(".whistlerContent").fadeTo(300, 1);
         $(".whistlerContent").css({
             "z-index": "1"
         });
         whistlerMap();
     });
 });

 /* Google Map */
 function bigWhiteMap() {
     var centermap = {
         lat: 49.7355
         , lng: -118.9414
     };
     var bigWhite = {
         lat: 49.7216
         , lng: -118.9266
     };
     var map = new google.maps.Map(document.getElementById('bigWhiteMap'), {
         zoom: 12
         , center: centermap
         , panControl: true
         , zoomControl: true
         , mapTypeControl: true
         , scaleControl: true
         , streetViewControl: true
         , overviewMapControl: true
         , rotateControl: true
     });
     var marker = new google.maps.Marker({
         position: bigWhite
         , map: map
     });
 }
function cypressMap() {
     var centermap = {
       lat: 49.3959
         , lng: -123.2046
     };
     var cypress = {
         lat: 49.3959
         , lng: -123.2046
     };
     var map = new google.maps.Map(document.getElementById('cypressMap'), {
         zoom: 14
         , center: centermap
         , panControl: true
         , zoomControl: true
         , mapTypeControl: true
         , scaleControl: true
         , streetViewControl: true
         , overviewMapControl: true
         , rotateControl: true
     });
     var marker = new google.maps.Marker({
         position: cypress
         , map: map
     });
 }
function grouseMap() {
     var centermap = {
         lat: 49.3722
         , lng: -123.0996
     };
     var grouse = {
         lat: 49.3722
         , lng: -123.0996
     };
     var map = new google.maps.Map(document.getElementById('grouseMap'), {
         zoom: 13
         , center: centermap
         , panControl: true
         , zoomControl: true
         , mapTypeControl: true
         , scaleControl: true
         , streetViewControl: true
         , overviewMapControl: true
         , rotateControl: true
     });
     var marker = new google.maps.Marker({
         position: grouse
         , map: map
     });
 }
function seymourMap() {
     var centermap = {
      lat: 49.3654
         , lng: -122.9483
     };
     var seymour = {
         lat: 49.3654
         , lng: -122.9483
     };
     var map = new google.maps.Map(document.getElementById('seymourMap'), {
         zoom: 15
         , center: centermap
         , panControl: true
         , zoomControl: true
         , mapTypeControl: true
         , scaleControl: true
         , streetViewControl: true
         , overviewMapControl: true
         , rotateControl: true
     });
     var marker = new google.maps.Marker({
         position: seymour
         , map: map
     });
 }
function sunPeaksMap() {
     var centermap = {
  lat: 50.8844
         , lng: -119.8859
     };
     var sunPeaks = {
         lat: 50.8844
         , lng: -119.8859
     };
     var map = new google.maps.Map(document.getElementById('sunPeaksMap'), {
         zoom: 12
         , center: centermap
         , panControl: true
         , zoomControl: true
         , mapTypeControl: true
         , scaleControl: true
         , streetViewControl: true
         , overviewMapControl: true
         , rotateControl: true
     });
     var marker = new google.maps.Marker({
         position: sunPeaks
         , map: map
     });
 }
function whistlerMap() {
     var centermap = {
       lat: 50.1162
         , lng: -122.9574
     };
     var whistler = {
         lat: 50.1162
         , lng: -122.9574
     };
     var map = new google.maps.Map(document.getElementById('whistlerMap'), {
         zoom: 12
         , center: centermap
         , panControl: true
         , zoomControl: true
         , mapTypeControl: true
         , scaleControl: true
         , streetViewControl: true
         , overviewMapControl: true
         , rotateControl: true
     });
     var marker = new google.maps.Marker({
         position: whistler
         , map: map
     });
 }
 /* Back to Top button */
 window.onscroll = function () {
     scrollFunction()
 };

 /* Close button */
 $(document).ready(function () {
     $(".closeBtn").click(function () {
         $(this).parent().css({
             "z-index": "0"
         });
         $(this).parent().hide();
     });
 });

 function scrollFunction() {
     if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
         document.getElementById("backToTop").style.display = "block";
     }
     else {
         document.getElementById("backToTop").style.display = "none";
     }
 }
 // When the user clicks on the button, scroll to the top of the document
 function topFunction() {
     document.body.scrollTop = 0;
     document.documentElement.scrollTop = 0;
 }
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