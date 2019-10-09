$(document).ready(function() {
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
    });
    wow.init();
});


$(document).ready(function() {
    $('#residenciais').carousel({
        pause: true,
        interval: false,
    });
    $('#comerciais').carousel({
        pause: true,
        interval: false,
    });
    $('#modal-cidade-jardim').carousel({
        pause: true,
        interval: false,
    });
});


// Script Scroll OnPage
$(document).ready(function() {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".navbar").addClass("navbarBG");
    } else {
        $(".navbar").removeClass("navbarBG");
    }
});

$(function() {
    $('.nome').clear();
    $('.email').clear();
    $('.phone').clear();
    $('.interesse').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function() {
        var n, e, t, i, m;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.phone').val();
        i = $('.interesse').val();
        m = $('.msg').val();
    });

});