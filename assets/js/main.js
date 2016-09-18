jQuery(function ($) {

    $(function () {
        $('#main-slider.carousel').carousel({
            interval: 10000,
            pause: false
        });
    });

    //Ajax contact
//    var form = $('.contact-form');
//    form.submit(function () {
//        $this = $(this);
//        $.post($(this).attr('action'), function (data) {
//            $this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
//        }, 'json');
//        return false;
//    });

    //smooth scroll
    $('.navbar-nav > li').click(function (event) {
        event.preventDefault();
        var target = $(this).find('>a').prop('hash');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 500);
    });
    //smooth part 2
    $('.scroll').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(this).offset().top
        }, 500);
    });

    //scrollspy
    $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh');
    });

    //PrettyPhoto
    $("a.preview").prettyPhoto({
        social_tools: false
    });

    //Isotope
    $(window).load(function () {
        $portfolio = $('.portfolio-items');
        $portfolio.isotope({
            itemSelector: 'li',
            layoutMode: 'fitRows'
        });
        $portfolio_selectors = $('.portfolio-filter >li>a');
        $portfolio_selectors.on('click', function () {
            $portfolio_selectors.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({filter: selector});
            return false;
        });
    });
});

$(document).ready(function () {
    $("#phone").mask("(99) 9999?9-9999");
    $("#phone").on("blur", function () {
        var last = $(this).val().substr($(this).val().indexOf("-") + 1);
        if (last.length == 3) {
            var move = $(this).val().substr($(this).val().indexOf("-") - 1, 1);
            var lastfour = move + last;
            var first = $(this).val().substr(0, 9);
            $(this).val(first + '-' + lastfour);
        }
    });
//    $("#main-slider").height($(window).height());
//    $(window).resize(function(){
//        $("#main-slider").height($(window).height());
//        $("#main-slider").css("min-height", "600px");
//    });
////    $("#work").height($(window).height());
////    $(window).resize(function(){
////        $("#work").minHeight($(window).height());
////        $(".showcase-info").css("min-height","360px");
////    });
////    $("#networks").height($(window).height());
////    $(window).resize(function(){
////        $("#networks").height($(window).height());
////        $("#networks").css("min-height","600px");
////    });
    var progressBar = $('.progress-bar');
    setInterval(addProgress, 1000);
    function addProgress() {
        var width = progressBar.width() + 15;
        progressBar.width(width);
    }
    $('#logo').click(function () {
        $('html,body').animate({scrollTop: 0}, 500);
    });
//    var request;
//    $('#main-contact-form').submit(function (event) {
//        var $form = $(this);
//        var $inputs = $form.find("input, select, button, textarea");
//        var serializedData = $form.serialize();
//        request = $.ajax({
//            url: "/sendemail.php",
//            type: 'POST',
//            data: serializedData
//        });
//
//    });
    setInterval(function () {
        blink();
    }, 1000);
    function blink() {
        $("#blink").fadeTo(300, 0).fadeTo(400, 1.0);        
    }
});