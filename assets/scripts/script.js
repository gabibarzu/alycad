$("#navbar ul li a[href^='#']").on("click", function (e) {
    e.preventDefault();
    var hash = this.hash;
    $("html, body").animate(
        {
            scrollTop: $(hash).offset().top,
        },
        400,
        function () {
            window.location.hash = hash;
        }
    );
});

$("#backToTop").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
        {
            scrollTop: $("#acasa").offset().top - 50,
        },
        700,
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
    var map = new google.maps.Map(
        document.getElementById("googleMap"),
        mapProp
    );
    var marker = new google.maps.Marker({
        position: myCenter,
    });
    marker.setMap(map);
}

$('#currentYear').html(new Date().getFullYear());

Number.prototype.format = function (n) {
    var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
    return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
};

$('.count').each(function () {
    $(this).prop('counter', 0).animate({
        counter: $(this).text()
    }, {
        duration: 10000,
        easing: 'easeOutExpo',
        step: function (step) {
            $(this).text('' + step.format());
        }
    });
});

var buttonMessenger = document.getElementById("button-messenger");
var buttonPhone = document.getElementById("button-phone");

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        buttonMessenger.style.visibility = "hidden";
        buttonMessenger.style.opacity = "0";
        buttonPhone.style.visibility = "hidden";
        buttonPhone.style.opacity = "0";
    } else {
        buttonMessenger.style.visibility = "visible";
        buttonMessenger.style.opacity = "1";
        buttonPhone.style.visibility = "visible";
        buttonPhone.style.opacity = "1";
    }
}