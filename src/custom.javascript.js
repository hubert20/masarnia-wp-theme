jQuery(function ($) {
    'use strict';
    //Qookie
    var sName = "cookiesok";
    $("#close-cookie-warn").click(function () {
        var oExpire = new Date();
        oExpire.setTime((new Date()).getTime() + 3600000 * 24 * 365);
        document.cookie = sName + "=1;expires=" + oExpire;
        $("#cookie-warn").hide("slow");
    });
    var sStr = '; ' + document.cookie + ';';
    var nIndex = sStr.indexOf('; ' + escape(sName) + '=');
    if (nIndex === -1) {
        $("#cookie-warn").show();
    }
    // Add scroll fixed class
    window.onscroll = function () {
        navbarFunction();
    };
    var navbar = document.getElementById('top-header');
    function navbarFunction() {
        if (window.pageYOffset > 0) {
            navbar.classList.add('sticky');
        } else {
            navbar.classList.remove('sticky');
        }
    }
    // Fireflay
    if ($(".into_firefly").length) {
        $.firefly({
            color: '#e59726', minPixel: 1, maxPixel: 2, total: 40, on: '.into_firefly'
        });
    }
});