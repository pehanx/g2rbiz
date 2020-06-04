$(document).ready(function(){
    $(".mainPageBlock1__link").hover(function(){
        let data_bg = $(this).attr('data-bg');
        // let img = $('.mainPageBlock1__image__img');
        let img = $('.mainPageBlock1__image');
        img.css('background-image','url(' + data_bg + ')');
        img.addClass('mainPageBlock1__image-show');
    }, function(){
        // let img = $('.mainPageBlock1__image__img');
        let img = $('.mainPageBlock1__image');
        img.removeClass('mainPageBlock1__image-show');
    });

    let sliderContainer = $('.slider__container');
    $(window).resize(function() {
        if ($(window).width() <= 1020) {
            if (sliderContainer.hasClass('slides')) {
                sliderContainer.removeClass('slides');
                $('body').removeClass('scroll');
                sliderContainer.removeAttr('style');
            }
        } else {
            if (!$('.slider__container').hasClass('slides')) {
                location.reload(true);
            }
        }
    }).resize();

    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y < 50) {
            $('.header').removeClass('scroll-menu');
        } else {
            $('.header').addClass('scroll-menu');
        }
    });

    $('.header__burger').on('click',function (e) {
        $('.header__navigation').toggleClass('show');
    });

    $('.header__navigation__close').on('click',function (e) {
        $('.header__navigation').toggleClass('show');
    });

    $('.accordion__button').on('click', function () {
        $(this).toggleClass('active');
        $(this).next().slideToggle();
    });


});

