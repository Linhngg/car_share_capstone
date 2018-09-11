$(document).ready(function () {
    var sidebarState = $('#sidebar');
    //nav sidebar toggler
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        localStorage.setItem('state', sidebarState.hasClass('active'));
    });

    window.onload = function() {
        if (localStorage.getItem('state') === 'true') {
            sidebarState.addClass('active');
        }
    }

    // Responsive sidebar on resize small screen
    function resize() {
        if ($(window).width() > 768) {
            $('#sidebar').removeClass('active');
        }
        else {
            $('#sidebar').addClass('active');
        }
    }
        $(window).resize(function () {
            resize();
        });

});

