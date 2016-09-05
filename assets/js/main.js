jQuery(function ($) {

    $(function () {
        $('#main-slider.carousel').carousel({
            interval: 10000,
            pause: false
        });
    });

    //Ajax contact
    var form = $('.contact-form');
    form.submit(function () {
        $this = $(this);
        $.post($(this).attr('action'), function (data) {
            $this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
        }, 'json');
        return false;
    });

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
    $('#logo').click(function () {
        $('html,body').animate({scrollTop:0},500);
    });
});