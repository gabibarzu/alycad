$(document).on("click", 'a[href^="#"].scroll', function (event) {
  event.preventDefault();
  $("html, body").animate(
    {
      scrollTop: $($.attr(this, "href")).offset().top - 55,
    },
    500
  );
});

$(document).on("click", 'a[href^="#"].scroll', function (event) {
  if ($(window).width() < 768) {
    $(".navbar-collapse").collapse("toggle");
  }
});

$("#backToTop").on("click", function (e) {
  e.preventDefault();
  $("html, body").animate(
    {
      scrollTop: $("#acasa").offset().top - 50,
    },
    500,
    function () {
      window.location.hash = "#acasa";
    }
  );
});

function myMap() {
  var myCenter = new google.maps.LatLng(47.1567594, 27.5913326);
  var mapProp = {
    center: myCenter,
    zoom: 13,
    scrollwheel: false,
    draggable: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

$("#currentYear").html(new Date().getFullYear());

Number.prototype.format = function (n) {
  var r = new RegExp("\\d(?=(\\d{3})+" + (n > 0 ? "\\." : "$") + ")", "g");
  return this.toFixed(Math.max(0, Math.floor(n))).replace(r, "$&,");
};

$(".count").each(function () {
  $(this)
    .prop("counter", 0)
    .animate(
      {
        counter: $(this).text(),
      },
      {
        duration: 10000,
        easing: "easeOutExpo",
        step: function (step) {
          $(this).text("" + step.format());
        },
      }
    );
});

var buttonPhone = document.getElementById("button-phone");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    buttonPhone.style.visibility = "hidden";
    buttonPhone.style.opacity = "0";
  } else {
    buttonPhone.style.visibility = "visible";
    buttonPhone.style.opacity = "1";
  }
}
