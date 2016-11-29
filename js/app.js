"use strict";

var drop = function () {
    if ($('#nav').hasClass('nav-closed')) {
        $('#nav').removeClass('nav-closed').addClass('nav-open');
        document.getElementById('menu-icon').innerHTML = '&#x2613;';
        console.log('open');
        
    } else if ($('#nav').hasClass('nav-open')) {
        $('#nav').removeClass('nav-open').addClass('nav-closed');
        document.getElementById('menu-icon').innerHTML = '&#9776;';   
        console.log('closed');
    } 
}

var navClose = function () {
    $('#nav').removeClass('nav-open').addClass('nav-closed');
    document.getElementById('menu-icon').innerHTML = '&#9776;';
    console.log('closed');
}

function initMap() {
        var uluru = {lat: 43.586444, lng: -79.746335};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }


var tabOpen = function (navItem) {
    $('nav li').removeClass('nav-item');
    $(navItem).addClass('nav-item');
};








































































var api = 'AIzaSyCS0OpvWaw2L9WZOdKVUrZQ8aBFEeJ94pA';